<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class ApplyInfoController extends Controller
{
    public function index()
    {
        $single = Setting::where('key', 'sigle-unit')->first();
        $under = Setting::where('key', 'under-unit')->first();
        $postg = Setting::where('key', 'post-unit')->first();
        return view('pages.how-apply.index')->with([
            'single' => $single,
            'under' => $under,
            'postg' => $postg
        ]);
    }
}
