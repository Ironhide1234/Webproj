<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
})->name('private');


Route::get('/information', function () {
    return view('information');
})->name('information');


Route::get('/container', function () {
    return view('container');
})->name('orders');


Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');


/*User routes*/

Route::name('user.')->group(function(){
    Route::view('/private', 'landing')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});
