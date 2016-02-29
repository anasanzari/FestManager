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
Route::get('/notfound','PageController@notfound');


/* auth */
Route::post('/auth/login','Auth\AuthController@login');
Route::post('/auth/register','Auth\AuthController@register');
Route::get('/auth/logout','Auth\AuthController@logout');


/* user pages */

Route::get('/dashboard','UserController@index');
Route::get('/fest/{id}','UserController@fest');
Route::get('/fest/{id}/{event}','UserController@event');
Route::get('/register/event/{id}/{event}','UserController@register');

Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/newfest','AdminController@add_fest');
Route::get('/admin/showfest/{id}','AdminController@showfest');
Route::post('/admin/newfest','AdminController@festadd');
Route::get('/admin/showfest/{id}/newevent','AdminController@add_event');
Route::post('/admin/showfest/{id}/newevent','AdminController@eventadd');


/* department pages:: Put the add event, add fest routes in DepartmentController. Add AddUser functionality to AdminController */
Route::get('/department/dashboard','DepartmentController@index');
