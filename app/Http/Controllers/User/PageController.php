<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function works()
    {
        return view('user.works');
    }
}
