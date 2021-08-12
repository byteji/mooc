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
Route::get('/first', 'FirstRunController@index');

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/asd', 'HomeController@index');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::resource('user', 'admin\UserController')->middleware('auth');
        Route::post('user/update', 'admin\UserController@update')->name('user.update');
        Route::get('user/destroy/{id}', 'admin\UserController@destroy')->name('user.delete');
        Route::get('get_user_all', 'admin\UserController@get_user_all')->name('get_user_all');

        Route::resource('subject', 'admin\SubjectController')->middleware('auth');
        Route::post('subject/update', 'admin\SubjectController@update')->name('subject.update');
        Route::get('subject/destroy/{id}', 'admin\SubjectController@destroy')->name('subject.delete');

        Route::get('get_subject_all', 'admin\SubjectController@get_subject_all')->name('get_subject_all');
    });
});





// Route::resource('user', 'UserController')->middleware('auth');
// Route::post('user/update', 'UserController@update')->name('user.update');
// Route::get('user/destroy/{id}', 'UserController@destroy');


Route::resource('user', 'UserController')->middleware('auth');
Route::get('account', 'UserController@getinfo')->middleware('auth');
Route::post('user/update', 'UserController@update')->name('user.update');



Route::resource('subject', 'SubjectController')->middleware('auth');
Route::post('subject/update', 'SubjectController@update')->name('subject.update');
Route::get('subject/destroy/{id}', 'SubjectController@destroy')->name('subject.delete');
// Route::get('subject/{id}', 'SubjectController@subject_page')->name('subject.subject_page');

Route::resource('video', 'SubjectVideosController')->middleware('auth');


Route::resource('subject_student', 'SubjectStudentController')->middleware('auth');
Route::post('subject_student/update', 'SubjectStudentController@update')->name('subject_student.update');
Route::get('subject_student/destroy/{id}', 'SubjectStudentController@destroy')->name('subject_student.delete');
