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


/* Front-end */
Route::get('/','HomeController@index');
// hello


/* Back-end */
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@log_out');
Route::post('/admin-dashboard','AdminController@dashboard');

// Category products
Route::get('/all-category-products','CategoryProduct@all_category_products');
Route::get('/add-category-products','CategoryProduct@add_category_products');


Route::post('/save-category-product','CategoryProduct@save_category_products');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_products');