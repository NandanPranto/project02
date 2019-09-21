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

Route::get('about_us','HomeController@about');

Route::get('services', function () {
    return view('services');
});


Route::get('team', function () {
    return view('team');
});
Route::get('add','HomeController@add');
Route::post('store','HomeController@store');


Route::get('list','HomeController@all');