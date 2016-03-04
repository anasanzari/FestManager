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
Route::get('/events','UserController@registeredevents');
Route::get('/fest/{id}','UserController@fest');
Route::get('/fest/{id}/{event}','UserController@event');
Route::get('/register/event/{id}/{event}','UserController@register');
Route::get('/deregister/event/{id}/{event}','UserController@deregister');

Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/newdep','AdminController@add_dep');
Route::get('/admin/showdep/{id}','AdminController@showdep');
Route::post('/admin/newdep','AdminController@depadd');



/* department pages:: Put the add event, add fest routes in DepartmentController. Add AddUser functionality to AdminController */
Route::get('/department/dashboard','DepartmentController@index');
Route::get('/department/newfest','DepartmentController@add_fest');
Route::post('/department/newfest','DepartmentController@festadd');
Route::get('/department/showfest/{id}','DepartmentController@showfest');
Route::get('/department/showfest/editphoto/{id}','DepartmentController@edit_photo');
Route::post('/department/showfest/editphoto/{id}','DepartmentController@photoedit');
Route::get('/department/editfest/{id}','DepartmentController@edit_fest');
Route::get('/department/showfest/listeventreg/{id}','DepartmentController@list_reg');
Route::post('/department/editfest/{id}','DepartmentController@festedit');
Route::get('/department/showfest/{id}/newevent','DepartmentController@add_event');
Route::post('/department/showfest/{id}/newevent','DepartmentController@eventadd');
Route::get('/department/showfest/editevent/{id}','DepartmentController@edit_event');
Route::post('/department/showfest/editevent/{id}','DepartmentController@eventedit');
