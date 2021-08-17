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
    return view('index');
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
  






//------------------ admin : user  -------------------------------//
//route of admin : user page
Route::get('admin-user', 'UserController@admin_index');

Route::get('admingetuser', 'UserController@admingetuser')->name('admingetuser');


//route of admin user create page

Route::get('user-create', function () {
    return view('admin/user/user-create');
});

Route::post('user', 'UserController@store')->name('user.store');

//------------------ admin : subject  -------------------------------//
//route of admin : subject page
Route::get('admin-subject', function () {
    return view('admin/subject/subject');
});
Route::get('admingetsubject', 'SubjectsController@admingetsubject')->name('admingetsubject');

//route of  admin :  subject create page
Route::get('subject-create', function () {
    return view('admin/subject/subject-create');
});
 





//route TestController
Route::get('test', 'TTTTestController@test');