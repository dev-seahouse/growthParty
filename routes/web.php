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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

/*----------  Admin routes  ----------*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*----------  Profile Setup Routes  ----------*/
Route::get('accountsetup', 'AccountSetup@index')->name('accountsetup');
Route::post('updateinfo', 'AccountSetup@updateinfo');
//Route::get('accountsetup', 'AccountSetup@updateinfo');

/*----------  Blog Routes  ----------*/

Route::group(['prefix' => 'blog'],function(){
  Route::get('/', 'PostController@index')->name('blog');
  Route::get('/{post}', 'PostController@show');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
