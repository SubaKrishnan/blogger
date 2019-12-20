<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/client', 'Auth\LoginController@showClientLoginForm');

Route::post('/login/client', 'Auth\LoginController@clientLogin');

Route::view('/home', 'home')->middleware('auth');

Route::view('/client', 'client');

