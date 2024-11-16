<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuardianLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminlogincheck',['only'=>['index']]);
        $this->middleware('teacherlogincheck',['only'=>['index']]);
        $this->middleware('userlogincheck',['only'=>['index']]);
    }
    public function index(){
        return view('guardian.index');
    }
    public function login(){
        $this->validate(\request(),[
            'email'      =>  'required',
            'password'  =>  'required'
        ]);
        if (Auth::guard('guardian')->attempt(['email'=>\request('email'),'password'=>\request('password')]));
        return redirect()->route('dashboard');
    }

    public function logout(){
        Auth::guard('guardian')->logout();
        return redirect()->route('guardian.login.show');
    }
}
