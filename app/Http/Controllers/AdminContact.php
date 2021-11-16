<?php

namespace App\Http\Controllers;
use App\Models\TbContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminContact extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('id');
        if($admin_id){
            return redirect('/dashboard');
        }else{
            return redirect('/admin')->send();
        }
    }
    function index(){
        $this->AuthLogin();
        $data=TbContact::paginate(6);
        return view('admin.admin_contact',['data'=>$data]);
    }
    function eye_contact($userid){
        $this->AuthLogin();
        $data = TbContact::find($userid);
        return view('admin.view_contact',['data'=>$data]);
    }
}