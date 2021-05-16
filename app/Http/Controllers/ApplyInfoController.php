<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class ApplyInfoController extends Controller
{
    public function index()
    {
        $single = Page::where('key', 'sigle-unit')->first();
        $under = Page::where('key', 'under-unit')->first();
        $postg = Page::where('key', 'post-unit')->first();
        return view('pages.how-apply.index')->with([
            'single' => $single,
            'under' => $under,
            'postg' => $postg
        ]);
    }
}
