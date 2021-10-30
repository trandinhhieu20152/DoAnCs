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
    public function update_account(){
        return view('admin.update_account');
    }
    // public function update_account($user_id){
    //     $edit_account_user = DB::table('users')->where('id',$user_id)->get();
    //     $manager_account = view('admin.update_account')->with('edit_account_user',$edit_account_user);
    //     return view('admin_layout')->with('admin.update_account',$manager_account);
    // }

}