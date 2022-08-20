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

Route::get('/homes', function () {
    return view('dashboard');
});

Route::get('/layouts', function () {
    return view('content.dashboard');
});

Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@login');
