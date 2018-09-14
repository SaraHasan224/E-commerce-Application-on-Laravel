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
    
    //Routes for categories
    Route::match(['get','post'],'/admin/categories', 'CategoryController@categories');
    Route::match(['get','post'],'/admin/categories/add', 'CategoryController@add');
    Route::match(['get','post'],'/admin/categories/edit/{category_id}', 'CategoryController@edit');
    Route::match(['get','post'],'/admin/categories/delete/{category_id}', 'CategoryController@delete');
    
    
    //Routes for sub-categories
    Route::match(['get','post'],'/admin/subCategories', 'SubCategoryController@sub_categories');
    Route::match(['get','post'],'/admin/subCategories/add', 'SubCategoryController@add');
    Route::match(['get','post'],'/admin/subCategories/edit/{sub_category_id}', 'SubCategoryController@edit');
    Route::match(['get','post'],'/admin/subCategories/delete/{sub_category_id}', 'SubCategoryController@delete');
     
    
    //Routes for products
    Route::match(['get','post'],'/admin/products', 'ProductsController@index');
    Route::match(['get','post'],'/admin/products/add', 'ProductsController@add');
    Route::match(['get','post'],'/admin/products/edit/{productId}', 'ProductsController@edit');
    Route::match(['get','post'],'/admin/products/delete/{productId}', 'ProductsController@delete');
     
    
    //Routes for blogs
    Route::match(['get','post'],'/admin/blogs', 'BlogsController@index');
    Route::match(['get','post'],'/admin/blogs/add', 'BlogsController@add');
    Route::match(['get','post'],'/admin/blogs/edit/{prdocutsId}', 'BlogsController@edit');
    Route::match(['get','post'],'/admin/blogs/delete/{prdocutsId}', 'BlogsController@delete');
    

    Route::get('/logout', 'AdminController@logout');
});
