<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
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
    Route::get('kantoradmin',[AdminController::class,'kantoradmin'])->name('admin.kantoradmin');
    Route::get('pracownicyadmin',[AdminController::class,'pracownicyadmin'])->name('admin.pracownicyadmin');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');

    Route::get('tabela',[AdminController::class,'tabela'])->name('admin.tabela');
   
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('kredyt',[UserController::class,'kredyt'])->name('user.kredyt');
Route::get('danekonta',[UserController::class,'danekonta'])->name('user.danekonta');
Route::get('przelewy',[UserController::class,'przelewy'])->name('user.przelewy');
Route::get('kantoruser',[UserController::class,'kantoruser'])->name('user.kantoruser');
Route::get('powiadomienia',[UserController::class,'powiadomienia'])->name('user.powiadomienia');

Route::get('shiftdata',[UserController::class,'shiftdata']);

Route::post('transakcje',[UserController::class,'transakcje'])->name('user.transakcje');

Route::get('stankonta',[UserController::class,'stankonta'])->name('user.stankonta');

});

Route::group(['prefix'=>'employee', 'middleware'=>['isEmployee','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[EmployeeController::class,'index'])->name('employee.dashboard');
    Route::get('profile',[EmployeeController::class,'profile'])->name('employee.profile');   
});