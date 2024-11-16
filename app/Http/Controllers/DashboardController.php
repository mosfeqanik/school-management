<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Guardian;
use App\Section;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users=User::all();
        $teachers=Teacher::all();
        $admins=Admin::all();
        $guardians=Guardian::all();
        $sections=Section::all();
        return view('dashboard',compact('users','teachers','admins','guardians','sections'));
    }
}
