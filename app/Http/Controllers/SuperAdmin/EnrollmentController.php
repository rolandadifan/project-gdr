<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollment = Enrollment::with(['user', 'course'])->Where('status_id', 4)->orderBy('created_at', 'DESC')->get();
        return view('superadmin.pages.enrollment.index')->with([
            'enrollment' => $enrollment
        ]);
    }

    public function detail($id)
    {
        $enrollment = Enrollment::with(['user.userDetail.userFunding','user.userDetail.userDocument','user.userDetail.userResidance','user.userDetail.userPasport', 'course'])->findOrFail($id);
        return view('superadmin.pages.enrollment.detail')->with([
            'enrollment' => $enrollment
        ]);;
    }
}
