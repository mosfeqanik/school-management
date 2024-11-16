<?php

namespace App\Http\Controllers;

use App\Post;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts=Post::latest()->get();
        return view('post.posts',compact('posts'));
    }
    public function show(){
        return view('post.CreatePost');
    }
    public function create(Request $request){
        $input=$request->all();

        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $name = uniqid().$filename;
            $file->move('images/Featured_Images/',$name);
            $input['image']=$name;
        }

        Teacher::find(Auth::guard('teacher')->id())->posts()->create($input);
        return redirect()->route('post.show');
    }
    public function ShowbyId($id){
        $post=Post::findOrfail($id);
        $comments=$post->comments;
        return view('post.show',compact('post','comments'));
    }
}
