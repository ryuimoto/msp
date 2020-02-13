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
    // Route::get('/','User\TopController@index')->name('user.top');

    // Route::get('/search/a8','User\A8SearchController@index')->name('user.a8');

    // Route::get('/search/rakuten','User\RakutenSearchController@index')->name('user.rakuten');

    // Route::get('/search/amazon','User\AmazonSearchController@index')->name('user.amazon');

    // Route::get('/search/yahoo','User\YahooSearchController@index')->name('user.yahoo');

    // Route::get('/items','User\ItemListController@index')->name('user.item_list');

    // Route::get('/items/register','User\ItemRegisterController@index')->name('user.item_register');

    // Route::get('/items/{item_id}','User\ItemDetailsController@index')->name('user.item_details');

    // Route::get('/sales','User\SalesAggregateController@index')->name('user.sales_aggregate');

    // Route::get('/sales/{date}','User\SalesMonthlyAggregationController@index')->name('user.sales_monthly_aggregation');

    // Route::get('/acount','User\AcountEditController@index')->name('user.acount_edit');
    

// });





// Route::middleware('auth:user')->group(function(){

// });


// 管理側
