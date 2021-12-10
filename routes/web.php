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
    return view('home1');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/class', function () {
    return view('class');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});