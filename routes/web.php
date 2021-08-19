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



Route::get('/', function () {
    return view('index');
});

Route::get('uu', function () {
    return view('user_account');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  

//route  user page
Route::get('profile', function () {
    return view('fontend/user-profile');
}); 


Route::get('my-subject', function () {
    return view('fontend/user-subject');
});
  


Route::get('admin', function () {
    return view('admin');
});
  



//------------------ admin : user  -------------------------------//
//route of admin : user page
Route::get('admin-user', 'UserController@admin_index');

Route::get('admingetuser', 'UserController@admingetuser')->name('admingetuser');


//route of admin user create page

Route::get('user-create', function () {
    return view('admin/pages/user/user-create');
});

Route::get('form--create', function () {
    return view('admin/pages/user/form-create');
});


Route::get('users', function () {
    return view('admin/pages/user/user');
});


Route::post('user', 'UserController@store')->name('user.store');

//------------------ admin : subject  -------------------------------//
//route of admin : subject page
Route::get('admin-subject', function () {
    return view('admin/pages/subject/subject');
});
Route::get('admingetsubject', 'SubjectsController@admingetsubject')->name('admingetsubject');

//route of  admin :  subject create page
Route::get('subject-create', function () {
    return view('admin/pages/subject/subject-create');
});
 





//route TestController
Route::get('test', 'TTTTestController@test');