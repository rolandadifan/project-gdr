<?php

namespace App\Http\Controllers;

use App\Models\MenuDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    // public function index()
    // {
    //     return view('pages.template.index');
    // }

    public function show($slug)
    {
        $page = MenuDetail::whereSlug($slug)->first();
        return View::make('pages.template.index')->with([
            'page' => $page
        ]);
    }
}
