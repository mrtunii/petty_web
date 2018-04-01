<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function getPositions($post_id) {
        $comment = Comment::where('post_id',$post_id)->orderBy('date_seen','asc')->get();
        return response()->json($comment);
    }

    public function add($post_id) {
        if($post_id == null) {
            return redirect('/');
        }
        return view('post.comment.add')->with('post_id',$post_id);
    }

    public function insert(Request $request) {
        $this->validate($request, [
            'seen_date' => 'required',
            'seen_address' => 'required',
            'description' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ]);

        $data = $request->except(['image']);
        $data['user_id'] = Auth::user()->id;
        $data['seen_date'] = Carbon::parse($data['seen_date'])->toDateTimeString();
        // upload comment image
        if($request->hasFile('image')) {
            $image = $request->file('image');
                $filename = md5(time()).mt_rand(1,100000000).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $filename);
                $data['image_path'] = $filename;
        }
        try {
            Comment::create($data);

            return redirect('/post/'.$request->post_id);    
        } catch(\Exception $e ) {
            dd($e->getMessage());
            return redirect('/');
        }
        

    }


    public function remove($id) {
        $comment = Comment::findOrFail($id);
        $post_id = $comment->post_id;
        $comment->delete();
        return redirect('/post/'.$post_id);
    }
}
