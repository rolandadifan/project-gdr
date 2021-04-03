<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\superAdmin\AboutController;
use App\Http\Controllers\SuperAdmin\DashboardSuperAdminController;
use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\superadmin\ArticleController;
use App\Http\Controllers\superadmin\PageController;
use App\Http\Controllers\superadmin\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
});

Route::prefix('sadmin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [DashboardSuperAdminController::class, 'index'])->name('dashboard.sadmin');

    //admin create
    Route::get('/admin-info', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin-create', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin-admin/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin-admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin-admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    //user
    Route::get('/user-info', [UserController::class, 'index'])->name('user.index');

    //artikel
    Route::get('/article-news', [ArticleController::class, 'NewsIndex'])->name('artikel.news');
    Route::get('/article-event', [ArticleController::class, 'EventIndex'])->name('artikel.event');
    Route::get('/article-scholarship', [ArticleController::class, 'ScholarshipIndex'])->name('artikel.scholarship');
    Route::get('/article-add', [ArticleController::class, 'create'])->name('artikel.create');

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
