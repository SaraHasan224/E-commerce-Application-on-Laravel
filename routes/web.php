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

Route::get('/admin', 'AdminController@login');
Route::match(['get','post'],'/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']],function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');

    Route::any('/admin/settings', 'AdminController@settings');

    Route::match(['get','post'],'/admin/update-pwd', 'AdminController@updatePassword');

});

Route::get('/logout', 'AdminController@logout');
