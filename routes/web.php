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

Route::get('/admin_login', 'AdminController@login');
Route::match(['get','post'],'/admin_login', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
