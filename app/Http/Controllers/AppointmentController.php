<?php

namespace App\Http\Controllers;

use App\appointment;
use App\Teacher;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(){
        $appointments=appointment::latest()->get();
        $teachers=Teacher::latest()->get();
        return view('Appointment.showall',compact('appointments','teachers'));
    }
    public function create($id){
//        $this->validate(\request(),[
//            'time'=>'required'
//        ]);
//        appointment::Teachers()->create([
//            'time'=>\request('time'),
//            'guardian_id'=>Auth::id()
//        ]);
        return redirect()->route('appointment.show');

    }
}
