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

Route::group(['middleware' => ['auth']],function()
{
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::match(['get','post'],'/admin/settings', 'AdminController@settings');
    Route::match(['get','post'],'/admin/checkCredentials', 'AdminController@checkCredentials');
    Route::match(['get','post'],'/admin/updatePassword', 'AdminController@updatePassword');
    
    //Routes for admin categories
    Route::match(['get','post'],'/admin/categories', 'CategoryController@categories');
    Route::match(['get','post'],'/admin/categories/add', 'CategoryController@addCategories');
    Route::match(['get','post'],'/admin/categories/edit/{category_id}', 'CategoryController@editCategories');
    
    
    //Routes for admin sub-categories
    Route::match(['get','post'],'/admin/subCategories', 'SubCategoryController@sub_categories');
    Route::match(['get','post'],'/admin/subCategories/add', 'SubCategoryController@add');
    Route::match(['get','post'],'/admin/subCategories/edit/{id}', 'SubCategoryController@edit');
    

    Route::get('/logout', 'AdminController@logout');
});
