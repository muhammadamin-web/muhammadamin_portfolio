<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index()
    {
        return view('admin.works.index');
    }

    public function create()
    {
        return view('admin.works.create_edit');
    }
    
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'user_id' => $user->id,
            'title' => 'required',
            'link' => 'required',
            'image' => 'required',
            'keywords' => 'required',
            'description' => 'required'
        ]);
    }

    public function edit(Work $work)
    {
        return view('admin.works.create', compact('work'));
    }
}
