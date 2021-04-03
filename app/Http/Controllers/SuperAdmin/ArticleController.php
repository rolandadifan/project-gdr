<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function NewsIndex()
    {
        return view('superadmin.pages.artikel.news.index');
    }

    public function EventIndex()
    {
        return view('superadmin.pages.artikel.event.index');
    }

    public function ScholarshipIndex()
    {
        return view('superadmin.pages.artikel.scholarship.index');
    }

    public function create()
    {
        return view('superadmin.pages.artikel.create');
    }
}
