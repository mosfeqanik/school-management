<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function create(request $request){
        $input=$request->all();
        Section::Create($input);
        return redirect()->route('section.show');
    }
    public function show(){
        $sections=Section::latest()->get();
        return view('class.showclass',compact('sections'));

    }

}
