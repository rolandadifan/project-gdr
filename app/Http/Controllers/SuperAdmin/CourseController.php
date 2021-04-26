<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseLongRequest;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\CourseInfo;
use App\Models\CoursePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class CourseController extends Controller
{
    public function index()
    {
        
        $shortCourse = Course::with('status')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'non');
        })->get();
        $course = Course::with('status')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', '!=', 'non');
        })->get();
        
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
        $course_name = $request->validate([
            'name' => 'required|string',
        ]);
        $course_thumbnail = $request->validate([
            'thumbnail' => 'image|required|max:300',
        ]);

        $course_name = $request->name;
        $course_thumbnail = $request->file('thumbnail')->store('course', 'public');
        $course_content = $request->content;
        $course_slug = $request->slug;
        $course_slug = Str::slug($course_name);

        $course = Course::create([
            'status_id' => 2,
            'name' => $course_name,
            'slug' =>  $course_slug
        ]);

        CourseDetail::create([
            'course_id' => $course->id,
            'thumbnail' =>  $course_thumbnail,
            'content' => $course_content,
            'degree' => 'non',
        ]);

        return back()->with('status', 'Course Successfuly Create');
    }

    public function editShortCourse($id)
    {
        $course = Course::with(['status', 'courseDetail'])->findOrFail($id);
        return view('superadmin.pages.course.edit.short-edit')->with([
            'course' => $course
        ]);
    }

    public function updateShortCourse(Request $request, $id)
    {
        if($request->hasFile('thumbnail')){
           $course = Course::findOrFail($id);
            $course_name = $request->input('name');
            $course_slug = Str::slug($course_name);
            $course->update([
                'name' => $course_name,
                'slug' => $course_slug
            ]);
    
            $course_thumbnail = $request->validate([
            'thumbnail' => 'image|required|max:300',
            ]);
            $course_detail = CourseDetail::where('course_id', $course->id)->first();
            $file_path = Storage::url($course_detail->thumbnail);
            $path = str_replace('\\', '/', public_path());
            $course_content = $request->input('content');
            $course_thumbnail = $request->file('thumbnail')->store('course', 'public');
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
            }
            $course_detail->update([
                'content' => $course_content,
                'thumbnail' => $course_thumbnail
            ]);
            return back()->with('status', 'Course Successfuly Updated');

        }else{
            $course = Course::findOrFail($id);
            $course_name = $request->input('name');
            $course_slug = Str::slug($course_name);
            $course->update([
                'name' => $course_name,
                'slug' => $course_slug
            ]);
    
            $course_content = $request->input('content');
            $course_detail = CourseDetail::where('course_id', $course->id)->first();
            $course_detail->update([
                'content' => $course_content,
            ]);
            return back()->with('status', 'Course Successfuly Updated');
        }
        
    }

    public function createCourseLong()
    {
        return view('superadmin.pages.course.create.long-course');
    }

    public function storeCourse(Request $request)
    {
        try {
            $course_name = $request->input('name');
            $slug = Str::slug($course_name);
            $course = Course::create([
                'name' => $course_name,
                'slug' => $slug,
                'status_id' => 2
            ]);
    
            $detail_duration = $request->input('duration');
            $detail_degree = $request->degree;
            $detail_campus = $request->input('campus');
            $detail_deaken_student = $request->input('deaken_student');
            $detail_key_dates = $request->input('key_dates');
            $detail_content = $request->input('content');
            $course_detail = CourseDetail::create([
                'course_id' => $course->id,
                'duration' => $detail_duration,
                'key_dates' => $detail_key_dates,
                'degree' => $detail_degree,
                'campus' => $detail_campus,
                'content' => $detail_content,
                'deaken_student' => $detail_deaken_student,
            ]);
            
            CoursePrice::upsert([
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'AA',
                    'value' => $request->input('gradeAA'),
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'AA_BPP',
                    'value' => $request->input('bppAA')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'AA_SKS',
                    'value' => $request->input('sksAA')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'A',
                    'value' => $request->input('gradeA')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'A_BPP',
                    'value' => $request->input('bppA')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'A_SKS',
                    'value' => $request->input('sksA')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'B',
                    'value' => $request->input('gradeB')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'B_BPP',
                    'value' => $request->input('bppB')
                ],
                [
                    'course_detail_id' => $course_detail->id,
                    'name' => 'B_SKS',
                    'value' => $request->input('sksB')
                ]
                ], ['course_detail_id', 'name', 'value']);
            return back()->with('status', 'Course Successfuly Created');
        } catch (\Throwable $th) {
            return back()->with('error', 'Course Falied To Create');
        }
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
        $data = $request->all();
        $course = Course::findOrFail($id);
        $course->update($data);
        return back()->with('status', 'Course Successfuly Updated');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $file_path = Storage::url($course->thumbnail);
        $path = str_replace('\\', '/', public_path());
        if (file_exists($path . $file_path)) {
            unlink($path . $file_path);
        }
        $course->delete();
        return back()->with('status', 'Course Successfuly Deleted');
    }

    public function active($id)
    {
        $data = DB::table('courses')->where('id', $id)->first();
        $status = $data->status_id;

        if ($status == 2) {
            DB::table('courses')->where('id', $id)->update([
                'status_id' => 1
            ]);
            return back()->with('status', 'Course Active');
        } else {
            return back()->with('error', 'Status Already Active');
        }
    }

    public function inActive($id)
    {
        $data = DB::table('courses')->where('id', $id)->first();
        $status = $data->status_id;

        if ($status == 1) {
            DB::table('courses')->where('id', $id)->update([
                'status_id' => 2
            ]);
            return back()->with('status', 'Course InActive');
        } else {
            return back()->with('error', 'Status Already InActive');
        }
    }
}