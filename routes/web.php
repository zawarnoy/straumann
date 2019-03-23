<?php

Route::get('/', 'MainController@index');

Route::get('/clinics', 'ClinicController@index');

Route::get('/clinics/{id}', 'ClinicController@show');

Route::get('/contacts', 'ContactsController@index');

Route::get('articles/{id}', 'ArticleController@show');

Route::get('/cities/clinics', 'CityController@clinics');

Route::get('/advantages/{id}', 'AdvantageController@show');

Route::get('/opportunities/{id}', 'TherapyOpportunitiesController@show');

Route::get('/news/{id}', 'NewsController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
