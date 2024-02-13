<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AuController;


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

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['UserRole:superadmin|admin|user']], function() {

    Route::get('/account', [App\Http\Controllers\AuController::class, 'account']);
    Route::get('/account/settings', [App\Http\Controllers\AuController::class, 'settings']);
    Route::get('/account/video', [App\Http\Controllers\AuController::class, 'account_video']);
    Route::post('/account/post_setting', [App\Http\Controllers\AuController::class, 'post_setting']);
    Route::get('/account/video/{id}', [App\Http\Controllers\AuController::class, 'account_video_detail']);


});


Route::group(['middleware' => ['UserRole:superadmin|admin']], function() {

    Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::resource('/admin/MyUser', MyUserController::class);
    Route::post('/api/api_post_status_MyUser', [App\Http\Controllers\MyUserController::class, 'api_post_status_MyUser']);
    Route::get('api/del_MyUser/{id}', [App\Http\Controllers\MyUserController::class, 'del_MyUser']);
    Route::get('admin/users_search/', [App\Http\Controllers\MyUserController::class, 'users_search']);

    Route::resource('/admin/category', CategoryController::class);
    Route::post('/api/api_post_status_category', [App\Http\Controllers\CategoryController::class, 'api_post_status_category']);
    Route::get('api/del_cat/{id}', [App\Http\Controllers\CategoryController::class, 'del_cat']);

    Route::resource('/admin/branch', BranchController::class);
    Route::post('/api/api_post_status_branch', [App\Http\Controllers\BranchController::class, 'api_post_status_branch']);
    Route::get('api/del_branch/{id}', [App\Http\Controllers\BranchController::class, 'del_branch']);

    Route::resource('/admin/video', VideoController::class);
    Route::post('/api/api_post_status_video', [App\Http\Controllers\VideoController::class, 'api_post_status_video']);
    Route::get('api/del_video/{id}', [App\Http\Controllers\VideoController::class, 'del_video']);
    
});