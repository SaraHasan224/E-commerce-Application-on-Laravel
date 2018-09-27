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

Route::get('/', 'IndexController@index');
Route::get('/shop', 'IndexController@shop');
Route::get('/products/{id}', 'IndexController@products');
Route::get('/shop/{url}', 'IndexController@shopByCategory');
Route::get('/blog', 'IndexController@blog');
Route::get('/404NotFound', 'IndexController@error');


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
    
    //Routes for blogs
    Route::match(['get','post'],'/admin/blogs', 'BlogsController@index');
    Route::match(['get','post'],'/admin/blogs/add', 'BlogsController@add');
    Route::match(['get','post'],'/admin/blogs/edit/{category_id}', 'BlogsController@edit');
    Route::match(['get','post'],'/admin/blogs/delete/{category_id}', 'BlogsController@delete');
    Route::match(['get','post'],'/admin/blogs/deleteProductImage/{productId}', 'BlogsController@deleteProductImage');   

    
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
    Route::match(['get','post'],'/admin/products/deleteProductImage/{productId}', 'ProductsController@deleteProductImage');   
    
    //Routes for products attributes
    Route::match(['get','post'],'/admin/products/attribute/{productId}', 'ProductsController@addAttribute');   
  //  Route::match(['get','post'],'/admin/products/attribute/edit/{productId}', 'ProductsController@editAttribute');   
    Route::match(['get','post'],'/admin/products/attribute/add/{productId}', 'ProductsController@addAttribute');   
    Route::match(['get','post'],'/admin/products/attribute/delete/{productId}', 'ProductsController@deleteAtribute');

    //Routes for alternate product images
    Route::match(['get','post'],'/admin/products/alternate-images/add/{productId}', 'ProductsController@addAlternateImage');   

    //Routes for index page banner
      Route::match(['get','post'],'/admin/banners', 'BannerController@index');
      Route::match(['get','post'],'/admin/banners/add', 'BannerController@add');
      Route::match(['get','post'],'/admin/banners/edit/{category_id}', 'BannerController@edit');
      Route::match(['get','post'],'/admin/banners/delete/{category_id}', 'BannerController@delete');      
      Route::match(['get','post'],'/admin/banners/deleteProductImage/{productId}', 'BannerController@deleteProductImage');
    //Routes for index page slider
      Route::match(['get','post'],'/admin/slider', 'SliderController@index');
      Route::match(['get','post'],'/admin/slider/add', 'SliderController@add');
      Route::match(['get','post'],'/admin/slider/edit/{category_id}', 'SliderController@edit');
      Route::match(['get','post'],'/admin/slider/delete/{category_id}', 'SliderController@delete');      
      Route::match(['get','post'],'/admin/slider/deleteProductImage/{productId}', 'SliderController@deleteProductImage');
    
    //Routes for brands
    Route::match(['get','post'],'/admin/brands', 'BrandsController@index');
    Route::match(['get','post'],'/admin/brands/add', 'BrandsController@add');
    Route::match(['get','post'],'/admin/brands/edit/{category_id}', 'BrandsController@edit');
    Route::match(['get','post'],'/admin/brands/delete/{category_id}', 'BrandsController@delete');      
    Route::match(['get','post'],'/admin/brands/deleteProductImage/{productId}', 'BrandsController@deleteProductImage');
  
          
    //Routes for newsletter
    Route::match(['get','post'],'/admin/newsletter', 'NewsletterSignUpController@index');
    Route::match(['get','post'],'/admin/newsletter/add', 'NewsletterSignUpController@add');
    Route::match(['get','post'],'/admin/newsletter/edit/{category_id}', 'NewsletterSignUpController@edit');
    Route::match(['get','post'],'/admin/newsletter/delete/{category_id}', 'NewsletterSignUpController@delete');      
    Route::match(['get','post'],'/admin/newsletter/deleteProductImage/{productId}', 'NewsletterSignUpController@deleteProductImage');
  
      
    Route::get('/logout', 'AdminController@logout');
});

