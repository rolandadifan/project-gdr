<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseLongRequest;
use App\Models\Course;
use App\Models\CourseInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    public function index()
    {
        $shortCourse = Course::where('typeDuration', 'short')->orderBy('created_at')->select('id', 'courseName', 'status')->get();
        $course = Course::where('typeDuration', 'long')->orderBy('created_at')->select('id', 'courseName', 'status')->get();
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
        // $data = $request->all();
        if (!$request->thumbnail || $request->thumbnail === null) {
            $data = $request->validate([
                'courseName' => 'string',
                'startPeriode' => 'string',
                'endPeriode' => 'string',
                'information' => 'string',
                'thumbnail' => 'max:300',
            ]);
            $data['courseName'] = $request->courseName;
            $data['startPeriode'] = $request->startPeriode;
            $data['endPeriode'] = $request->endPeriode;
            $data['information'] = $request->information;
            $data['typeDuration'] = 'short';
            $data['slug'] = Str::slug($request->courseName);
            $course = Course::findOrFail($id);
            $course->update($data);

            // $input['title'] = $request->title;
            // $input['info'] = $request->info;

            // foreach ($input['title'] as $key => $value) {
            //     $data_info = CourseInfo::where('title', $input['title'][$key]);
            //     $data_info->update([
            //         'title' => $input['title'][$key],
            //         'info' => $input['info'][$key],
            //     ]);
            // }

            // $data_info['title'] = $request->title;
            // $data_info['info'] = $request->info;
            // $data_info['id'] = $request->id;


            // $course_info = CourseInfo::where('id', $request->id)->get();
            // $course_info->update([
            //     'data_info' => $data_info
            // ]);

            if ($request->title) {
                $title = $request->input('title');
                $info = $request->input('info');
                foreach ($title as $key => $ids) {
                    # code...
                    $course_info = CourseInfo::find($request->id[$key]);
                    $course_info->title = $ids;
                    // $course_info->info = $info[$key];
                    $course_info->info = json_encode(explode(',', $info[$key]));
                    $course_info->save();
                }
            }
            return back()->with('status', 'Course Successfuly Updated');
        } else {
            $data = $request->validate([
                'courseName' => 'string',
                'startPeriode' => 'string',
                'endPeriode' => 'string',
                'information' => 'string',
                'thumbnail' => 'max:300',
            ]);
            $data['courseName'] = $request->courseName;
            $data['startPeriode'] = $request->startPeriode;
            $data['endPeriode'] = $request->endPeriode;
            $data['information'] = $request->information;
            $data['typeDuration'] = 'short';
            $data['slug'] = Str::slug($request->courseName);
            $course = Course::findOrFail($id);
            $file_path = Storage::url($course->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
                $data['thumbnail'] = $request->file('thumbnail')->store('course', 'public');
                $course->update($data);
            }
            if ($request->title) {
                $title = $request->input('title');
                $info = $request->input('info');
                foreach ($title as $key => $ids) {
                    # code...
                    $course_info = CourseInfo::find($request->id[$key]);
                    $course_info->title = $ids;
                    $course_info->info = $info[$key];
                    $course_info->save();
                }
            }


            // dd($test);

            return back()->with('status', 'Course Successfuly Updated');
        }
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
        $status = $data->status;

        if ($status == 'inactive') {
            DB::table('courses')->where('id', $id)->update([
                'status' => 'active'
            ]);
            return back()->with('status', 'Course Active');
        } else {
            return back()->with('error', 'Status Already Active');
        }
    }

    public function inActive($id)
    {
        $data = DB::table('courses')->where('id', $id)->first();
        $status = $data->status;

        if ($status == 'active') {
            DB::table('courses')->where('id', $id)->update([
                'status' => 'inactive'
            ]);
            return back()->with('status', 'Course InActive');
        } else {
            return back()->with('error', 'Status Already InActive');
        }
    }
}
