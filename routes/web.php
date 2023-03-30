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
    return view('home');
});

Route::get('/about-me', function () {
    return view('aboutme');
});

Route::get('/skill-experience', function () {
    return view('skill-experience');
});

Route::get('/education', function () {
    return view('education');
});
