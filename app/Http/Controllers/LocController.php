<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocController extends Controller
{
    public function index()
    {
        // $jakarta = Location::where('ext', 'jakarta')->paginate(3);
        // $depok = Location::where('ext', 'depok')->paginate(3);
        // $bekasi = Location::where('ext', 'bekasi')->paginate(3);
        // $tangerangs = Location::where('ext', 'tangerang')->paginate(3);
        $locations = Location::get();
        return view('pages.locations.index')->with([
            'locations' => $locations,
            // 'jakarta' => $jakarta,
            // 'depok' => $depok,
            // 'bekasi' => $bekasi,
            // 'tangerangs' => $tangerangs,
        ]);
    }
}