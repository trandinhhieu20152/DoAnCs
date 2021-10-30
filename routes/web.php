<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home','HomeController@index');

/* Back-end */
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
//login
Route::post('/admin-dashboard','AdminController@dashboard');
//sign up
Route::post('/register-dashboard','AdminController@admin_register');
//exitlogout
Route::get('/logout','AdminController@log_out');


// Category products
Route::get('/all-category-products','CategoryProduct@all_category_products');
Route::get('/add-category-products','CategoryProduct@add_category_products');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_products');

Route::post('/save-category-product','CategoryProduct@save_category_products');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_products');

// User Accont
Route::get('/user-account','UserAccount@all_user');
Route::get('/add-account','UserAccount@add_account');
Route::get('/update-account/{userid}','UserAccount@update_account');

Route::post('/save-account','UserAccount@save_account');
Route::post('/save-update-account','UserAccount@save_account');