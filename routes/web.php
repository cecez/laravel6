<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {

    \Illuminate\Support\Facades\App::setLocale('en');

    return view('child');
});

Route::get('/lang', function () {

    return view('lang');
});
