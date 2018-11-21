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
Route::get('/login','login_controller@loginview');
Route::get('/admin','login_controller@adminview');

//Admin Student

Route::get('/adminstu','login_controller@adminstuview');
Route::get('/adminstu_retake','login_controller@adminstu_retake');
Route::get('/adminstu_recourse','login_controller@adminstu_recourse');
Route::get('/adminstu_regular','login_controller@adminstu_regular');

//Admin Student End
//Admin Course
Route::get('/admincourse','login_controller@admincourseview');
//Admin Course end
//Admin Teacher
Route::get('/adminteacher','login_controller@adminteacherview');
Route::get('/adminteacher_dean','login_controller@adminteacher_dean');
Route::get('/adminteacher_professors','login_controller@adminteacher_professors');
Route::get('/adminteacher_lecturers','login_controller@adminteacher_lecturers');

//Admin Teacher End
Route::get('/adminroutine','login_controller@adminroutineview');
//Admin Result
Route::get('/adminresult','login_controller@adminresultview');
//ADmin Result end
//Admin Session
Route::get('/adminsession','login_controller@adminsessionview');
Route::get('/adminsession_edit','login_controller@adminsession_edit');
//Admin Session end
//Admin Library
Route::get('/adminlibrary','login_controller@adminlibraryview');
Route::get('/adminlibrary_add','login_controller@adminlibrary_add_book');
//Admin Library end
//Admin Section
Route::get('/adminsection','login_controller@adminsectionview');
Route::get('/adminsection_edit','login_controller@adminsection_edit');
Route::get('/adminsection_advisor','login_controller@adminsection_advisor');
//Admin Section end
Route::get('/adminmail','login_controller@adminmailview');
Route::get('/adminnotice','login_controller@adminnoticeview');
Route::get('/adminsetting','login_controller@adminsettingview');

//Temp routes
Route::get('/stuenroll','student_controller@subject_enrollment_data');
Route::get('/stu_pending','student_controller@stu_pending_subject');
Route::get('/stu_approved','student_controller@stu_approved_subject');
Route::get('/stu_declined','student_controller@stu_declined_subject');

