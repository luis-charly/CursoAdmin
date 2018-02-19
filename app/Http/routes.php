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


Route::get('/', 'LogController@login');
Route::get('admin', 'FrontController@admin');
Route::get('register', 'FrontController@register');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::resource('users', 'UserController');
Route::resource('mail', 'MailController');
Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');

//->after('invalidate-browser-cache');;

//Route::filter('invalidate-browser-cache', function($request, $response)
//{
//    $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
//    $response->headers->set('Pragma','no-cache');
//    $response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
//});

//Route::get('/', ['before' => 'auth', function(){
//    $contents = View::make('/');
//    $response = Response::make($contents, 200);
//    $response->header('Expires', 'Tue, 1 Jan 1980 00:00:00 GMT');
//    $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
//    $response->header('Pragma', 'no-cache');
//    return $response;
//}]);

//Route::get('/', function () {
//    $exitCode = Artisan::call('cache:clear');
//});
