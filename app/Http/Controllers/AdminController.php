<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
session_start();


class AdminController extends Controller
{
    public function index(){
        return view('login.login');
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
        $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
        if($admin_email=='' && $admin_password==''){
            echo'<script> alert("Nhập thiếu email hoặc password")</script>';
            return view('login.login');
        }elseif(!preg_match($regex,$admin_email)){
            echo'<script> alert("Nhập không đúng định dạng email")</script>';
            return view('login.login');
        }else{
            $request=DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->first();
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

       $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
       $length=strlen($password);

        if($name == '' && $email=='' && $password == '' && $repassword == ''){
            echo'<script> alert("Nhập đầy đủ thông tin")</script>';
            return view('login.login');
        }elseif(!preg_match($regex,$email)){
            echo'<script> alert("Nhập đúng định dạng email")</script>';
            return view('login.login');
        }elseif(User::where('email','=',$email)->count()>0){
            echo'<script> alert("Email này đã được sử dụng")</script>';
            return view('login.login');
        }elseif($password != $repassword){
            echo'<script> alert("Mật khẩu không trùng khớp")</script>';
            return view('login.login');
       }elseif($length <8){
            echo'<script> alert("Mật khẩu nhỏ quá 8 số")</script>';
            return view('login.login');
        }else{
            $user= new User();
            $user->name= $name;
            $user->email= $email;
            $user->password= $password;
            $user->level= $level;
            $user->save();
            echo'<script> alert("Đăng ký thành công")</script>';
            return view('login.login');
       }
    }

    public function log_out(){
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('/admin');
    }
}