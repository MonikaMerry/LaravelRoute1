<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('slider',function(){
    return view('Template.slider');
});

Route::get('header',function(){
    return view('Template.header');
});

Route::get('about',function(){
    return view('Template.about');
});

Route::get('features',function(){
    return view('Template.features');
});

Route::get('courses',function(){
    return view('Template.courses');
});

Route::get('contact',function(){
    return view('Template.contact');
});