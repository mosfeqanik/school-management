<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminlogincheck',['only'=>['index']]);
        $this->middleware('guardianlogincheck',['only'=>['index']]);
        $this->middleware('userlogincheck',['only'=>['index']]);
    }

    public function index(){
        return view('teacher.index');
    }
    public function login(){

//        dd(\request('password'));
        $this->validate(\request(),[
            'email'      =>  'required',
            'password'   =>  'required'
        ]);
        if (Auth::guard('teacher')->attempt(['email'=>\request('email'),'password'=>\request('password')]));
        return redirect()->route('dashboard');
    }
    public function logout(){
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.login.show');
    }
}
