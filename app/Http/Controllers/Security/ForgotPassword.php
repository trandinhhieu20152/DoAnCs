<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    function forgot(){
        return view('login.forgotpass');
    }
    function password(Request $request){
        dd($request->all());
    }
}