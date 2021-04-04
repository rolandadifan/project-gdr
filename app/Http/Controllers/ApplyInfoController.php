<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyInfoController extends Controller
{
    public function index()
    {
        return view('pages.how-apply.index');
    }
}
