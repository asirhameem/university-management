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
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/adminhome', 'AdminController@index')->name('adminhome.index');
Route::get('/adminhome/profile', 'AdminController@profile')->name('adminhome.profile');
Route::get('/adminhome/profile/edit', 'AdminController@edit')->name('adminhome.edit');
Route::post('/adminhome/profile/edit', 'AdminController@update');


Route::get('/adminhome/messages', 'HistoryController@message')->name('adminhome.message');
Route::get('/adminhome/feedbacks', 'HistoryController@feedback')->name('adminhome.feedback');
Route::get('/adminhome/history', 'HistoryController@history')->name('adminhome.history');
Route::get('/adminhome/warnings', 'HistoryController@warning')->name('adminhome.warning');
Route::get('/adminhome/transaction', 'HistoryController@transaction')->name('adminhome.transaction');



Route::get('/adminhome/student', 'AdminStudentController@studentshow')->name('adminhome.studentshow');
Route::post('/adminhome/student', 'AdminStudentController@fetch')->name('student.search');
Route::get('/adminhome/student/info/{id}', 'AdminStudentController@studentinfo')->name('student.info');
Route::get('/adminhome/student/info/edit/{id}', 'AdminStudentController@studentedit')->name('student.edit');
Route::post('/adminhome/student/info/edit/{id}', 'AdminStudentController@studentupdate');
Route::get('/adminhome/student/info/delete/{id}', 'AdminStudentController@studentdelete')->name('student.delete');
Route::get('/admin/addstudent', 'AdminStudentController@addstudent')->name('student.add');
Route::post('/admin/addstudent', 'AdminStudentController@store');
Route::get('/adminhome/student/info/message/{id}', 'AdminStudentController@studentmessage')->name('student.message');
Route::post('/adminhome/student/info/message/{id}', 'AdminStudentController@studentsend');
Route::get('/adminhome/student/info/warning/{id}', 'AdminStudentController@studentwarn')->name('student.warn');
Route::post('/adminhome/student/info/warning/{id}', 'AdminStudentController@studentwarning');








Route::get('/adminhome/teacher', 'AdminTeacherController@teachershow')->name('adminhome.teachershow');


Route::get('/adminhome/employee', 'AdminEmpoyeeController@employeeshow')->name('adminhome.employeeshow');