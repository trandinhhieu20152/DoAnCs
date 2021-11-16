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
Route::get('','HomeController@index');

//Menu
Route::get('/Menu', 'HomeController@menu');

//view contact
Route::get('/contact','Contact@index');

Route::post('/send-contact','Contact@send_contact');
// product detail
Route::get('/Product-detail/{id}','HomeController@product_detail');


// appointment
Route::get('/get-appointment', 'Appointment@get_appointment');
Route::get('/set-appointment', 'Appointment@set_appointment');
Route::get('/success-appointment', 'Appointment@success_appointment');

Route::post('/confirm-appointment', 'Appointment@confirm_appointment');

/* end Front-end */

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
// Admin Post
Route::get('/view-post', 'Post@view');
Route::post('/update-post', 'Post@post');
//Admin table 
Route::get('/admin-table','AdminTable@index');
Route::get('/delete-table/{userid}','AdminTable@delete_table');
Route::get('/search-table','AdminTable@search_table');

// Admin contact
Route::get('/admin-contact','AdminContact@index');
Route::get('/eye-contact/{userid}','AdminContact@eye_contact');


// Category products
Route::get('/all-category-products','CategoryProduct@all_category_products');
Route::get('/add-category-products','CategoryProduct@add_category_products');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_products');
Route::get('/update-category-product/{category_product_id}','CategoryProduct@update_category_products');

Route::post('/save-category-product','CategoryProduct@save_category_products');
// Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_products');


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


// giao dien nguoi dung

/*End Back-end */