<?php

// autentication.dev


// $services = [
//     ['title' => 'Serviço 1'],
//     ['title' => 'Serviço 2'],
//     ['title' => 'Serviço 3'],
//     ['title' => 'Serviço 4']
// ];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services', compact('services'))->name('services'); // compact() pega e disponibiliza a variável para a página services.
Route::view('/contact', 'contact')->name('contact');


