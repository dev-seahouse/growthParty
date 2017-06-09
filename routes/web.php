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

/*----------  App Routes  ----------*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*----------  Admin routes  ----------*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*----------  Blog Routes  ----------*/

Route::group(['prefix' => 'blog'],function(){
  Route::get('/', 'PostController@index')->name('blog');
  Route::get('/{post}', 'PostController@show');
});

