<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('works.index');
    }
    public function create()
    {
        return view('works.create');
    }
    public function update()
    {
        return view('works.create');
    }
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'url' => 'required',
            'image' => 'required'

        ]);
    
        }
}
