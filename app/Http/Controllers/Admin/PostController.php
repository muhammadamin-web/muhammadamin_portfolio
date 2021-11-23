<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create_edit');
    }

    public function store(Request $request)
    {
        // $user = Auth::user();
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'status' => [
                'required|string',
                Rule::in(['published', 'draft'])
            ],
            'title' => 'required|string|max:255|min:10',
            'body' => 'required|string|min:50',
            'keywords' => 'required|string|max|255',
            'description' => 'required|string|max:255',
            'image' => 'required|string|max:255'
        ]);
        
        Post::create($request->all());
     
        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.create_edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'status' => [
                'required|string',
                Rule::in(['published', 'draft'])
            ],
            'title' => 'required|string|max:255|min:10',
            'body' => 'required|string|min:50',
            'keywords' => 'required|string|max|255',
            'description' => 'required|string|max:255',
            'image' => 'required|string|max:255'
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index');
    }
}
