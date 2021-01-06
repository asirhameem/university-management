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

// Route::get('/', function () {
//     return view('User.registration');
// });


Route::get('/registration','UsersController@index');
Route::post('/registration','UsersController@store')->name('user.register');
Route::get('/login','UsersController@login')->name('user.login');
Route::post('/login','LoginController@LoginNormal')->name('user.loginCheck');
Route::get('/facebook','LoginController@LoadFacebook')->name('user.facebook');
Route::get('/facebook-response','LoginController@FacebookResponse');
Route::get('/logout','LoginController@Logout')->name('user.logout');
Route::get('/courses','TeacherController@allcourses');
// Middleware 
// Check for user login.
 Route::group(['middleware'=>['session']], function(){
    Route::get('/dashboard','TeacherController@index')->name('teacher.dashboard');
    Route::get('/profile','TeacherController@show')->name('teacher.profile');
    Route::group(['middleware'=>['type']], function(){
        Route::get('/course-content/{id}','CourseController@courseContent')->name('course.content');
        Route::post('/course-content/{id}','CourseController@store')->name('course.content');
        Route::get('/course-details/{id}','CourseController@courseDetails')->name('course.details');
        Route::post('/course-details/{id}','CourseController@courseUpdate');

        Route::get('/course-notice/{id}','CourseController@courseNotice')->name('course.notice');
        Route::get('/student-detail/{id}','TeacherController@studentDetails')->name('student.get');
        Route::post('/student-detail/{id}','TeacherController@updateDetails')->name('student.update');
        Route::get('/ban','TeacherController@banusers')->name('banned.users');
        Route::get('/unban/{id}','TeacherController@unbanusers');
        Route::post('/profile','TeacherController@update')->name('teacher.update');

    });
    //Route::get('/account/{$user}','TeacherController@account');
    Route::get('/download/{path}','CourseController@download');
    Route::post('/course-notice/{id}','CourseController@noticeStore');
    Route::get('/pdf/{id}','CourseController@export');
    Route::get('/accountpdf/{id}','TeacherController@pdfexport');
    Route::post('/search','TeacherController@search');
    
   
 });
