<?php

namespace App\Http\Controllers;
use App\Models\TbContact;
use Illuminate\Http\Request;

class AdminContact extends Controller
{
    function index(){
        $data=TbContact::paginate(6);
        return view('admin.admin_contact',['data'=>$data]);
    }
    function eye_contact($userid){
        $data = TbContact::find($userid);
        return view('admin.view_contact',['data'=>$data]);
    }
}