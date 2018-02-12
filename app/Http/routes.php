<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It'user a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('admin', function () {
//    return view('layouts.admin');
//});

Route::get('/', 'FrontController@index');
Route::get('admin', 'FrontController@admin');
Route::get('register', 'FrontController@register');

Route::resource('users', 'UserController');
Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');