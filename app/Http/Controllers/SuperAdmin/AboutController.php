<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('superadmin.pages.about.edit');
    }
}
