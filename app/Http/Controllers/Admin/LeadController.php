<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function index()
    {
        return view('admin.leads.index');
    }

    public function show()
    {
        return view('admin.leads.show');
    }

    public function update()
    {
        //
    }
}
