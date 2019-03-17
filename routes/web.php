<?php

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

Route::get('article/{id}', 'ArticleController@show');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
