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
Route::get('/adminhome/warnings', 'HistoryController@warning')->name('adminhome.warning');

Route::get('/adminhome/financials', 'HistoryController@financials')->name('adminhome.financials');


Route::get('/adminhome/library', 'HistoryController@library')->name('adminhome.library');
Route::get('/adminhome/library/info/{id}', 'HistoryController@bookinfo')->name('adminhome.bookinfo');
Route::get('/adminhome/library/info/edit/{id}', 'HistoryController@bookedit')->name('book.edit');
Route::post('/adminhome/library/info/edit/{id}', 'HistoryController@bookupdate');
Route::get('/adminhome/library/info/delete/{id}', 'HistoryController@bookdelete')->name('book.delete');
Route::get('/admin/addbook', 'HistoryController@addbook')->name('book.add');
Route::post('/admin/addbook', 'HistoryController@store');

Route::get('/admin/borrowlist', 'HistoryController@borrowlist')->name('book.borrow');


Route::get('/adminhome/course', 'HistoryController@course')->name('adminhome.course');
Route::get('/adminhome/course/info/{id}', 'HistoryController@courseinfo')->name('adminhome.courseinfo');
Route::get('/adminhome/course/info/edit/{id}', 'HistoryController@courseedit')->name('course.edit');
Route::post('/adminhome/course/info/edit/{id}', 'HistoryController@courseupdate');
Route::get('/adminhome/course/info/delete/{id}', 'HistoryController@coursedelete')->name('course.delete');
Route::get('/admin/enrolllist', 'HistoryController@enrolllist')->name('course.enroll');






Route::get('/adminhome/student', 'AdminStudentController@studentshow')->name('adminhome.studentshow');;
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
Route::get('/adminhome/teacher/info/{id}', 'AdminTeacherController@teacherinfo')->name('teacher.info');
Route::post('/adminhome/teacher', 'AdminTeacherController@fetch')->name('teacher.search');
Route::get('/adminhome/teacher/info/edit/{id}', 'AdminTeacherController@teacheredit')->name('teacher.edit');
Route::post('/adminhome/teacher/info/edit/{id}', 'AdminTeacherController@teacherupdate');
Route::get('/adminhome/teacher/info/delete/{id}', 'AdminTeacherController@teacherdelete')->name('teacher.delete');
Route::get('/adminhome/teacher/info/message/{id}', 'AdminTeacherController@teachermessage')->name('teacher.message');
Route::post('/adminhome/teacher/info/message/{id}', 'AdminTeacherController@teachersend');
Route::get('/adminhome/teacher/info/warning/{id}', 'AdminTeacherController@teacherwarn')->name('teacher.warn');
Route::post('/adminhome/teacher/info/warning/{id}', 'AdminTeacherController@teacherwarning');





Route::get('/adminhome/employee', 'AdminEmpoyeeController@employeeshow')->name('adminhome.employeeshow');
Route::get('/adminhome/employee/info/{id}', 'AdminEmpoyeeController@employeeinfo')->name('employee.info');
Route::post('/adminhome/employee', 'AdminEmpoyeeController@fetch')->name('employee.search');
Route::get('/adminhome/employee/info/edit/{id}', 'AdminEmpoyeeController@employeeedit')->name('employee.edit');
Route::post('/adminhome/employee/info/edit/{id}', 'AdminEmpoyeeController@employeeupdate');
Route::get('/adminhome/employee/info/delete/{id}', 'AdminEmpoyeeController@employeedelete')->name('employee.delete');
Route::get('/adminhome/employee/info/message/{id}', 'AdminEmpoyeeController@employeemessage')->name('employee.message');
Route::post('/adminhome/employee/info/message/{id}', 'AdminEmpoyeeController@employeesend');
Route::get('/adminhome/employee/info/warning/{id}', 'AdminEmpoyeeController@employeewarn')->name('employee.warn');
Route::post('/adminhome/employee/info/warning/{id}', 'AdminEmpoyeeController@employeewarning');
