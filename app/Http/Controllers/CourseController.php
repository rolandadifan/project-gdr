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
        return view('pages.course.short-course');
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
