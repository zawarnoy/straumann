<?php

Route::get('/', function () {
    return view('main');
});

Route::get('/clinics', 'ClinicController@index');

Route::get('/clinics/{id}', 'ClinicController@show');

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('articles/{id}', 'ArticleController@show');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
