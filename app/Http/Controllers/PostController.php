<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //to delete
    public function delete($id){
        $data=Post::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }

    public function addpost(Request $req){
        Post::create([
          
            'user_id'=>$req->id,
            'title'=>$req->title,
        ]);

        return redirect()->route('dashboard');
    }

    public function add(){
        return view('add');
    }
}
