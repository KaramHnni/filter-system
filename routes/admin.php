<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/تسجيل','Auth\LoginController@show')->name('admin.login');
Route::post('/تسجيل','Auth\LoginController@auth');
Route::get('/خروج','Auth\SignoutController@auth')->name('admin.logout');

Route::group(['middleware' => 'auth:admin'],function(){
Route::get('/','IndexController@redirectToDashboard')->name('admin.home');
Route::get('/لوحة-التحكم','DashboardController@show')->name('admin.dashboard');

});
