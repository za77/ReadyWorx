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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/dologin','LoginController@dologin');
Route::get('/password/{lan}','LoginController@password')->middleware('checkType:auth');
Route::resources([
    'admin/user'=> 'UserController',
    'admin/events'=> 'EventsController',
    'admin/dashboard'=> 'DashboardController',
    'admin/coupons'=> 'CouponsController',
    'admin/competetion'=> 'CompetetionController',
    'admin/category'=> 'CategoryController',

    ]);