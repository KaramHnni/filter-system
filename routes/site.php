<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "site" middleware group. Now create something great!
|
*/
Route::get('/login','Auth\LoginController@show')->name('login');
Route::post('/login','Auth\LoginController@auth');

Route::get('/register','Auth\SignupController@show')->name('signup');
Route::post('/register','Auth\SignupController@store');

Route::get('/logout','Auth\SignoutController@auth')->name('logout');


