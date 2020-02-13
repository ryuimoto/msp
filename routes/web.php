<?php

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

// ユーザー側
// Route::get('login','User\Auth\LoginController@showLoginForm')->name('user.login');
// Route::post('login','User\Auth\LoginController@login');

// Route::get('logout','User\Auth\LoginController@logout')->name('user.logout');

// Route::middleware('auth:user')->group(function () { 
//     Route::get('/','User\TopController@index')->name('user.top');

    


// });





// Route::middleware('auth:user')->group(function(){

// });


// 管理側
