<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(){
        $users=User::all();
        return view('dailyattendance.dailyattendance',compact('users'));
    }
    public function create(){
        return ('itsworking');
    }
}
