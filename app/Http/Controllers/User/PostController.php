<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() 
    {
        return view('user.posts.index');
    }

    public function show()
    {
        return view('user.posts.show');
    }

}
