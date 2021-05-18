<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyDateController extends Controller
{
    public function index()
    {
        return view('pages.key-date.index');
    }
}
