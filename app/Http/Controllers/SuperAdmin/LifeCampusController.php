<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
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

    // public function sneakpeak(Request $request)
    // {
    //     $data = $request->file('thumbnail')->store('setting', 'public');
    //     Setting::create([
    //         'thumbnail' => $data
    //     ]);

    //     return json_encode(array('statusCode' => 200));
    // }
}
