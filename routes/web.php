<?php

Route::get('/', 'MainController@index')->name('main.index');

Route::get('/clinics', 'ClinicController@index');

Route::get('/clinics/{id}', 'ClinicController@show');

Route::get('/contacts', 'ContactsController@index');

Route::get('articles/{id}', 'ArticleController@show');

Route::get('/cities/clinics', 'CityController@clinics');

Route::get('/advantages/{id}', 'AdvantageController@show');

Route::get('/opportunities/{id}', 'TherapyOpportunitiesController@show');

Route::get('/news/{id}', 'NewsController@show');

Route::get('/pricing', 'MainController@pricing');

//Route::get('/news', 'NewsController@index');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/opportunities', 'TherapyOpportunitiesController@index');

Route::get('/choice', 'MainController@choiceRole')->name('role.choice');

Route::get('/categories', 'CategoriesController@index')->name('categories.index');

Route::get('/categories/{slug}', 'CategoriesController@show')->name('categories.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
