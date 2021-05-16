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

    Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');

    //pages
    Route::get('/pages-info', [PageController::class, 'index'])->name('page.index');
    Route::get('/pages-multi-info', [App\Http\Controllers\Superadmin\PageController::class, 'submenu'])->name('page.multi');
    Route::get('/pages-setting', [PageController::class, 'create'])->name('page.create');
    // Route::post('/pages-single-create', [PageController::class, 'single'])->name('page.single');
    // Route::post('/pages-post-create', [PageController::class, 'postg'])->name('page.postg');


    //pages
    Route::get('/pages-info', [PageController::class, 'index'])->name('page.index');
    Route::post('/pages-menu', [PageController::class, 'menuStore'])->name('page.menu');
    Route::post('/pages-menu/undergraduate', [PageController::class, 'under'])->name('page.under');
    Route::post('/pages-menu/single', [PageController::class, 'single'])->name('page.single');
    Route::post('/pages-menu/postgraduate', [PageController::class, 'postg'])->name('page.postg');
    Route::post('/pages-menu', [PageController::class, 'menuStore'])->name('page.menu');
    Route::get('/pages-menu/{id}', [PageController::class, 'editMneu'])->name('page.edit');
    Route::put('/pages-menu/{id}', [PageController::class, 'updateMneu'])->name('page.update');
    Route::put('/pages-menu/active/{id}', [PageController::class, 'activeMenu'])->name('page.active');
    Route::put('/pages-menu/inactive/{id}', [PageController::class, 'inActiveMenu'])->name('page.inactive');

    //setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/setting/edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');

    //student life

    //why-study page
    Route::get('/why-study', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'whyStudy'])->name('student.info');
    Route::post('/why-study', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sneakpeak'])->name('student.sneakpeak');
    Route::post('/why-study/choose-one', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'chooseOne'])->name('student.choose-one');
    Route::post('/why-study/choose-two', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'chooseTwo'])->name('student.choose-two');
    Route::post('/why-study/choose-three', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'chooseThree'])->name('student.choose-three');
    Route::post('/why-study/lat', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'lat'])->name('student.lat');
    Route::post('/why-study/wio', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'whyinfoOne'])->name('student.wio');
    Route::post('/why-study/wit', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'whyinfoTwo'])->name('student.wit');


    //graduation page
    Route::get('/graduation', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'graduation'])->name('student.graduation');
    Route::post('/student-life/spg', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'spg'])->name('student.spg');
    Route::post('/student-life/gio', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'gio'])->name('student.gio');
    Route::post('/student-life/git', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'git'])->name('student.git');
    Route::post('/student-life/githree', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'githree'])->name('student.githree');
    Route::post('/student-life/gif', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'gif'])->name('student.gif');
    Route::post('/student-life/giv', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'giv'])->name('student.giv');
    Route::post('/student-life/gix', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'gix'])->name('student.gix');


    //student life page
    Route::get('/student-life', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'studentLife'])->name('student.life');
    Route::post('/student-life/slp-one', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'slpOne'])->name('student.slp-one');
    Route::post('/student-life/slp-two', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'slpTwo'])->name('student.slp-two');
    Route::post('/student-life/slp-three', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'slpThree'])->name('student.slp-three');
    Route::post('/student-life/sio', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sio'])->name('student.sio');
    Route::post('/student-life/sit', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sit'])->name('student.sit');
    Route::post('/student-life/sithree', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sithree'])->name('student.sithree');
    Route::post('/student-life/sif', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sif'])->name('student.sif');
    Route::post('/student-life/siv', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'siv'])->name('student.siv');
    Route::post('/student-life/student-info-six', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'six'])->name('student.six');
    Route::post('/student-life/student-info-seven', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sis'])->name('student.sis');
    Route::post('/student-life/student-info-eight', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sin'])->name('student.sin');
    Route::post('/student-life/student-info-nine', [App\Http\Controllers\SuperAdmin\LifeCampusController::class, 'sie'])->name('student.sie');

    //alumni
    Route::get('/alumni-info', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'index'])->name('alumni-info.index');
    Route::post('/alumni-info', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'store'])->name('alumni-info.store');
    Route::get('/alumni-info-create', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'create'])->name('alumni-info.create');
    Route::get('/alumni-info/edit/{id}', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'edit'])->name('alumni-info.edit');
    Route::put('/alumni-info/{id}', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'update'])->name('alumni-info.update');
    Route::delete('/alumni-info/{id}', [App\Http\Controllers\SuperAdmin\AlumniController::class, 'destroy'])->name('alumni-info.destroy');

    //schedules
    Route::get('/schedules-info', [App\Http\Controllers\SuperAdmin\SchedulesController::class, 'index'])->name('schedules.index');
    Route::get('/schedules-info/create', [App\Http\Controllers\SuperAdmin\SchedulesController::class, 'create'])->name('schedules.create');
    Route::post('/schedules-info', [App\Http\Controllers\SuperAdmin\SchedulesController::class, 'store'])->name('schedules.store');
    Route::get('/schedules-info/{id}', [App\Http\Controllers\SuperAdmin\SchedulesController::class, 'edit'])->name('schedules.edit');
    Route::put('/schedules-info/{id}', [App\Http\Controllers\SuperAdmin\SchedulesController::class, 'update'])->name('schedules.update');
    Route::delete('/schedules-info/{id}', [App\Http\Controllers\SuperAdmin\SchedulesController::class, 'destroy'])->name('schedules.destroy');

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
