<?php

// autentication.dev


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// Route::get('/services', 'ServicesController@index')->name('services');

Route::get('services', 'ServicesController@index')->name('services');

Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'ContactFormController@store');


