<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store() 
    {
        // 
    }
}
