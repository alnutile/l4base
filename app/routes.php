<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get( 'signup',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'login',                  'UserController@login');
Route::post('login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'forgot_password',        'UserController@forgot_password');
Route::post('forgot_password',        'UserController@do_forgot_password');
Route::get( 'reset_password/{token}', 'UserController@reset_password');
Route::post('reset_password',         'UserController@do_reset_password');
Route::get( 'logout',                 'UserController@logout');

//Route::resource('users', 'UsersController');// Confide routes

Route::get('dashboard', 'DashboardController@index');