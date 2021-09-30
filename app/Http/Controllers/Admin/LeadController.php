<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function index()
    {
        return view('leads.index');
    }
}
