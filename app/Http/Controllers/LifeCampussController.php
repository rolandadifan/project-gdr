<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCampussController extends Controller
{
    public function graduations()
    {
        return view('pages.life-gunadarma.graduations');
    }

    public function studenLife()
    {
        return view('pages.life-gunadarma.student-life');
    }

    public function whyStudy()
    {
        return view('pages.life-gunadarma.why-study');
    }
}
