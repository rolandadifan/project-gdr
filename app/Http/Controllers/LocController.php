<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocController extends Controller
{
    public function index()
    {
        $jakarta = Location::where('ext', 'jakarta')->get();
        $depok = Location::where('ext', 'depok')->get();
        $bekasi = Location::where('ext', 'bekasi')->get();
        $tangerangs = Location::where('ext', 'tangerang')->get();
        return view('pages.locations.index')->with([
            'jakarta' => $jakarta,
            'depok' => $depok,
            'bekasi' => $bekasi,
            'tangerangs' => $tangerangs,
        ]);
    }
}
