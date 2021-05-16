<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Schedule;
use Illuminate\Http\Request;

class LifeCampussController extends Controller
{
    public function graduations()
    {
          $spg = Page::where('key', 'spg')->first();
        $gio = Page::where('key', 'gio')->first();
        $git = Page::where('key', 'git')->first();
        $githree = Page::where('key', 'githree')->first();
        $gif = Page::where('key', 'gif')->first();
        $giv = Page::where('key', 'giv')->first();
        $gix = Page::where('key', 'gix')->first();
        $schedule = Schedule::orderBy('created_at', 'DESC')->take(10)->get();
        return view('pages.life-gunadarma.graduations')->with([
            'spg' => $spg,
            'gio' => $gio,
            'git' => $git,
            'githree' => $githree,
            'gif' => $gif,
            'giv' => $giv,
            'gix' => $gix,
            'schedule' => $schedule
        ]);
    }

    public function studenLife()
    {
        $slpOne = Page::where('key', 'slpOne')->first();
         $slpTwo = Page::where('key', 'slpTwo')->first();
         $slpThree = Page::where('key', 'slpThree')->first();
         $sio = Page::where('key', 'sio')->first();
         $sit = Page::where('key', 'sit')->first();
         $sithree = Page::where('key', 'sithree')->first();
         $sif = Page::where('key', 'sif')->first();
         $siv = Page::where('key', 'siv')->first();
         $six = Page::where('key', 'six')->first();
         $sis = Page::where('key', 'sis')->first();
         $sie = Page::where('key', 'sie')->first();
         $sin = Page::where('key', 'sin')->first();
        return view('pages.life-gunadarma.student-life')->with([
            'slpOne' => $slpOne,
            'slpTwo' => $slpTwo,
            'slpThree' => $slpThree,
            'sio' => $sio,
            'sit' => $sit,
            'sithree' => $sithree,
            'sif' => $sif,
            'siv' => $siv,
            'six' => $six,
            'sis' => $sis,
            'sie' => $sie,
            'sin' => $sin,
        ]);
    }

    public function whyStudy()
    {
         $sneakpeak = Page::where('key', 'sneakpeak')->first();
        $chooseOne = Page::where('key', 'chooseOne')->first();
        $chooseTwo = Page::where('key', 'chooseTwo')->first();
        $chooseThree = Page::where('key', 'chooseThree')->first();
        $lat = Page::where('key', 'lat')->first();
        $wio = Page::where('key', 'wio')->first();
        $wit = Page::where('key', 'wit')->first();
        return view('pages.life-gunadarma.why-study')->with([
            'sneakpeak' => $sneakpeak,
            'chooseOne' => $chooseOne,
            'chooseTwo' => $chooseTwo,
            'chooseThree' => $chooseThree,
            'lat' => $lat,
            'wio' => $wio,
            'wit' => $wit
        ]);
    }
}
