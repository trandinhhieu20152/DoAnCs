<?php

namespace App\Http\Controllers;
use App\Models\TbAppointment;
use Illuminate\Http\Request;

class AdminTable extends Controller
{
    function index(){
        $data = TbAppointment::paginate(6);
        return view('admin.tbadmin.admin_table',['data'=>$data]);
    }
    function delete_table($userid){
        $data= TbAppointment::find($userid);
        $data->delete();
        return redirect('/admin-table');
    }
    function search_table(Request $request){
        $tbuser= TbAppointment::where('name','like','%'.$request->key.'%')->get();
        return view('admin.tbadmin.search_table',compact('tbuser'));
    }
}