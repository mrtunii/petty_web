<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id','desc')->with('images')->get();
        return view('home')->with('posts',$posts);
    }
}
