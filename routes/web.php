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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
