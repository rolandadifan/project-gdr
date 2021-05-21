<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\CourseInfo;
use App\Models\CoursePrice;
use App\Models\Page;
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

    public function postGraduateIndex(Request $request)
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

        $d_name = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'bachelor')->orWhere('degree', 'diploma')->orderBy('created_at', 'DESC');
        })->get();

        $d_campus = CourseDetail::where('degree', '!=', 'non')->select('campus')->distinct()->get();
        $posG = Page::where('key', 'postg')->first();
        $underG = Page::where('key', 'underg')->first();
        
        // $d_campus = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
        //     $query->select('campus')->orderBy('created_at', 'DESC');
        // })->get();

        // $course = Course::with('courseDetail')->where('name', $request->name)->where(function ($query) use ($request){
        //     return $request->campus ? $query->from('courseDetail')->where('campus', $request->campus) : '';
        // })->where(function($query) use ($request){
        //     return $request->degree ? $query->from('courseDetail')->where('degree', $request->degree) : '';
        // })->get();

        // $select = [];
        // $select['campus'] = $request->campus;
        // $select['degree'] = $request->degree;

        return view('pages.course.postgraduate')->with([
            // 'course' => $course,
            // 'select' => $select,
            'd_name' => $d_name,
            'd_campus' => $d_campus,
            'posG' => $posG,
            'underG' => $underG,
        ]);
    }

    // public function searchPost(Request $request)
    // {
    //     // $course = Course::with('courseDetail')->where('name', $request->name)->where(function ($query) use ($request){
    //     //     return $request->campus ? $query->from('courseDetail')->where('campus', $request->campus) : '';
    //     // })->where(function($query) use ($request){
    //     //     return $request->degree ? $query->from('courseDetail')->where('degree', $request->degree) : '';
    //     // })->get();


    //     //yg bisa
    //     // $course = Course::with('courseDetail')->where('name', $request->name)
    //     // ->where(function ($query) use ($request){
    //     //     return $request->campus ? $query->from('courseDetail')->where('campus', $request->campus) : '';
    //     // })->where(function($query) use ($request){
    //     //     return $request->degree ? $query->from('courseDetail')->where('degree', $request->degree) : '';
    //     // })->get();

    //     $course = Course::with('courseDetail')->where('name', $request->name)
    //     ->where(function ($query) use ($request){
    //         return $request->campus ? $query->from('courseDetail')->where('campus', $request->campus) : '';
    //     })->whereHas('courseDetail', function (Builder $query) use ($request){
    //        return $request->campus ? $query->where('degree', $request->degree) : '';
    //     })->get();


    //     $d_name = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
    //         $query->where('degree', 'bachelor')->orWhere('degree', 'diploma')->orderBy('created_at', 'DESC');
    //     })->get();
        
    //     $d_campus = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
    //         $query->select('campus')->orderBy('created_at', 'DESC');
    //     })->get();


    //     $select = [];
    //     $select['campus'] = $request->campus;
    //     $select['degree'] = $request->degree;

    //     // dd($course);
    //     return view('pages.course.post-search')->with([
    //         'course' => $course,
    //         'select' => $select,
    //          'd_name' => $d_name,
    //         'd_campus' => $d_campus,
    //     ]);
    // }
    public function searchPost(Request $request)
    {
        
        $d_name = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'bachelor')->orWhere('degree', 'diploma')->orderBy('created_at', 'DESC');
        })->get();
                
        // $d_campus = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
        //     $query->distinct()->count('campus');
        // })->get();

        $d_campus = CourseDetail::where('degree', '!=', 'non')->select('campus')->distinct()->get();
        // dd($d_campus);

        
        $course = Course::query()->whereHas('courseDetail', function (Builder $query){
            $query->with('prices')->Where('degree', 'bachelor')->orWhere('degree', 'diploma');
        });

        if($request->filled('campus') && $request->campus != 'null'){
            $course->whereHas('courseDetail', function (Builder $query) use ($request) {
            $query->where('campus', $request->campus);
        });
        }
        if($request->filled('name') && $request->name != 'null'){
            $course->where('name', $request->name);
        }
        if($request->filled('degree') && $request->degree != 'null'){
            $course->whereHas('courseDetail', function (Builder $query) use ($request) {
            $query->where('degree', $request->degree);
        });
        }

        $posG = Page::where('key', 'postg')->first();
        $underG = Page::where('key', 'underg')->first();

        // $sql = $course->toSql();
        // dd($sql);
        
        return view('pages.course.post-search')->with([
            'course' => $course->get(),
             'd_name' => $d_name,
            'd_campus' => $d_campus,
            'posG' => $posG,
            'underG' => $underG,
        ]);
    }

    public function underGraduateIndex()
    {
         $d_name = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'master')->orWhere('degree', 'doctor')->orderBy('created_at', 'DESC');
        })->get();
        
        $d_campus = CourseDetail::where('degree', '!=', 'non')->select('campus')->distinct()->get();
        $posG = Page::where('key', 'postg')->first();
        $underG = Page::where('key', 'underg')->first();
        return view('pages.course.udergraduate')->with([
            // 'course' => $course,
            // 'select' => $select,
            'd_name' => $d_name,
            'd_campus' => $d_campus,
            'posG' => $posG,
            'underG' => $underG,
        ]);
    }

    public function searchUnder(Request $request)
    {
         $d_name = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'master')->orWhere('degree', 'doctor')->orderBy('created_at', 'DESC');
        })->get();
                
        // $d_campus = Course::with('courseDetail')->whereHas('courseDetail', function (Builder $query) {
        //     $query->distinct()->count('campus');
        // })->get();

        $d_campus = CourseDetail::where('degree', '!=', 'non')->select('campus')->distinct()->get();
        // dd($d_campus);

        
        $course = Course::query()->whereHas('courseDetail', function (Builder $query){
            $query->with('prices')->Where('degree', 'master')->orWhere('degree', 'doctor');
        });

        if($request->filled('campus') && $request->campus != 'null'){
            $course->whereHas('courseDetail', function (Builder $query) use ($request) {
            $query->where('campus', $request->campus);
        });
        }
        if($request->filled('name') && $request->name != 'null'){
            $course->where('name', $request->name);
        }
        if($request->filled('degree') && $request->degree != 'null'){
            $course->whereHas('courseDetail', function (Builder $query) use ($request) {
            $query->where('degree', $request->degree);
        });
        }



        // $sql = $course->toSql();
        // dd($sql);
        $posG = Page::where('key', 'postg')->first();
        $underG = Page::where('key', 'underg')->first();
        return view('pages.course.under-search')->with([
            'course' => $course->get(),
             'd_name' => $d_name,
            'd_campus' => $d_campus,
            'posG' => $posG,
            'underG' => $underG,
        ]);
    }
}
