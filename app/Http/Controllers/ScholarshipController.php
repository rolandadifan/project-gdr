<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('pages.scholarship.index');
    }

    public function detail()
    {
        return view('pages.scholarship.detail');
    }
}
