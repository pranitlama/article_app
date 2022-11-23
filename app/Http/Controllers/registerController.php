<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    //

    public function registeruser(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        user::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password)
        ]);
    }

}
