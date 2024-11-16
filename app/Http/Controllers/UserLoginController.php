<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminlogincheck',['only'=>['index']]);
        $this->middleware('teacherlogincheck',['only'=>['index']]);
        $this->middleware('guardianlogincheck',['only'=>['index']]);
    }
    public function index(){
        return view('user.index');
    }
    public function login(){

//        dd(\request('password'));
        $this->validate(\request(),[
            'email'      =>  'required',
            'password'  =>  'required'
        ]);
        if (Auth::attempt(['email'=>\request('email'),'password'=>\request('password')]));
        return redirect()->route('dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('student.login.show');
    }
}
