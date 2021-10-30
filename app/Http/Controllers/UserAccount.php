<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class UserAccount extends Controller
{
    public function all_user(){
        $data=User::paginate(6);
        return view('admin.user_account',['data'=>$data]);
    }
    public function add_account(){
        return view('admin.add_account');
    }
    public function save_account(Request $request){
        $name= $request->input('admin_name');
        $email= $request->input('admin_email');
        $pass= $request->input('admin_password');
        $repass= $request->input('admin_repassword');
        $level=$request->input('level');
        if($pass != $repass){
            echo'<script> alert("Mật khẩu không trùng khớp")</script>';
            return view('admin.add_account');
        }else{
            $accont = new User();
            $accont->name=$name;
            $accont->email=$email;
            $accont->password=$pass;
            $accont->level=$level;
            $accont->save();
            echo'<script> alert("Thêm tài khoản admin thành công")</script>';
            return redirect('/user-account');
        }
    }
    public function update_account($userid){
       $data_user= User::find($userid);
       return view('admin.update_account',['data'=>$data_user]);
    }
    public function save_update_account(Request $request){
        $data= User::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->level=$request->power;
        $data->save();
        return redirect('/user-account');
    }
    public function delete_account($userid){
        $data= User::find($userid);
        $data->delete();
        return redirect('/user-account');
    }
    // public function update_account(){
    //     $edit_category_products = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
    //     $manager_category_product = view('admin.all_category_product')->with('edit_category_product',$edit_category_products);
    //     return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    // }

}