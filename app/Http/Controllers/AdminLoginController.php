<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('teacherlogincheck',['only'=>['index']]);
        $this->middleware('guardianlogincheck',['only'=>['index']]);
        $this->middleware('userlogincheck',['only'=>['index']]);

    }
    public function index(){
        return view('admin.index');
    }

    public function login(){
        $this->validate(\request(),[
            'email'      =>  'required',
            'password'  =>  'required'
        ]);
        if (Auth::guard('admin')->attempt(['email'=>\request('email'),'password'=>\request('password')]));
        return redirect()->route('dashboard');

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.show');
    }

}
