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

Route::get('desks', 'DeskController@index');
Route::get('desks/{desk}', 'DeskController@show');
Route::post('desks', 'DeskController@store');
Route::put('desks/{desk}', 'DeskController@update');
Route::delete('desks/{desk}', 'DeskController@delete');