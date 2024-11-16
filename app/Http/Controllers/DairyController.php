<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dairy;

class DairyController extends Controller
{
    public function index(){
        $dairys=Dairy::latest()->get();
        return view('dairy.dairys',compact('dairys'));
    }
    public function show(){
        return view('dairy.CreateDairy');
    }
    public function create(Request $request){
        $this->validate(\request(),[
            'title'  => 'required',
            'Bangla_1st_paper'  => 'required',
            'Bangla_2nd_paper'  => 'required',
            'English_1st_paper'  => 'required',
            'English_2nd_paper'  => 'required',
            'Sociology'  => 'required',
            'General_knowledge'  => 'required',
            'English_literature'  => 'required',
        ]);
        Dairy::create([
            'title'                 => \request('title'),
            'Bangla_1st_paper'      => \request('Bangla_1st_paper'),
            'Bangla_2nd_paper'      => \request('Bangla_2nd_paper'),
            'English_1st_paper'     => \request('English_1st_paper'),
            'English_2nd_paper'     => \request('English_2nd_paper'),
            'Sociology'             => \request('Sociology'),
            'General_knowledge'     => \request('General_knowledge'),
            'English_literature'    => \request('English_literature'),
            'Example1'    => \request('Example1'),
            'Example2'    => \request('Example2'),
            'Example3'    => \request('Example3'),
            'teacher_id'=>1
        ]);
        return redirect()->route('dairy.show');
    }
    public function ShowbyId($id){
        $Dairy=Dairy::findOrfail($id);
        return view('dairy.show',compact('Dairy'));
    }

}
