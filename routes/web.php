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

//run to create permission
Route::get('/FirstRun', 'FirstRunController@run');
  
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  
Route::get('profile', function () {
    return view('fontend/user-profile');
})->middleware('auth'); 

Route::get('my-subject', function () {
    return view('fontend/user-subject');
});
  

//route of admin user page
Route::get('admin-user', 'UserController@admin_user_index');

Route::get('admingetuser', 'UserController@admingetuser')->name('admingetuser');
//route of user create page

Route::get('user-create', function () {
    return view('backend/admin/user/user-create');
});
Route::post('user', 'UserController@store')->name('user.store');


//route of admin subject page
Route::get('admin-subject', 'SubjectsController@admin_subject_index')->name('admin_subject_index');

Route::get('admingetsubject', 'SubjectsController@admingetsubject')->name('admingetsubject');

//route of subject create page
Route::get('subject-create', 'SubjectsController@admin_create_subject_index')->name('admin_create_subject_index');

 
//route TestController
Route::get('test', 'TTTTestController@test');