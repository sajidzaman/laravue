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
Route::middleware('auth:api')->get('/intro','HomeController@intro');
Route::middleware('auth:api')->get('/posts','BlogController@index');
Route::middleware('auth:api')->get('/post/{slug}','BlogController@view');
Route::middleware('auth:api')->get('/users','HomeController@users');
