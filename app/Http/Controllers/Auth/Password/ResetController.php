<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Controllers\Controller;

class Reset_passwordController extends Controller
{

    public function reset_password()
    {
        return view('auth.password.reset');
    }
    
}
