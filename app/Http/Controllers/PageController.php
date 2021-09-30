<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function posts()
    {
        return view('posts');
    }
    public function leads()
    {
        return view('leads');
    }
    public function works()
    {
        return view('works');
    }
}
