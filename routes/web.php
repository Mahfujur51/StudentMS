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

Route::get('/','StudentController@studentlogin')->name('index');
Route::get('/dashboard','StudentController@dashboard')->name('student.dashboard');
Route::get('/student/view', 'StudentController@studentview')->name('student.view');
Route::get('/sudent/update','StudentController@studentupdate')->name('student.update');
Route::get('/slogout','StudentController@loggedOut')->name('slogout');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/add_student', 'StudentController@index')->name('add_student');
Route::post('admin/store_student', 'StudentController@store')->name('store_student');
Route::get('admin/show_student', 'StudentController@show')->name('showallstudent');
Route::get('admin/manage_student/{id}', 'StudentController@show_student')->name('admin.manage_student');
Route::get('admin/editstudent/{id}', 'StudentController@edit_student')->name('admin.student.edit');
Route::post('admin/updatestudent/{id}', 'StudentController@update_student')->name('admin.update_student');
Route::get('admin/deletestudent/{id}', 'StudentController@delete')->name('admin.delete_student');
Route::get('admin/show/csestudent', 'DepartmentController@csestudent')->name('admin.csestudent');
Route::get('admin/show/eeestudent', 'DepartmentController@eeestudent')->name('admin.eeestudent');
Route::get('admin/show/ipestudent', 'DepartmentController@ipestudent')->name('admin.ipestudent');
Route::get('admin/show/pmestudent', 'DepartmentController@pmestudent')->name('admin.pmestudent');
Route::get('admin/show/chestudent', 'DepartmentController@chestudent')->name('admin.chestudent');
Route::get('admin/show/bmestudent', 'DepartmentController@bmestudent')->name('admin.bmestudent');
Route::get('admin/show/testudent', 'DepartmentController@testudent')->name('admin.testudent');


//Teacher Route
Route::get('admin/add_teacher', 'TeacherController@add_teacher')->name('add.teacher');
Route::post('admin/store_teacher', 'TeacherController@store_teacher')->name('store.teacher');
Route::get('admin/show/teacher', 'TeacherController@show_teacher')->name('show.teacher');
Route::get('admin/manage/teacher/{id}', 'TeacherController@manage_teacher')->name('admin.manage_teacher');
Route::get('admin/teacher/edit/{id}', 'TeacherController@edit_teacher')->name('admin.teacher.edit');
Route::post('admin/teacher/update/{id}', 'TeacherController@update_teacher')->name('admin.teacher.update');

Route::get('admin/teacher/delete/{id}', 'TeacherController@delete_teacher')->name('admin.delete_teacher');



Route::post('student/login','StudentController@login')->name('student.login');
Route::post('student/settings/{id}','StudentController@update_password')->name('student.pass.update');


