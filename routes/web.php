<?php

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
