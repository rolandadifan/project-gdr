<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        return view('pages.enrollment.index');
    }

    public function input()
    {
        return view('pages.enrollment.dagree.input');
    }

    public function verifi()
    {
        return view('pages.enrollment.dagree.verifi');
    }
}
