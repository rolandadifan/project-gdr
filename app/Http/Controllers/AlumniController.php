<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $testimonies = Alumni::with(['user.userDetail', 'course'])->orderBy('created_at', 'DESC')->limit(5)->get();
        // dd($testimonies);
        $top = Alumni::with(['user.userDetail', 'course'])->where('is_top', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('pages.alumni.index')->with([
            'testimonies' => $testimonies,
            'top' => $top,
        ]);
    }
}
