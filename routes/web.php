<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('student', 'StudentController@index');
Route::get('student/create', 'StudentController@create');
Route::get('student/{studentId}', 'StudentController@show');
Route::get('student/{studentId}/edit', 'StudentController@edit');
Route::post('store', 'StudentController@store');
Route::patch('/student/{student}', 'StudentController@update');

Route::get('about', 'ServiceController@about');
Route::get('contact', 'ServiceController@contact');

