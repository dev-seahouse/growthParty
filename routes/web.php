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

Auth::routes();
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/setup','SetupController@index')->name('setup');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/uploadProfilePic','SetupController@uploadProfilePic');

/*----------  Admin routes  ----------*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*----------  Blog Routes  ----------*/
Route::group(['prefix' => 'blog'],function(){
  Route::get('/', 'PostController@index')->name('blog');
  Route::get('/{post}', 'PostController@show');
});

