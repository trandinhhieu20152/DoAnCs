<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        return view('pages.home');
    }
    public function menu(){
        // $products= Product::all();
        // dd($products);
        // die();
        $categories= Category::all();
        return view('pages.menu', compact('categories'));
    }
    public function product_detail(Request $request, $id)
    {
        $product=$this->product->where('product_id', $id)->get();
        // dd($product);
        return view('pages.product_detail', compact('product'));
    }
}