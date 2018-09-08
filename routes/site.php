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
Route::get('/تسجيل','Auth\LoginController@show')->name('login');
Route::post('/تسجيل','Auth\LoginController@auth');

Route::get('/اشتراك','Auth\SignupController@show')->name('signup');
Route::post('/اشتراك','Auth\SignupController@store');
