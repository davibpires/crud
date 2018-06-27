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

Route::get('/', ['as' => 'home', 'uses' => 'SiteController@index']);

// Students
Route::resource('students', 'StudentController');
Route::get('students/{student}/delete', ['as' => 'students.delete', 'uses' => 'StudentController@delete']);

// Courses
Route::resource('courses', 'CourseController');
Route::get('courses/{course}/delete', ['as' => 'courses.delete', 'uses' => 'CourseController@delete']);