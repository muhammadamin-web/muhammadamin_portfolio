<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::all();

        return view('user.posts.index',  compact('posts'));
    }

    public function show()
    {
        return view('user.posts.show');
    }

}
