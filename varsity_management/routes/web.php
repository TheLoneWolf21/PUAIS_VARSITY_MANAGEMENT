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
Route::get('/adminstu','login_controller@adminstuview');
Route::get('/admincourse','login_controller@admincourseview');
Route::get('/adminteacher','login_controller@adminteacherview');
Route::get('/adminroutine','login_controller@adminroutineview');
Route::get('/adminresult','login_controller@adminresultview');
Route::get('/adminlibrary','login_controller@adminlibraryview');
Route::get('/adminsection','login_controller@adminsectionview');
Route::get('/adminmail','login_controller@adminmailview');
Route::get('/adminnotice','login_controller@adminnoticeview');
Route::get('/adminsetting','login_controller@adminsettingview');
