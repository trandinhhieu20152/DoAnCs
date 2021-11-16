<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    private $product;
    private $category;
    public function __construct(Product $product, Category $category)
    {
        $this->product= $product;
        $this->category= $category;
    }
   
    public function index()
    {
        $result= $this->product
        ->join('categories', 'categories.id', '=', 'products.category_id')->get();
        return view('admin.all_product')->with('all_product', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result= $this->category::all();
        return view('admin.add_product')->with("all_category", $result);
    }

    
    public function store(Request $request)
    {
        $data= array();
        $data['product_name']= $request->product_name;
        $data['product_price']= $request->product_price;
        $data['category_id']= $request->category_id;
        $data['product_des']= $request->product_des;

        $get_image= $request->file('product_image');
        // dd($get_image);
        if($get_image){
            $name_image = $get_image->getClientOriginalName();
            $new_image= $name_image .'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/products',$new_image);
            $data['product_image']= $new_image;
            $this->product->insert($data);
            Session::put('message','Success');
            return redirect()->route('Product.index');

        }
        $data['product_image']= '';
        $this->product->insert($data);

        Session::put('message','Success');

        return redirect()->route('Product.index');

    }
    public function edit($id){
        $product= $this->product->where('product_id',$id)->get();
        $all_category= $this->category->get();
        // dd($product);
        return view('admin.edit_product')->with('products', $product)->with('all_category', $all_category);
    }

    public function update(Request $request, $id)
    {
        $data= array();
        $data['product_name']= $request->product_name;
        $data['product_price']= $request->product_price;
        $data['category_id']= $request->category_id;
        $data['product_des']= $request->product_des;

        $get_image= $request->file('product_image');
        // dd($get_image);
        if($get_image){
            $name_image = $get_image->getClientOriginalName();
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/products',$new_image);
            $data['product_image']= $new_image;
            $this->product->where('product_id', $id)->update($data);
            Session::put('message','Success');
            return redirect()->route('Product.index');

        }
        $this->product->where('product_id', $id)->update($data);
        Session::put('message','Success');

        return redirect()->route('Product.index');

    }
    public function delete($product_id){
        // $result=DB::table('products')->where('product_id', $product_id)->delete();
        $result = $this->product->where('product_id',$product_id)->delete();
        // dd($result);
        
        return redirect()->route('Product.index');
    }

}