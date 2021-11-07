<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

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
}