<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Controllers\Controller;

class ForgetController extends Controller
{
    
    public function show()
    {
        return view('auth.password.forget');
    }
    public function send_link()
    {
        // post method
    }
}
