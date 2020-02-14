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
Route::get('/login','User\Auth\LoginController@showLoginForm')->name('user.login');
// Route::post('/login','User\Auth\LoginController@login');

// Route::get('/password/reset','User\Auth\LoginController@passwordReset')->name('user.password_reset');

// Route::get('/password/reset/{token}','User\Auth\LoginController@passwordResetToken')->name('user.password_reset_token');

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

// 管理側
// Route::prefix('admin432aKOiq')->group(function () {
    // Route::get('login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');

    // Route::get('/password/reset','Admin\Auth\LoginController@passwordReset')->name('admin.password_reset');

    // Route::get('/password/reset/{token}','Admin\Auth\LoginController@passwordResetToken')->name('admin.password_reset_token');

    // Route::middleware('auth:admin')->group(function () {
    //   Route::get('/','Admin\Auth\TopController@index')->name('admin.top');

    //   Route::get('/users','Admin\UsersListController@index')->name('admin.users_list');

    //   Route::get('/user/register','Admin\UserRegisterController@index')->name('admin.user_register');

    //   Route::get('/user/{user_id}','Admin\UserRegisterEditController@index')->name('admin.user_register_edit');

    //   Route::get('/sales/total','Admin\SalesTotalController@index')->name('admin.sales_total');

    //   Route::get('/sales/total/{user_id}','Admin\IndividualTotalController@index')->name('admin.individual_total');

    //   Route::get('/news/list','Admin\NewsListController@index')->name('admin.news_list');

    //   Route::get('/news/register','Admin\NewsRegisterController@index')->name('admin.news_register');

    //   Route::get('/news/edit/{news_id}','Admin\NewsEditController@index')->name('admin.news_edit');

    //   Route::get('/admin','Admin\AdminEditController@index')->name('admin.admin_edit');

    // });
// });