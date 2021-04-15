<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('status', 'active')
            ->where('typeDuration', 'short')
            ->select('id', 'courseName', 'thumbnail', 'slug')
            ->latest()
            ->paginate(9);
        return view('pages.course.short-course')->with([
            'courses' => $courses
        ]);
    }

    public function detail($id)
    {
        $course = Course::with('courseInfo')
            ->select('id', 'courseName', 'thumbnail', 'typeDuration', 'information', 'startPeriode', 'endPeriode', 'status')
            ->where('slug', $id)
            ->firstOrFail();
        $courses = Course::inRandomOrder()
            ->where('status', 'active')
            ->where('typeDuration', 'short')
            ->select('id', 'courseName', 'thumbnail', 'slug')
            ->limit(6)
            ->get();
        return view('pages.course.detail-course')->with([
            'course' => $course,
            'courses' => $courses
        ]);
    }

    public function postGraduateIndex()
    {
        return view('pages.course.postgraduate');
    }

    public function underGraduateIndex()
    {
        return view('pages.course.udergraduate');
    }
}
