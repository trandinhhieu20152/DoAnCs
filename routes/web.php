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
//forgot password
Route::get('/forgotpassword','Security\ForgotPassword@forgot');

Route::post('/forgotpassword','Security\ForgotPassword@password');

// User Accont
Route::get('/user-account','UserAccount@all_user');
Route::get('/add-account','UserAccount@add_account');
Route::get('/update-account/{userid}','UserAccount@update_account');
Route::get('/delete-user/{userid}','UserAccount@delete_account');

Route::post('/save-account','UserAccount@save_account');
Route::post('/update-account','UserAccount@save_update_account');


// Category products
Route::get('/all-category-products','CategoryProduct@all_category_products');
Route::get('/add-category-products','CategoryProduct@add_category_products');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_products');

Route::post('/save-category-product','CategoryProduct@save_category_products');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_products');


//product backend

Route::prefix('Product')->group(function(){
    Route::get('/', [
        'as'=> 'Product.index',
        'uses'=> "ProductController@index",
    ]);
    Route::get('/create', [
        'as'=> 'Product.create',
        'uses'=> "ProductController@create",
    ]);
    Route::post('/store', [
        'as'=> 'Product.store',
        'uses'=> "ProductController@store",
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Product.edit',
        'uses'=> "ProductController@edit",
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Product.update',
        'uses'=> "ProductController@update",
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Product.delete',
        'uses'=> "ProductController@delete",
    ]);
});