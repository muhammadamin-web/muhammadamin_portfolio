<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()    
    {
        return view('admin.posts.create_edit');
    }
    public function store(Request $request)
    {        
        // $user = Auth::user();
        $this->validate($request, [
            
        ]);
    }
}
