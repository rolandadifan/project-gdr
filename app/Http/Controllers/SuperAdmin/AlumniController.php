<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        return view('superadmin.pages.alumni.index');
    }

    public function create()
    {
        return view('superadmin.pages.alumni.create');
    }

    public function edit()
    {
        return view('superadmin.pages.alumni.edit');
    }
}
