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
    public function AuthLogin(){
        $admin_id = Session::get('id');
        if($admin_id){
            return redirect('/dashboard');
        }else{
            return redirect('/admin')->send();
        }
    }
    public function all_category_products(){
        $this->AuthLogin();
        $all_category_products = $this->category::all();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_products);
        return view('admin_layout')->with('all_category_product',$manager_category_product);
    }
    public function add_category_products(){
        $this->AuthLogin();
        return view('admin.add_category_product');
    }
    public function save_category_products(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
    
        $this->category->insert($data);
        // DB::table('tbl_category_product')->insert($data);
        Session::put('message','Success');
        return Redirect::to('/add-category-products');
    }
    public function update_category_products($category_product_id){
        $this->AuthLogin();
        $category_product=$this->category->where('category_id',$category_product_id)->get();
        return view('admin.update_category_product')->with('data',$category_product);
    }
    public function delete_category_products($category_product_id){
        $this->AuthLogin();
        $this->category->where('category_id',$category_product_id)->delete();
        return Redirect::to('all-category-products');
    }
}