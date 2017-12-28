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

//Route::get('/', 'HomeController@index');
//Route::get('/', 'HomeController@welcome');

Route::get('/home', 'HomeController@index')->name('home');
Route::any('{all}', function () {
    return view('welcome');
})
    ->where(['all' => '.*']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
