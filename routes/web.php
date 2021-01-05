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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');

Route::group(['middleware'=>['sess']], function(){

    Route::get('/profile', 'homeController@index')->name('profile.index');
    Route::get('/skill_upload', 'homeController@create')->name('profile.skillupload');
    Route::post('/skill_upload', 'homeController@store');
    Route::get('/show_skill/{id}', 'homeController@show')->name('profile.showskill');
    Route::get('/details/{id}', 'homeController@details')->name('home.details');
    Route::get('/edit/{id}', 'homeController@edit')->name('profile.edit');
    Route::post('/edit/{id}', 'homeController@update');
	Route::get('/delete/{id}', 'homeController@delete')->name('profile.delete');;
    Route::post('/delete/{id}', 'homeController@destroy');
    Route::get('/showorder/{id}', 'photoorderController@showorder')->name('profile.showorder');
    Route::get('/courses', 'courseregController@courses')->name('course_registration.courses');
    Route::get('/details/{id}', 'courseregController@details')->name('course_registration.details');
    Route::get('/register/{id}', 'courseregController@register')->name('course_registration.register');
    Route::post('/register/{id}', 'enrollController@enroll');
    Route::get('/showregister/{email}', 'enrollController@showregister')->name('course_registration.showregister');
    Route::get('/dropcourse/{id}', 'enrollController@dropcourse')->name('course_registration.dropcourse');
    Route::post('/dropcourse/{id}', 'enrollController@drop');
    

   
});

Route::get('/student_skill', 'homeController@display')->name('home.studentskill');
Route::get('/student_details/{id}', 'homeController@details')->name('home.details');
Route::get('/order/{id}', 'homeController@order')->name('home.order');
Route::post('/order/{id}', 'photoorderController@orderproduct');