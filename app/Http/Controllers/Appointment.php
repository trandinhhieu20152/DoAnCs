<?php

namespace App\Http\Controllers;
use App\Models\TbAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class Appointment extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('id');
        if($admin_id){
            return redirect('/dashboard');
        }else{
            return redirect('/admin')->send();
        }
    }
    function set_appointment(Request $request){
       Session::flash('name',$request->name);
       Session::flash('date',$request->date);
       Session::flash('time',$request->time);
       Session::flash('phone',$request->phone);
       Session::flash('descript',$request->descript);
       return redirect('/get-appointment');
    }
    function get_appointment(){
        return view('function.appointment');
    }
    function confirm_appointment(Request $request){
        $data = new TbAppointment();
        $data->name=$request->name;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->sdt=$request->phone;
        $data->descript=$request->descript;
        $data->save();
        echo '<script> alert("Đặt bàn thành công") </script>';
        return view('pages.home');
    }
    function success_appointment($tableid){
       return view('function.successappointment');
    }
}