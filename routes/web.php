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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard/{program}','DashboardController@show');


/*----------  Auth Routes  ----------*/
Auth::routes();
Route::post('/otp/send',[
  'middleware'=>'GrahamCampbell\Throttle\Http\Middleware\ThrottleMiddleware:1000,2',// limit otp access rate to be 1 time per 2 minute
  'uses'=>'Auth\RegisterController@sendOtp'])
  ->name('sendOtp');


/* --------------- Application Setup Routes --------- */
Route::get('/setup','SetupController@index')->name('setup');
Route::post('/setup/uploadProfilePic','SetupController@uploadProfilePic');
Route::post("/setup/removeProfilePic", 'SetupController@removeUploadedImages');
Route::post('/setup', 'SetupController@store');


/*----------  Blog Routes  ----------*/

Route::group(['prefix' => 'blog'],function(){
  Route::get('/', 'PostController@index')->name('blog');
  Route::get('/{post}', 'PostController@show');
});


/*----------  Admin routes  ----------*/
Route::group(['prefix' => 'admin'], function () {
  Voyager::routes();
});

