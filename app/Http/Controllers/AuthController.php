<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
