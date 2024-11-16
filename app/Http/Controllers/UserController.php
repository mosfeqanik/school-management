<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.register');
    }
    public function register(){
        $this->validate(\request(),[
            'name'  => 'required|min:4',
            'email'  => 'required|min:4',
            'password'  => 'required|min:4',
        ]);
        User::create([
            'name'      => \request('name'),
            'email'     => \request('email'),
            'password'  => Hash::make(\request('password')),
        ]);
        return redirect()->route('dashboard');
    }
    public function addcomment($id){
        $this->validate(\request(),[
            'comments'=>'required'
        ]);
        Post::find($id)->Comments()->create([
            'comments'=>\request('comments'),
            'user_id'=>1
        ]);
        return redirect()->back();
    }
    public function show(){
        $users=User::all();
        return view('user.showstudent',compact('users'));
    }
}
