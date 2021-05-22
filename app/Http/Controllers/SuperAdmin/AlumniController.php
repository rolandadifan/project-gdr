<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\User;
use App\Models\Course;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnus = Alumni::with('user','course')->get();
        return view('superadmin.pages.alumni.index')->with(['alumnus'=>$alumnus]);
    }

    public function create()
    {
        $users = User::select('id','name')->where('role','student')->get();
        $courses = Course::select('id','name')->get();
        return view('superadmin.pages.alumni.create')->with([
            'users'     => $users,
            'courses'   => $courses
        ]);
    }

    public function store(Request $request)
    {
        try {
            $alumnus['user_id'] = $request->alumnusName == 'null' ? null : $request->alumnusName;
            $alumnus['course_id'] = $request->courseName == 'null' ? null : $request->courseName;
            // $alumnus['name'] = $request->name;
            $alumnus['predicate'] = $request->predicate;
            $alumnus['review'] = $request->testimony;
            $alumnus['is_top'] = $request->isTop;
            if ($request->thumbnail || $request->thumbnail != null) {
                $alumnus['thumbnail'] = $request->file('thumbnail')->store('alumnus', 'public');
            }
            $saveAlumnus = Alumni::create($alumnus);
            return back()->with('status', 'Testimony successfuly added');
        } catch (Exception $th) {
            return back()->with('status', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $alumni = Alumni::where('id',$id)->first();
        $users = User::select('id','name')->where('role','student')->get();
        $courses = Course::select('id','name')->get();
        return view('superadmin.pages.alumni.edit')->with([
            'alumni'     => $alumni,
            'users'     => $users,
            'courses'   => $courses
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $alumnusDB = Alumni::where('id',$id)->first();
            $alumnus['user_id'] = $request->alumnusName == 'null' ? null : $request->alumnusName;
            $alumnus['course_id'] = $request->courseName == 'null' ? null : $request->courseName;
            $alumnus['name'] = $request->name;
            $alumnus['predicate'] = $request->predicate;
            $alumnus['review'] = $request->testimony;
            $alumnus['is_top'] = $request->isTop;
            if ($request->thumbnail || $request->thumbnail != null) {
                if(isset($alumnusDB->thumbnail)){
                    $file_path = Storage::url($alumnusDB->thumbnail);
                    $path = str_replace('\\', '/', public_path());
                    if (file_exists($path . $file_path)) {
                        unlink($path . $file_path);
                    }
                }
                $alumnus['thumbnail'] = $request->file('thumbnail')->store('alumnus', 'public');
            }
            $alumnusDB->update($alumnus);
            return back()->with('status', 'Testimony successfuly updated');
        } catch (Exception $th) {
            return back()->with('status', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $alumnus = Alumni::findOrFail($id);
        if ($alumnus->thumbnail || $alumnus->thumbnail != null) {
            $file_path = Storage::url($alumnus->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
            }
        }
        $alumnus->delete();
        return back()->with('status', 'Testimony Successfuly Deleted');
    }
}