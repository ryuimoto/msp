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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return 'これ何回目？';
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ユーザー側
Route::get('/login','User\Auth\LoginController@showLoginForm')->name('user.login');
Route::post('/login','User\Auth\LoginController@login');

Route::get('logout','User\Auth\LoginController@logout')->name('user.logout');

Route::get('/password/reset','User\Auth\ForgotPasswordController@showLinkRequestForm')->name('user.password_reset');
Route::post('/password/email','User\Auth\ForgotPasswordController@sendResetLinkEmail')->name('user.password_email');
Route::get('/password/reset/{token}','User\Auth\ResetPasswordController@showResetForm')->name('user.password_reset_token'); // メール内をurlを開いたときのroute
Route::post('/password/reset','User\Auth\ResetPasswordController@reset');

Route::middleware('auth:user')->group(function () { 
    Route::get('/','User\TopController@index')->name('user.top');

    Route::get('/search/a8','User\A8SearchController@index')->name('user.a8');
    Route::post('/search/a8','User\A8SearchController@search');

    Route::get('/search/rakuten','User\RakutenSearchController@index')->name('user.rakuten');

    Route::get('/items','User\ItemListController@index')->name('user.item_list');

    Route::get('/item/{item_id}','User\ItemDetailsController@index')->name('user.item_details');
    Route::put('/item/{item_id}','User\ItemDetailsController@edit');
    Route::delete('/item/{item_id}','User\ItemDetailsController@delete');

    Route::get('/items/register','User\ItemRegisterController@index')->name('user.item_register');
    Route::post('/items/register','User\ItemRegisterController@register');

    Route::get('/sales','User\SalesAggregateController@index')->name('user.sales_aggregate');

    Route::get('/sales/{date}','User\SalesMonthlyAggregationController@index')->name('user.sales_monthly_aggregation');

    Route::get('/points','User\PointsAggregateController@index')->name('user.points_aggregate');

    Route::get('/points/{date}','User\PointsMonthlyAggregationController@index')->name('user.points_monthly_aggregation');

    Route::get('/acount','User\AcountEditController@index')->name('user.acount_edit');
    Route::put('/acount','User\AcountEditController@edit');

});

// 管理側
Route::prefix('admin432aKOIqr')->group(function () {
    Route::get('/login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\Auth\LoginController@login');

    Route::get('/logout','Admin\Auth\LoginController@logout')->name('admin.logout');

    // Route::get('/password/reset','Admin\Auth\LoginController@passwordReset')->name('admin.password_reset');

    // Route::get('/password/reset/{token}','Admin\Auth\LoginController@passwordResetToken')->name('admin.password_reset_token');

    Route::middleware('auth:admin')->group(function () {
      Route::get('/','Admin\TopController@index')->name('admin.top');

      Route::get('/users','Admin\UsersListController@index')->name('admin.users_list');      

      Route::get('/user/register','Admin\UserRegisterController@index')->name('admin.users_register');
      Route::post('/user/register','Admin\UserRegisterController@register');

      Route::get('/user/{user_id}','Admin\UserEditController@index')->name('admin.users_edit');
      Route::put('/user/{user_id}','Admin\UserEditController@edit');
      Route::delete('/user/{user_id}','Admin\UserEditController@delete');

      Route::get('/sales/total','Admin\SalesTotalController@index')->name('admin.sales_total');
      
      Route::get('/sales/total/{date}','Admin\SalesTotalMonthlyAggregationController@index')->name('admin.sales_total_monthly');

      Route::get('/sales/user/{user_id}','Admin\IndividualTotalController@index')->name('admin.individual_total');
      
      Route::get('/sales/user/{user_id}/{date}','Admin\IndividualTotalMonthlyController@index')->name('admin.individual_total_monthly');

      Route::get('/points/total','Admin\PointsTotalController@index')->name('admin.points_total');

      Route::get('/points/total/{date}','Admin\PointsTotalMonthlyController@index')->name('admin.points_total_monthly');

      Route::get('/points/user/{user_id}','Admin\PointsIndividualTotalController@index')->name('admin.points_individual_total');

      Route::get('/points/user/{user_id}/{date}','Admin\PointsIndividualTotalMonthlyController@index')->name('admin.points_individual_total_monthly');

      Route::get('/admin','Admin\AdminEditController@index')->name('admin.admin_edit');
      Route::put('/admin','Admin\AdminEditController@edit');

    });
});