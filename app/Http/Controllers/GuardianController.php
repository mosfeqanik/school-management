<?php

namespace App\Http\Controllers;

use App\Guardian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuardianController extends Controller
{
    public function index(){
        return view('guardian.register');
    }
    public function register(){
        $this->validate(\request(),[
            'name'  => 'required|min:4',
            'email'  => 'required|min:4',
            'password'  => 'required|min:4',
        ]);
        Guardian::create([
            'name'      => \request('name'),
            'email'     => \request('email'),
            'password'  => Hash::make(\request('password')),
        ]);
        return redirect()->route('dashboard');
    }
    public function show(){
        $guardians=Guardian::all();
        return view('guardian.parents',compact('guardians'));
    }
}
