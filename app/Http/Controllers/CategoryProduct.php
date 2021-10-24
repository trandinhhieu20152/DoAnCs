<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function all_category_products(){
        $all_category_products = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_products);
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    }
    public function add_category_products(){
        return view('admin.add_category_product');
    }
    public function save_category_products(Request $request){
        $data = array();
        $data['category_name'] = $request->category_product_name;
    
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Success');
        return Redirect::to('/add-category-products');
    }
    // public function edit_category_products($category_product_id){
    //     $edit_category_products = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
    //     $manager_category_product = view('admin.all_category_product')->with('edit_category_product',$edit_category_products);
    //     return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    // }
    public function update_category_products(Request $request,$category_product_id){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        return Redirect::to('all-category-products');
    }
    public function delete_category_products(Request $request,$category_product_id){
        
    }
}