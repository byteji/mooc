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


//----------**********----------//
//----------System----------//
//----------**********----------//

//run to create permission
Route::get('/FirstRun', 'FirstRunController@run');

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//


//----------**********----------//
//----------FontEnd----------//
//----------**********----------//
 

Route::get('profile', function () {
    return view('fontend/user-profile');
})->middleware('auth'); 

Route::get('my-subject', function () {
    return view('fontend/user-subject');
});
  
 
  
//----------**********----------//
//----------FontEnd/student----------//
//----------**********----------//
  

//----------**********----------//
//----------FontEnd/teacher----------//
//----------**********----------//

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//


//----------**********----------//
//----------BackEnd----------//
//----------**********----------//
 

//----------**********----------//
//----------BackEnd/admin/subject----------//
//----------**********----------//


//route of admin subject 
//-----view page function
Route::get('admin-subject', 'SubjectsController@admin_subject_index')->name('admin_subject_index');
//-----call get,post function
Route::get('admingetsubject', 'SubjectsController@admingetsubject')->name('admingetsubject');

 
//route of subject create 
Route::get('subject-create', 'SubjectsController@admin_create_subject_index')->name('admin_create_subject_index');
//----------**********----------//

 
//----------**********----------//
//----------BackEnd/admin/user----------//
//----------**********----------//

//route of admin user 

//-----view page function
Route::get('admin-user', 'UserController@admin_user_index');
//-----call get,post function
Route::get('admingetuser', 'UserController@admingetuser')->name('admingetuser');
//----------**********----------//

//route of user create 

//-----view page function
Route::get('user-create', function () {
    return view('backend/admin/user/user-create');
});

//-----call get,post function
Route::post('user', 'UserController@store')->name('user.store');
//----------**********----------//

 
//----------**********----------//
//----------Test----------//
//----------**********----------//

//route TestController

//-----view page function
Route::get('test', 'TTTTestController@test');

//-----call get,post function
Route::get('test_create_subject', 'TTTTestController@test_create_subject');
//----------**********----------//
