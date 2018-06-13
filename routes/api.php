<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::POST('{tbl}/save', 'SamController@save');
Route::POST('{tbl}/list', 'SamController@list');
Route::POST('{tbl}/list/{id}', 'SamController@listById');
