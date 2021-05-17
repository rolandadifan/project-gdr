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

        $course_detail = CourseDetail::create([
            'course_id' => $course->id,
            'thumbnail' =>  $course_thumbnail,
            'content' => $course_content,
            'degree' => 'non',
        ]);

        $data_info1 = [
            'detail1' => $request->info1detail1,
            'detail2' => $request->info1detail2,
            'detail3' => $request->info1detail3,
        ];

        $data_info2 = [
            'detail1' => $request->info2detail1,
            'detail2' => $request->info2detail2,
            'detail3' => $request->info2detail3,
        ];

        $data_info3 = [
            'detail1' => $request->info3detail1,
            'detail2' => $request->info3detail2,
            'detail3' => $request->info3detail3,
        ];

        $data_info4 = [
            'detail1' => $request->info4detail1,
            'detail2' => $request->info4detail2,
            'detail3' => $request->info4detail3,
        ];

        CourseInfo::upsert([
            [
                'course_detail_id' => $course_detail->id,
                'key' => 'info1',
                'title' => $request->info1,
                'info' => json_encode($data_info1),
            ],
            [
                'course_detail_id' => $course_detail->id,
                'key' => 'info2',
                'title' => $request->info2,
                'info' => json_encode($data_info2),
            ],
            [
                'course_detail_id' => $course_detail->id,
                'key' => 'info3',
                'title' => $request->info3,
                'info' => json_encode($data_info3),
            ],
            [
                'course_detail_id' => $course_detail->id,
                'key' => 'info4',
                'title' => $request->info4,
                'info' => json_encode($data_info4),
            ],
        ],['course_detail_id','key', 'title', 'info']);

        return back()->with('status', 'Course Successfuly Create');
    }

    public function editShortCourse($id)
    {
        $course = Course::with(['status', 'courseDetail'])->findOrFail($id);
        $info = [];
        $course_info = CourseInfo::where('course_detail_id', $course->courseDetail->id)->get();
        foreach( $course_info as $csr){
            $info[$csr->key] = $csr->title;
            $info[$csr->key . 'Detail'] = json_decode($csr->info);
        };
        return view('superadmin.pages.course.edit.short-edit')->with([
            'course' => $course,
            'info' => $info
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

            $data_info1 = [
                'detail1' => $request->info1detail1,
                'detail2' => $request->info1detail2,
                'detail3' => $request->info1detail3,
            ];

            $data_info2 = [
                'detail1' => $request->info2detail1,
                'detail2' => $request->info2detail2,
                'detail3' => $request->info2detail3,
            ];

            $data_info3 = [
                'detail1' => $request->info3detail1,
                'detail2' => $request->info3detail2,
                'detail3' => $request->info3detail3,
            ];

            $data_info4 = [
                'detail1' => $request->info4detail1,
                'detail2' => $request->info4detail2,
                'detail3' => $request->info4detail3,
            ];

            $course_info1 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info1')->first();
            if($course_info1){
                $course_info1->update([
                    'title' => $request->info1,
                    'info' => json_encode($data_info1)
                ]);
            }else{
                 CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info1',
                        'title' => $request->info1,
                        'info' => json_encode($data_info1),
                 ]);
            }
            $course_info2 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info2')->first();
            if($course_info2){
                $course_info2->update([
                    'title' => $request->info2,
                    'info' => json_encode($data_info2)
                ]);
            }else{
                 CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info2',
                        'title' => $request->info2,
                        'info' => json_encode($data_info2)
                 ]);
            }
            $course_info3 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info3')->first();
            if($course_info3){
                $course_info3->update([
                    'title' => $request->info3,
                    'info' => json_encode($data_info3)
                ]);
            }else{
                 CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info3',
                        'title' => $request->info3,
                        'info' => json_encode($data_info3)
                 ]);
            }
            $course_info4 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info4')->first();
            if($course_info4){
                $course_info4->update([
                    'title' => $request->info4,
                    'info' => json_encode($data_info4)
                ]);
            }else{
                CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info4',
                        'title' => $request->info4,
                        'info' => json_encode($data_info4)
                 ]);
            }

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

             $data_info1 = [
                'detail1' => $request->info1detail1,
                'detail2' => $request->info1detail2,
                'detail3' => $request->info1detail3,
            ];

            $data_info2 = [
                'detail1' => $request->info2detail1,
                'detail2' => $request->info2detail2,
                'detail3' => $request->info2detail3,
            ];

            $data_info3 = [
                'detail1' => $request->info3detail1,
                'detail2' => $request->info3detail2,
                'detail3' => $request->info3detail3,
            ];

            $data_info4 = [
                'detail1' => $request->info4detail1,
                'detail2' => $request->info4detail2,
                'detail3' => $request->info4detail3,
            ];

            $course_info1 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info1')->first();
            if($course_info1){
                $course_info1->update([
                    'title' => $request->info1,
                    'info' => json_encode($data_info1)
                ]);
            }else{
                 CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info1',
                        'title' => $request->info1,
                        'info' => json_encode($data_info1),
                 ]);
            }
            $course_info2 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info2')->first();
            if($course_info2){
                $course_info2->update([
                    'title' => $request->info2,
                    'info' => json_encode($data_info2)
                ]);
            }else{
                 CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info2',
                        'title' => $request->info2,
                        'info' => json_encode($data_info2)
                 ]);
            }
            $course_info3 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info3')->first();
            if($course_info3){
                $course_info3->update([
                    'title' => $request->info3,
                    'info' => json_encode($data_info3)
                ]);
            }else{
                 CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info3',
                        'title' => $request->info3,
                        'info' => json_encode($data_info3)
                 ]);
            }
            $course_info4 = CourseInfo::where('course_detail_id', $course_detail->id)->where('key', 'info4')->first();
            if($course_info4){
                $course_info4->update([
                    'title' => $request->info4,
                    'info' => json_encode($data_info4)
                ]);
            }else{
                CourseInfo::create([
                        'course_detail_id' => $course_detail->id,
                        'key' => 'info4',
                        'title' => $request->info4,
                        'info' => json_encode($data_info4)
                 ]);
            }
            
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
            return $th->getMessage();
        }
    }

    public function editCourse($id)
    {
        $price = [];
        $course = Course::with(['courseDetail.prices'])->findorFail($id);
        foreach ($course->courseDetail->prices as $priceArr) {
            $price[$priceArr->name] = $priceArr->value;
        };
        return view('superadmin.pages.course.edit.long-edit')->with([
            'course' => $course,
            'price' => $price,
        ]);
    }

    public function updateLongCourse(Request $request, $id)
    {
        try {
             $course_name = $request->input('name');
             $slug = Str::slug($course_name);

             $course = Course::findOrFail($id);
             $course->update([
                 'name' => $course_name,
                 'slug' =>  $slug 
             ]);

            $detail_duration = $request->input('duration');
            $detail_degree = $request->degree;
            $detail_campus = $request->input('campus');
            $detail_deaken_student = $request->input('deaken_student');
            $detail_key_dates = $request->input('key_dates');
            $detail_content = $request->input('content');

            $course_detail = CourseDetail::where('course_id', $course->id)->first();
            $course_detail->update([
                'duration' => $detail_duration,
                'key_dates' => $detail_key_dates,
                'degree' => $detail_degree,
                'campus' => $detail_campus,
                'content' => $detail_content,
                'deaken_student' => $detail_deaken_student,
            ]);
        
            
            $priceAA = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'AA')->first();
            $priceAA->update([
                    'value' => $request->input('gradeAA'),
            ]);
            $bppAA = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'AA_BPP')->first();
            $bppAA->update([
                'value' => $request->input('bppAA'),
            ]);
            $sksAA = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'AA_SKS')->first();
            $sksAA->update([
                'value' => $request->input('sksAA'),
            ]);

            $priceA = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'A')->first();
            $priceA->update([
                'value' => $request->input('gradeA'),
            ]);
            $bppA = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'A_BPP')->first();
            $bppA->update([
                'value' => $request->input('bppA'),
            ]);
            $sksA = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'A_SKS')->first();
            $sksA->update([
                'value' => $request->input('sksA'),
            ]);

            $priceB = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'B')->first();
            $priceB->update([
                'value' => $request->input('gradeB'),
            ]);
            $bppB = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'B_BPP')->first();
            $bppB->update([
                'value' => $request->input('bppB'),
            ]);
            $sksB = CoursePrice::where('course_detail_id', $course_detail->id)->where('name', 'B_SKS')->first();
            $sksB->update([
                'value' => $request->input('sksB'),
            ]);
            
    

            return back()->with('status', 'Course Successfuly Updated');
        } catch (\Throwable $th) {
            return back()->with('error', 'Course Failed Updated');
        }
    }

    public function destroy($id)
    {
        $course = Course::with('courseDetail')->findOrFail($id);
        if(!$course->courseDetail->thumbnail){
            $course->delete();
        }else{
            $file_path = Storage::url($course->courseDetail->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
            }
            $course->delete();
        }
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