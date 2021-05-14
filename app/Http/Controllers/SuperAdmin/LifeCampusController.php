<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LifeCampusController extends Controller
{
    public function whyStudy()
    {
        return view('superadmin.pages.student-life.why-study');
    }

    public function graduation()
    {
        return view('superadmin.pages.student-life.graduation');
    }

    public function studentLife()
    {
        return view('superadmin.pages.student-life.student-life');
    }
}
