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

Route::get('desks', 'DeskController@index');
Route::get('desks/{desk}', 'DeskController@show');
Route::post('desks', 'DeskController@store');
Route::put('desks/{desk}', 'DeskController@update');
Route::delete('desks/{desk}', 'DeskController@delete');




/** Oleg's block of routes **/
Route::get('show-desks-list', 'DynamicController@showDesksList');