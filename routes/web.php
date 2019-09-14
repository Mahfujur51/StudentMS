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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/add_student', 'StudentController@index')->name('add_student');
Route::post('admin/store_student', 'StudentController@store')->name('store_student');
Route::get('admin/show_student', 'StudentController@show')->name('showallstudent');
Route::get('admin/manage_student/{id}', 'StudentController@show_student')->name('admin.manage_student');
Route::get('admin/editstudent/{id}', 'StudentController@edit_student')->name('admin.student.edit');
Route::post('admin/updatestudent/{id}', 'StudentController@update_student')->name('admin.update_student');
