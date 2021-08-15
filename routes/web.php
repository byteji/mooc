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
    return view('user-profile');
}); 

Route::get('my-subject', function () {
    return view('user-subject');
});
  

//route of admin user page
Route::get('admin-user', function () {
    return view('admin/user');
});
Route::get('admingetuser', 'UserController@admingetuser')->name('admingetuser');
//route of user create page
Route::get('user-create', function () {
    return view('admin/user-create');
});

//route of admin subject page
Route::get('admin-subject', function () {
    return view('admin/subject');
});
Route::get('admingetsubject', 'SubjectsController@admingetsubject')->name('admingetsubject');

//route of subject create page
Route::get('subject-create', function () {
    return view('admin/subject-create');
});
 
//route TestController
Route::get('test', 'TTTTestController@test');