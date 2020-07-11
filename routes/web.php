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

Route::get('/', function () {
    return view('welcome');
});
Route::get('course', function () {
    return view('course/create');
})->middleware('auth');
Route::get('addinstruction', function () {
    return view('instruction/create');
})->middleware('auth');


Auth::routes();
Route::get('registration', 'CourseregistersController@dropdown');
Route::get('markasread', function () {
    Auth::User()->unreadNotifications->markAsRead();
    return redirect()->back();
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile/{id}', 'ProfileController@index');
Route::get('courses', 'CoursesController@index');
Route::get('mycourses', 'CourseregistersController@index');
Route::get('complete', 'CourseregistersController@completedropdown');
Route::put('confirm', 'CourseregistersController@confirm');
Route::post('reg', 'CourseregistersController@store');
Route::post('store', 'CoursesController@store');
Route::post('notify', 'CoursesController@instruction');

