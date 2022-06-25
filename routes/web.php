<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
})->name('home');


Route::get('/information', function () {
    return view('information');
})->name('information');


Route::get('/container', function () {
    return view('container');
})->name('orders');


Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
