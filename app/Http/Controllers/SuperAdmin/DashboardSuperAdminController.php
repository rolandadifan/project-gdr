<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DashboardSuperAdminController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'student')->count();
        $admin = User::where('role', '!=', 'student')->count();
        $course = Course::all()->count();
        $enrollment = Enrollment::where('status_id', 4)->count();
        $news = Article::with(['articleDetail'])->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->count();
        $event = Article::with(['articleDetail'])->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'event');
        })->count();
        $scholarship = Article::with(['articleDetail'])->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'scholarship');
        })->count();
        $research = Article::with(['articleDetail'])->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->count();
        return view('superadmin.dashboard')->with([
            'user' => $user,
            'admin' => $admin,
            'course' => $course,
            'enrollment' => $enrollment,
            'news' => $news,
            'event' => $event,
            'scholarship' => $scholarship,
            'research' => $research,
        ]);
    }
}
