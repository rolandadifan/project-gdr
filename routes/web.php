<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\SuperAdmin\AboutController;
use App\Http\Controllers\SuperAdmin\DashboardSuperAdminController;
use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\ArticleController;
use App\Http\Controllers\SuperAdmin\PageController;
use App\Http\Controllers\SuperAdmin\SettingController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\SuperAdmin\ProfileController;
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
    Route::put('/articles/status-active/{id}', [App\Http\Controllers\SuperAdmin\ArticleController::class, 'active'])->name('artikel.status.active');
    Route::put('/articles/status-inactive/{id}', [App\Http\Controllers\SuperAdmin\ArticleController::class, 'inactive'])->name('artikel.status.inactive');

    //about
    Route::get('/about-edit', [AboutController::class, 'index'])->name('about.edit');
    Route::post('/about-add', [AboutController::class, 'edit'])->name('about.add');
    Route::post('/about-add-photo', [AboutController::class, 'changeThumbnail'])->name('about.photo');

    //setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/setting/edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');

    //pages
    Route::get('/pages-info', [PageController::class, 'index'])->name('page.index');
    Route::get('/pages-multi-info', [PageController::class, 'submenu'])->name('page.multi');
    Route::get('/pages-setting', [PageController::class, 'create'])->name('page.create');
    Route::post('/pages-single-create', [PageController::class, 'single'])->name('page.single');
    Route::post('/pages-under-create', [PageController::class, 'under'])->name('page.under');
    Route::post('/pages-post-create', [PageController::class, 'postg'])->name('page.postg');
    Route::post('/pages-menu', [PageController::class, 'menuStore'])->name('page.menu');


    //student life
    Route::get('/why-study', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'whyStudy'])->name('student.info');
    Route::get('/graduation', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'graduation'])->name('student.graduation');
    Route::get('/student-life', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'studentLife'])->name('student.life');

    //alumni
    Route::get('/alumni-info', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'index'])->name('alumni-info.index');
    Route::get('/alumni-info-create', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'create'])->name('alumni-info.create');
    Route::get('/alumni-info-edit', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'edit'])->name('alumni-info.edit');
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
Route::get('/scholarship/detail/{id}', [\App\Http\Controllers\ScholarshipController::class, 'detail'])->name('scholarship.detail');

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


// life campuses
Route::get('/graduations', [\App\Http\Controllers\LifeCampussController::class, 'graduations'])->name('life.graduation');
Route::get('/student-life', [\App\Http\Controllers\LifeCampussController::class, 'studenLife'])->name('life.student');
Route::get('/why-study', [\App\Http\Controllers\LifeCampussController::class, 'whyStudy'])->name('life.why');


//about
Route::get('/abouts', [\App\Http\Controllers\AboutController::class, 'abouts'])->name('page.about');
Route::get('/news', [\App\Http\Controllers\AboutController::class, 'news'])->name('page.news');
Route::get('/events', [\App\Http\Controllers\AboutController::class, 'event'])->name('page.event');
Route::get('/artikel/{id}', [\App\Http\Controllers\AboutController::class, 'detail'])->name('page.detail');
