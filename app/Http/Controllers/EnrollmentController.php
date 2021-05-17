<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $step_one = Page::where('key', 'step-1')->first();
        $step_two = Page::where('key', 'step-2')->first();
        $step_three = Page::where('key', 'step-3')->first();
        $step_ones = json_decode($step_one->value);
        $step_twos = json_decode($step_two->value);
        $step_threes = json_decode($step_three->value);
        return view('pages.enrollment.index')->with([
            'step_ones' => $step_ones,
            'step_twos' => $step_twos,
            'step_threes' => $step_threes
        ]);
    }

    public function input()
    {
        return view('pages.enrollment.dagree.input');
    }

    public function verifi()
    {
        return view('pages.enrollment.dagree.verifi');
    }
}
