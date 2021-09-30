<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function forget_password()
    {
        return view('auth.password.forget');
    }
    
    public function reset_password()
    {
        return view('auth.password.reset');
    }
}
