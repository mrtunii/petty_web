<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function submit(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'pet_name' => 'required',
            'lost_date' => 'required',
            'lost_address' => 'required'
        ]);

        $data = $request->except(['images']);

        $data['lost_date'] = Carbon::parse($data['lost_date'])->toDateString();
        $data['user_id'] = Auth::user()->id;
        $data['status_id'] = config('postStatuses.Not_Found');

        $newPost = Post::create($data);

        // upload post images
        if($request->hasFile('images')) {

            foreach($request->file('images') as $image) {
                $filename = md5(time()).mt_rand(1,100000000).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $filename);
                PostImage::create([
                    'path' => $filename,
                    'post_id' => $newPost->id
                ]);
            }
        }
    }

    public function detail($id) {
        $post = Post::with('user')->with('images')->with('comments')->findOrFail($id);
        return view('post.detail')->with('post',$post);
    }
}
