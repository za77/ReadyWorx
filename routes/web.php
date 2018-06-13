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






Route::get('admin/login', 'LoginController@index')->name('login');
Route::post('/dologin','LoginController@dologin');
//Route::get('/password/{lan}','LoginController@password')->middleware('checkType:auth');

Route::resources([
    'admin/user'=> 'UserController',
    'admin/events'=> 'EventsController',
    'admin/dashboard'=> 'DashboardController',
    'admin/coupons'=> 'CouponsController',
    'admin/competetion'=> 'CompetetionController',
    'admin/category'=> 'CategoryController',
    'admin/stores'=>'StoresController',
    'admin/products'=>'ProductsController',

    ]);
Route::get('/admin/profile', 'ProfileController@index')->name('profileIndex');
Route::get('/', 'FrontIndexController@index')->name('frontLogin')->middleware('checkType:customer');
Route::get('/login', 'FrontLoginController@index')->name('frontIndex');
Route::POST('/login', 'FrontLoginController@doLogin')->name('frontIndex');
Route::get('/register', 'FrontLoginController@register')->name('frontRegister');
Route::POST('/register', 'FrontLoginController@doRegister');

Route::get('/home', 'FrontLoginController@home')->name('frontHome');
Route::get('/about', 'FrontIndexController@about')->name('frontAbout')->middleware('checkType:customer');
Route::get('/category', 'FrontIndexController@category')->name('frontCategory')->middleware('checkType:customer');
Route::get('/stores', 'FrontIndexController@stores')->name('frontStores')->middleware('checkType:customer');
Route::get('/coupons', 'FrontIndexController@coupons')->name('frontCoupons')->middleware('checkType:customer');
Route::get('/contact', 'FrontIndexController@contact')->name('frontContact')->middleware('checkType:customer');
