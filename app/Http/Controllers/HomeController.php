<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $product;
    public function __construct(Product $product)
    {
        $this->product=$product;
    }
    public function index(){
        $post= Posts::find(1);
        return view('pages.home',['data'=>$post]);
    }
    public function menu(){
        $categories= Category::all();
        return view('pages.menu', compact('categories'));
    }
    public function product_detail($id)
    {
        $product=$this->product->where('product_id', $id)->get();
        return view('pages.product_detail', compact('product'));
    }
}