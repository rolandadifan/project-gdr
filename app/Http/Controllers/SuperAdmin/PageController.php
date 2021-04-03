<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('superadmin.pages.page.index');
    }

    public function submenu()
    {
        return view('superadmin.pages.page.submenu');
    }

    public function create()
    {
        return view('superadmin.pages.page.create');
    }
}
