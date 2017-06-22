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
Route::post('/setup/uploadProfilePic','SetupController@uploadProfilePic');
Route::post("/setup/removeProfilePic", 'SetupController@removeUploadedImages');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/*----------  Admin routes  ----------*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*----------  Profile Setup Routes  ----------*/
//Route::get('accountsetup', 'AccountSe@index')->name('accountsetup');
Route::post('updateinfo', 'SetupController@updateinfo');
//Route::get('accountsetup', 'AccountSetup@updateinfo');

/*----------  Blog Routes  ----------*/

Route::group(['prefix' => 'blog'],function(){
  Route::get('/', 'PostController@index')->name('blog');
  Route::get('/{post}', 'PostController@show');
});

