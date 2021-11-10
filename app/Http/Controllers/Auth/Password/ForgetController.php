<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    
    public function forget_password()
    {
        return view('auth.password.forget');
    }
    
}
