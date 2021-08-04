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
/* This is for the email verification*/
Auth::routes(['verify' => true]);

//Route::get('profile',fuction(){
  //Only verified users
//})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes();

Route::get('charts', 'ChartController@index')->name('chart.index');
