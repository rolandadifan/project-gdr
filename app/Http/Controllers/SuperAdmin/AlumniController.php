<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

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
            $alumnus['name'] = $request->name;
            $alumnus['predicate'] = $request->predicate;
            $alumnus['review'] = $request->testimony;
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
            $alumnus['user_id'] = $request->alumnusName == 'null' ? null : $request->alumnusName;
            $alumnus['course_id'] = $request->courseName == 'null' ? null : $request->courseName;
            $alumnus['name'] = $request->name;
            $alumnus['predicate'] = $request->predicate;
            $alumnus['review'] = $request->testimony;
            $alumnusDB = Alumni::where('id',$id)->first();
            $alumnusDB->update($alumnus);
            return back()->with('status', 'Testimony successfuly updated');
        } catch (Exception $th) {
            return back()->with('status', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $alumnus = Alumni::findOrFail($id);
        $alumnus->delete();
        return back()->with('status', 'Testimony Successfuly Deleted');
    }
}
