<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
        $posts = Post::with('user')->get();
        return view('policy')->with('posts', $posts);
    }

    public  function show(Post $post){
        $this->authorize('view', $post);
        return view('post_view')->with('post', $post);
    }
}
