<?php

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
    return view('main');
});

Route::get('/clinics', function () {
    return view('clinics');
});

Route::get('/clinic', function () {
    return view('clinic');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/article', function () {
    return view('article');
});

