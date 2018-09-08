<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/


Route::get('/','User\IndexController@redirectToDashboard')->name('home');
Route::get('/dashboard','User\DashboardController@show')->name('user.dashboard');