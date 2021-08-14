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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 

Route::get('profile', function () {
    return view('user-profile');
});


Route::get('my-subject', function () {
    return view('user-subject');
});
 


Route::get('admin-user', function () {
    return view('admin/user');
});


//route of admin user page
Route::get('admin-subject', function () {
    return view('admin/subject');
});

Route::get('admingetuser', 'UserController@admingetuser')->name('admingetuser');


//route TestController
Route::get('test', 'TTTTestController@test');