<?php

use Illuminate\Support\Facades\Route;

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

//logout
Route::get('/logout','AdminController@logout');
//login
Route::get('/', function () {
    return view('student_login');
});
//adminlogin
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');
Route::get('/setting','AdminController@admin_setting');
Route::post('/admin_update','AdminController@admin_update');

//add student
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@save_student');
Route::get('/student_delete/{student_id}','AllstudentController@student_delete');
Route::get('/studentview/{student_id}','AllstudentController@studentview');
Route::get('/student_edit/{student_id}','AllstudentController@student_edit');
Route::post('/update_student/{student_id}','AllstudentController@update_student');

Route::get('/allstudent','AllstudentController@allstudent');
Route::get('/tutionfee','tutionController@tutionfee');
Route::get('/cse','CseController@cse');
Route::get('/bba','BbaController@bba');
Route::get('/english','EnglishController@english');
Route::get('/eee','EeeController@eee');
Route::get('/mba','MbaController@mba');

//teacher
Route::get('/allteacher','AllteacherController@allteacher');
Route::get('/addteacher','TeacherController@addteacher');
Route::post('/save_teacher','TeacherController@save_teacher');

//user login
Route::post('/studentlogin','AdminController@student_login_dashboard');
Route::get('/student_dashboard','AdminController@student_dashboard');
Route::get('/student_profile','AdminController@student_profile');

Route::get('/student_logout','AdminController@student_logout');
Route::get('/student_setting','AdminController@student_setting');
Route::post('/student_update','AdminController@student_update');

