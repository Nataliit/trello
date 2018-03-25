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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('desks', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Desk::all();
});

Route::get('desks/{id}', function($id) {
    return Desk::find($id);
});

Route::post('desks', function(Request $request) {
    return Desk::create($request->all);
});

Route::put('desks/{id}', function(Request $request, $id) {
    $article = Desk::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('desks/{id}', function($id) {
    Desk::find($id)->delete();

    return 204;
});