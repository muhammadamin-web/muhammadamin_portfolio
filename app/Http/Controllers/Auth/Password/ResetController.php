<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Controllers\Controller;

class Reset_passwordController extends Controller
{

    public function show()
    {
        return view('auth.password.reset');
    }
    public function reset_password()
    {
        //method post
    }
    
}
