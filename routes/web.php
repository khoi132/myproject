<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']) -> name('index');

Route::get('/login_url', [UserController::class, 'showlogin']) -> name('login');
Route::post('/login',[UserController::class, 'login'])->name('auth.login');

Route::get('/register_url', [UserController::class, 'showregister']) -> name('showregister');
Route::post('/register',[UserController::class, 'register'])->name('auth.register');

Route::get('/video-management',[VideoController::class,'listVideo'])-> name('management');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');

Route::get('/video-list', [VideoController::class, 'index'])->name('list.videos');
Route::get('/video-add', [VideoController::class, 'add'])->name('video.add');
Route::post('/video-add-success',[VideoController::class, 'store'])->name('video.store');

Route::get('/video-update/{id}', [VideoController::class,'edit'])->name('video.update');
Route::post('/video-update-success',[VideoController::class, 'update'])->name('video.edit');

Route::get('/video-delete/{id}',[VideoController::class, 'destroy'])->name('video.delete');

Route::get('showhome', 'UserController@showhome' );

Route::post('/search',[HomeController::class, 'search'])->name('search');
