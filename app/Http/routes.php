<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@homepage')
        ->name('pages.homepage');
Route::get('/admin', 'PagesController@adminpage')
		->middleware('auth:admin')
        ->name('pages.adminpage');

// Auth routes
Route::get('auth/register', 'Auth\AuthController@getRegister')
        ->name('register.get');
Route::post('auth/register', 'Auth\AuthController@postRegister')
        ->name('register.post');
Route::get('auth/login', 'Auth\AuthController@getLogin')
        ->name('login.get');
Route::post('auth/login', 'Auth\AuthController@postLogin')
        ->name('login.post');
Route::get('auth/logout', 'Auth\AuthController@getLogout')
        ->middleware('auth:all')
        ->name('logout.get');