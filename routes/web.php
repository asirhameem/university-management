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

// Middleware 
// Check for user login.
// Route::group(['middleware'=>['session']], function(){
    
// });
Route::get('/dashboard','TeacherController@index')->name('teacher.dashboard');
Route::get('/profile','TeacherController@show')->name('teacher.profile');
