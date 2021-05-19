<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseInfo;
use Illuminate\Database\Eloquent\Builder;
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
        // $courses = Course::where('status', 'active')
        //     ->where('typeDuration', 'short')
        //     ->select('id', 'courseName', 'thumbnail', 'slug')
        //     ->latest()
        //     ->paginate(9);
        // return view('pages.course.short-course')->with([
        //     'courses' => $courses
        // ]);

        $courses = Course::where('status_id', 1)->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'non')->orderBy('created_at', 'DESC');
        })->paginate(9);

        return view('pages.course.short-course')->with([
            'courses' => $courses
        ]);
    }

    public function detail($id)
    {
        // $course = Course::with('courseInfo')
        //     ->select('id', 'courseName', 'thumbnail', 'typeDuration', 'information', 'startPeriode', 'endPeriode', 'status')
        //     ->where('slug', $id)
        //     ->firstOrFail();
        // $courses = Course::inRandomOrder()
        //     ->where('status', 'active')
        //     ->where('typeDuration', 'short')
        //     ->select('id', 'courseName', 'thumbnail', 'slug')
        //     ->limit(6)
        //     ->get();

         $courses = Course::where('status_id', 1)->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'non')->orderBy('created_at', 'DESC');
        })->limit(6)->get();
        $course = Course::with('courseDetail.infos')->where('slug', $id)->first();
        // dd($course);
        // $info = [];
        // $course_info = CourseInfo::where('course_detail_id', $course->id)->get();
        // foreach( $course_info as $csr){
        //     $info[$csr->key] = $csr->title;
        //     $info[$csr->key . 'Detail'] = json_decode($csr->info);
        // };
        return view('pages.course.detail-course')->with([
            'course' => $course,
            'courses' => $courses,
            // 'info' => $info
        ]);
    }

    public function postGraduateIndex()
    {
        // $priceMaster = [];
        // $courseMaster = Course::with('courseDetail.prices')->where('status_id', 1)->whereHas('courseDetail', function (Builder $query) {
        //     $query->where('degree', 'master');
        // })->get();
        // foreach ($courseMaster->courseDetail->prices as $priceArr) {
        //     $priceMaster[$priceArr->name] = $priceArr->value;
        // };
        // return view('pages.course.postgraduate')->with([
        //     'course' => $courseMaster,
        //     'price' => $priceMaster
        // ]);
        return view('pages.course.postgraduate');
    }

    public function underGraduateIndex()
    {
        return view('pages.course.udergraduate');
    }
}
