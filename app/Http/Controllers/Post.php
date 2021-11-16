<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class Post extends Controller
{
    function view(){
       $post = Posts::find(1);
       return view('admin.tbpost.postupdate',['data'=>$post]);
    }
    function post(Request $request){
        $post = Posts::find(1);
        $post->content= $request->content;
        $post->save();
        return redirect('/view-post');
    }
}