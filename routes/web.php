<?php

Route::get('/', 'MainController@index')->name('main.index');

Route::get('/clinics', 'ClinicController@index')->name('clinics.index');

Route::get('/clinics/{id}', 'ClinicController@show');

Route::get('/contacts', 'ContactsController@index');

Route::get('articles/{id}', 'ArticleController@show');

Route::get('/cities/{id}/clinics', 'CityController@clinics')->name('cities.show.clinics');

Route::get('/advantages/{id}', 'AdvantageController@show')->name('advantage.show');

Route::get('/opportunities/{id}', 'TherapyOpportunitiesController@show')->name('opportunities.show');

Route::get('/news/{id}', 'NewsController@show')->name('news.show');

Route::get('/pricing', 'MainController@pricing')->name('pricing.index');

//Route::get('/news', 'NewsController@index');

Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/opportunities', 'TherapyOpportunitiesController@index');

Route::get('/choice', 'MainController@choiceRole')->name('role.choice');

Route::get('/categories', 'CategoriesController@index')->name('categories.index');

Route::get('/categories/{slug}', 'CategoriesController@show')->name('categories.show');

Route::get('/advantages', 'AdvantageController@index')->name('advantages.index');

Route::get('/events', 'EventsController@index')->name('events.index');
// pricing
Route::get('/pricing', 'PricingController@index')->name('pricing.index');
Route::get('/pricing/implants', 'PricingController@implants')->name('pricing.implants');
Route::get('/pricing/prostheses', 'PricingController@prostheses')->name('pricing.prostheses');

Route::post('/send', 'CallbackController@handleCallback')->name('callback.handle');