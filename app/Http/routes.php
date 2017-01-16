<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/commercial', 'PagesController@commercial');
Route::get('/domestic', 'PagesController@domestic');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'PagesController@create']);
Route::post('sendEmail', 
  ['as' => 'sendEmail', 'uses' => 'PagesController@sendEmail']);
