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
    return view('home', [
        "name" => "William Suryadharma",
        "college" => "Binusian 2025",
        "description" => "I am a Binus student majoring in computer science. In college I always try to find new things related to majors that interest me. I am currently studying in semester 5 and am currently focusing on several Computer Science projects."
    ]);
});

Route::get('/about-me', function () {
    return view('aboutme', [
        "var1" => "Indonesian",
        "var2" => "Javanese",
        "var3" => "Balinese",
        "var4" => "English",
        "var5" => "Chinese"
    ]);
});

Route::get('/skill-experience', function () {
    return view('skill-experience');
});

Route::get('/education', function () {
    return view('education');
});
