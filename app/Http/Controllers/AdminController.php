<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
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
        $request=DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($admin_email==''){
            echo'<script> alert("Hãy nhập lại email")</script>';
            return view('admin_login');
        }elseif($admin_password==''){
            echo'<script> alert("Hãy nhập lại mật khẩu")</script>';
            return view('admin_login');
        }else{
            if($request){
                Session::put('admin_name',$request->admin_name);
                Session::put('admin_id',$request->admin_id);
                return Redirect::to('/dashboard');
            }else{
                Session::put('message','User name or password failed. Please enter again');
                return Redirect::to('/admin');
            }
        }
    }
    public function log_out(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}