<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
session_start();


class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function admin_index(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email= $request->admin_email;
        $admin_password=$request->admin_password;
        $request=DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->first();
        if($admin_email==''){
            echo'<script> alert("Hãy nhập lại email")</script>';
            return view('admin_login');
        }elseif($admin_password==''){
            echo'<script> alert("Hãy nhập lại mật khẩu")</script>';
            return view('admin_login');
        }else{
            if($request){
                $check=DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->where('level','=',0)->first();
                if($check){
                    Session::put('name',$request->name);
                    Session::put('id',$request->id);
                    return Redirect::to('/dashboard');
                }else{
                    return  redirect('/home');
                }
            }else{
                Session::put('message','Tài khoản hoặc mật khẩu của bạn không nhập đúng !!');
                return Redirect::to('/admin');
            }
        }
    }
    public function admin_register(Request $request){
       $name= $request->input('name');
       $email= $request->input('email');
       $password= $request->input('password');
       $repassword= $request->input('repassword');
       $level= $request->input('level');
       if($password != $repassword){
            echo'<script> alert("Mật khẩu không trùng khớp")</script>';
            return view('admin_login');
       }elseif((int)$password<8){
            echo'<script> alert("Mật khẩu quá ngắn. Yêu cầu từ 8 chữ số trở lên")</script>';
            return view('admin_login');
       }else{
            $user= new User();
            $user->name= $name;
            $user->email= $email;
            $user->password= $password;
            $user->level= $level;
            $user->save();
            echo'<script> alert("Đăng ký thành công")</script>';
            return view('admin_login');
       }
    }

    public function log_out(){
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('/admin');
    }
}