<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher.register');
    }
    public function register(){
        $this->validate(\request(),[
            'name'  => 'required|min:4',
            'email'  => 'required|min:4',
            'password'  => 'required|min:4',
        ]);
        Teacher::create([
            'name'      => \request('name'),
            'email'     => \request('email'),
            'password'  => Hash::make(\request('password')),
        ]);
        return redirect()->route('dashboard');
    }
    public function show(){
        $teachers=Teacher::all();
        return view('teacher.showteacher',compact('teachers'));
    }


}
