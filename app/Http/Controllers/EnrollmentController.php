<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\CourseInfo;
use App\Models\CoursePrice;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
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
        $scourses = Course::where('status_id', 1)->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'non')->orderBy('created_at', 'DESC');
        })->get();
        $user = User::with('userDetail')->findOrFail(auth()->user()->id);

        return view('pages.enrollment.index')->with([
            'step_ones' => $step_ones,
            'step_twos' => $step_twos,
            'step_threes' => $step_threes,
            'scourses' => $scourses,
            'user' => $user,
        ]);
    }

    public function phase1store(Request $request){
        session(['selected-scource' => $request->scourse ?? '']);
        return redirect()->route('enrollment.input');
    }

    public function input()
    {
        $user = User::with('userDetail')->findOrFail(auth()->user()->id);
        return view('pages.enrollment.dagree.input')->with([
            'user' => $user,
            'scourse' => session('selected-scource'
        )]);
    }

    public function phase2store(Request $request){
        dd($request->all());
        return redirect()->route('enrollment.verifi');
    }

    public function verifi()
    {
        return view('pages.enrollment.dagree.verifi');
    }
}
