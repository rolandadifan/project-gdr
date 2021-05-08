<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function abouts()
    {
        return view('pages.about.index');
    }

    public function news()
    {
        return view('pages.artikel.news');
    }

    public function event()
    {
        return view('pages.artikel.event');
    }

    public function detail()
    {
        return view('pages.artikel.detail');
    }
}
