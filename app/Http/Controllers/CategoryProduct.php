<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\Http\Requests;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

session_start();

class CategoryProduct extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category=$category;
    }
    public function all_category_products(){
        $all_category_products = $this->category::all();
        // dd($all_category_products);
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_products);
        return view('admin_layout')->with('all_category_product',$manager_category_product);
    }
    public function add_category_products(){
        return view('admin.add_category_product');
    }
    public function save_category_products(Request $request){
        $data = array();
        $data['category_name'] = $request->category_product_name;
    
        $this->category->insert($data);
        // DB::table('tbl_category_product')->insert($data);
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
        $this->category->where('category_id',$category_product_id)->update($data);
        return Redirect::to('all-category-products');
    }
    public function delete_category_products($category_product_id){
        $this->category->where('category_id',$category_product_id)->delete();
        return Redirect::to('all-category-products');
    }
}