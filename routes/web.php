<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\superAdmin\AboutController;
use App\Http\Controllers\SuperAdmin\DashboardSuperAdminController;
use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\superadmin\ArticleController;
use App\Http\Controllers\superadmin\PageController;
use App\Http\Controllers\superadmin\UserController;
use App\Http\Controllers\superadmin\ProfileController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index'])->name('landing');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
});

Route::prefix('sadmin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/', [DashboardSuperAdminController::class, 'index'])->name('dashboard.sadmin');

    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.admin.index');
    Route::put('/profile-update', [ProfileController::class, 'update'])->name('profile.admin.update');

    //admin create
    Route::get('/admin-info', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin-create', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin-admin/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin-admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin-admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    //user
    Route::get('/user-info', [UserController::class, 'index'])->name('user.index');
    Route::get('/user-info/detail/{id}', [UserController::class, 'edit'])->name('user.info');
    Route::put('/user-info/update/{id}', [UserController::class, 'update'])->name('user.update');

    //course
    Route::get('/course/list', [App\Http\Controllers\SuperAdmin\CourseController::class, 'index'])->name('course.index');
    Route::get('/create/course', [App\Http\Controllers\SuperAdmin\CourseController::class, 'createCourseLong'])->name('course.create');
    Route::post('/create/course/store', [App\Http\Controllers\SuperAdmin\CourseController::class, 'storeCourse'])->name('course.store');
    Route::get('/course/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'editCourse'])->name('course.edit');
    Route::put('/course/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'updateLongCourse'])->name('course.update');
    Route::delete('/course/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'destroy'])->name('course.destroy');
    Route::put('/course/status-active/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'active'])->name('course.status.active');
    Route::put('/course/status-inactive/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'inactive'])->name('course.status.inactive');

    //short course
    Route::get('/create/short-course', [App\Http\Controllers\SuperAdmin\CourseController::class, 'create'])->name('short.create');
    Route::get('/short-course/edit/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'editShortCourse'])->name('short.edit');
    Route::post('/store-short-course', [App\Http\Controllers\SuperAdmin\CourseController::class, 'storeShortCourse'])->name('short.store');
    Route::post('/store-short-course-update/{id}', [App\Http\Controllers\SuperAdmin\CourseController::class, 'updateShortCourse'])->name('short.update');

    //artikel
    Route::get('/article/news', [ArticleController::class, 'NewsIndex'])->name('artikel.news');
    Route::get('/article/event', [ArticleController::class, 'EventIndex'])->name('artikel.event');
    Route::get('/article/scholarship', [ArticleController::class, 'ScholarshipIndex'])->name('artikel.scholarship');
    Route::get('/article/research', [ArticleController::class, 'researchIndex'])->name('artikel.research');
    Route::get('/article/add', [ArticleController::class, 'create'])->name('artikel.create');
    Route::post('/article', [ArticleController::class, 'store'])->name('artikel.store');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('artikel.edit');
    Route::put('/article/{id}', [ArticleController::class, 'update'])->name('artikel.update');
    Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');

    //about
    Route::get('/about-edit', [AboutController::class, 'index'])->name('about.edit');

    //pages
    Route::get('/pages-info', [PageController::class, 'index'])->name('page.index');
    Route::get('/pages-multi-info', [PageController::class, 'submenu'])->name('page.multi');
    Route::get('/pages-setting', [PageController::class, 'create'])->name('page.create');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//users
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/view-profile', [App\Http\Controllers\UserController::class, 'viewProfile'])->name('profile.view');
Route::put('/update-profile', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');

//course
Route::get('/short-course', [App\Http\Controllers\CourseController::class, 'index'])->name('scourse.index');
Route::get('/post-graduate-course', [App\Http\Controllers\CourseController::class, 'postGraduateIndex'])->name('postgraduate.index');
Route::get('/under-graduate-course', [App\Http\Controllers\CourseController::class, 'underGraduateIndex'])->name('undergraduate.index');
Route::get('/short-course/{id}', [App\Http\Controllers\CourseController::class, 'detail'])->name('scourse.detail');

//scholarship
Route::get('/scholarship', [\App\Http\Controllers\ScholarshipController::class, 'index'])->name('scholarship.index');
Route::get('/scholarship/detail', [\App\Http\Controllers\ScholarshipController::class, 'detail'])->name('scholarship.detail');

//apply info
Route::get('/how-to-apply', [\App\Http\Controllers\ApplyInfoController::class, 'index'])->name('apply.index');

//reserach
Route::get('/research', [\App\Http\Controllers\ResearchController::class, 'index'])->name('research.index');

//alumni
Route::get('/alumni', [\App\Http\Controllers\AlumniController::class, 'index'])->name('alumni.index');

//enrollment
Route::get('/student-enrollment', [\App\Http\Controllers\EnrollmentController::class, 'index'])->name('enrollment.index');
Route::get('/student-enrollment/register-data', [\App\Http\Controllers\EnrollmentController::class, 'input'])->name('enrollment.input');
Route::get('/student-enrollment/verifi-data', [\App\Http\Controllers\EnrollmentController::class, 'verifi'])->name('enrollment.verifi');