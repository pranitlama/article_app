<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Home extends Controller
{
    //
function dashboard(){
    $post=Post::all();    
    // $post=Post::where('user_id','=',auth()->user()->id)->get(); //select * from posts
    // dd($post);
    return view('dashboard',compact('post'));
}

function login(){
    return view('login');
}

function register(){
    return view('register');
}

}
