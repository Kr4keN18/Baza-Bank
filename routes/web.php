<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/billing', function () {
    return view('billing');
});

Route::get('/virtual-reality', function () {
    return view('virtual-reality');
});

Route::get('/rtl', function () {
    return view('rtl');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
   
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});