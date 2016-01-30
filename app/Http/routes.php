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



Route::get('/','PageController@index');
Route::get('/register','PageController@register');
Route::get('/event','PageController@event');

/* auth */
Route::post('/auth/login','Auth\AuthController@login');
Route::post('/auth/register','Auth\AuthController@register');
Route::get('/auth/logout','Auth\AuthController@logout');


/* user pages */

Route::get('/dashboard','UserController@index');
Route::get('/fest/{id}','UserController@fest');
