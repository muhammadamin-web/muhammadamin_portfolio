<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'user_id' => $user->id,
            'status' => 'published',
            'title' => 'required',
            'body' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        Post::create($request->all());
     
        return redirect()->route('admin.posts.index');
    }
    public function edit(Post $post)
    {
        return view('admin.posts.create',compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }
}
