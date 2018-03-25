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
//Route::get('desks/{desk}/test', 'ShelfController@index');
Route::get('desks/{desk}', 'DeskController@show');
Route::post('desks', 'DeskController@store');
Route::put('desks/{desk}', 'DeskController@update');
Route::delete('desks/{desk}', 'DeskController@delete');

Route::prefix('desks/{desk}')->group(function (){
    Route::get('shelves', 'ShelfController@index');
    Route::get('shelves/{shelf}', 'ShelfController@show');
    Route::post('shelves', 'ShelfController@store');
    Route::put('shelves/{shelf}', 'ShelfController@update');
    Route::delete('shelves/{shelf}', 'ShelfController@delete');
});