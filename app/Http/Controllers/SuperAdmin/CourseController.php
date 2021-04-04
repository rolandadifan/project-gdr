<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseLongRequest;
use App\Models\Course;
use App\Models\CourseInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    public function index()
    {
        $shortCourse = Course::where('typeDuration', 'short')->orderBy('created_at')->select('id', 'courseName')->get();
        $course = Course::where('typeDuration', 'long')->orderBy('created_at')->select('id', 'courseName')->get();
        return view('superadmin.pages.course.index')->with([
            'shortCourse' => $shortCourse,
            'course' => $course
        ]);
    }

    public function create()
    {
        return view('superadmin.pages.course.create.short-course');
    }

    public function storeShortCourse(Request $request)
    {
        $data = $request->validate([
            'courseName' => 'required|string',
            'startPeriode' => 'required|string',
            'endPeriode' => 'required|string',
            'information' => 'required|string',
            'thumbnail' => 'required|max:300',
        ]);
        $data['courseName'] = $request->courseName;
        $data['startPeriode'] = $request->startPeriode;
        $data['slug'] = $request->slug;
        $data['endPeriode'] = $request->endPeriode;
        $data['information'] = $request->information;
        $data['typeDuration'] = 'short';
        // $data = $request->all();
        $data['slug'] = Str::slug($request->courseName);
        $data['thumbnail'] = $request->file('thumbnail')->store('course', 'public');
        $course = Course::create($data);


        $title = $request->input('title');
        $info = $request->input('info');
        foreach ($title as $key => $titles) {
            # code...
            CourseInfo::create([
                'course_id' => $course->id,
                'title' => $titles,
                'info' => $info[$key],
            ]);
        }

        return back()->with('status', 'Course Successfuly Create');
    }

    public function editShortCourse($id)
    {
        $course = Course::with('courseInfo')->select('id', 'courseName', 'thumbnail', 'typeDuration', 'information', 'startPeriode', 'endPeriode', 'status')->findOrFail($id);
        return view('superadmin.pages.course.edit.short-edit')->with([
            'course' => $course
        ]);
    }

    public function updateShortCourse(Request $request, $id)
    {
        //
    }

    public function createCourseLong()
    {
        return view('superadmin.pages.course.create.long-course');
    }

    public function storeCourse(CourseLongRequest $request)
    {
        $data = $request->all();
        $data['typeDuration'] = 'long';
        $data['slug'] = Str::slug($request->courseName);
        Course::create($data);
        return back()->with('status', 'Course Successfuly Created');
    }

    public function editCourse($id)
    {
        $course = Course::findorFail($id);
        return view('superadmin.pages.course.edit.long-edit')->with([
            'course' => $course
        ]);
    }

    public function updateLongCourse(Request $request, $id)
    {
        //
    }
}
