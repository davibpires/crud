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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    // Students
    Route::get('students/{student}/delete', ['as' => 'students.delete', 'uses' => 'StudentController@delete']);
    Route::resource('students', 'StudentController');

    // Courses
    Route::get('courses/{course}/delete', ['as' => 'courses.delete', 'uses' => 'CourseController@delete']);
    Route::resource('courses', 'CourseController');

    // Profile
    Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@show']);
    Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile/update', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::get('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@editPassword']);
    Route::post('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@changePassword']);

});