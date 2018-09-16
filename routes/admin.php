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

Route::get('/login','Auth\LoginController@show')->name('admin.login');
Route::post('/login','Auth\LoginController@auth');
Route::get('/logout','Auth\SignoutController@auth')->name('admin.logout');

Route::group(['middleware' => 'auth:admin'],function(){
Route::get('/','IndexController@redirectToDashboard')->name('admin.home');
Route::get('/dashboard','DashboardController@show')->name('admin.dashboard');
Route::group(['prefix' => 'users', 'namespace' => 'Users'],function(){

    Route::get('/','IndexController@show')->name('admin.users');

});
Route::group(['prefix' => 'administrators', 'namespace' => 'Administrators'],function(){

    Route::get('/','IndexController@show')->name('admin.administrators');

});
Route::group(['prefix' => 'cities', 'namespace' => 'Cities'],function(){

    Route::get('/','IndexController@show')->name('admin.cities');

    Route::get('/create','CreateController@show')->name('admin.cities.create');
    Route::post('/create','CreateController@store');

    Route::get('/{id}/edit','EditController@show')->name('admin.cities.edit');
    Route::post('/{id}/edit','EditController@update');

    Route::get('/{id}/active','StatusController@active')->name('admin.cities.active');
    Route::get('/{id}/inactive','StatusController@inactive')->name('admin.cities.inactive');
    
    Route::get('/{id}/delete','DeleteController@delete')->name('admin.cities.delete');

        Route::group(['prefix' => '{city_id}/areas' , 'namespace' => 'Areas'],function(){

            Route::get('/','IndexController@show')->name('admin.cities.areas');

            Route::get('/create','CreateController@show')->name('admin.cities.areas.create');
            Route::post('/create','CreateController@store');

            Route::get('/{id}/edit','EditController@show')->name('admin.cities.areas.edit');
            Route::post('/{id}/edit','EditController@update');

            Route::get('/{id}/active','StatusController@active')->name('admin.cities.areas.active');
            Route::get('/{id}/inactive','StatusController@inactive')->name('admin.cities.areas.inactive');
            
            Route::get('/{id}/delete','DeleteController@delete')->name('admin.cities.areas.delete'); 
        });


});



});
