<?php

namespace App\Http\Controllers;
use App\Models\TbAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AdminTable extends Controller
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
        $data = TbAppointment::paginate(6);
        return view('admin.tbadmin.admin_table',['data'=>$data]);
    }
    function delete_table($userid){
        $this->AuthLogin();
        $data= TbAppointment::find($userid);
        $data->delete();
        return redirect('/admin-table');
    }
    function search_table(Request $request){
        $this->AuthLogin();
        $tbuser= TbAppointment::where('name','like','%'.$request->key.'%')->get();
        return view('admin.tbadmin.search_table',compact('tbuser'));
    }
}