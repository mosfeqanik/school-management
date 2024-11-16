@extends('layouts.master')

@section('title','Classes')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            @if(Auth::guard('admin')->check())
                <h1>Principal Dashboard</h1>
            @elseif(Auth::guard('teacher')->check())
                <h1>Teacher Dashboard</h1>
            @elseif(Auth::guard('guardian')->check())
                <h1>Guardian Dashboard</h1>
            @else(Auth::check())
                <h1>Student Dashboard</h1>
            @endif
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mb-3">
                        @foreach($sections as $section)
                            <div class="card text-white bg-dark o-hidden mb-2">
                            <div class="card-body ">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">
                                        Class{{$section->name}}
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Register</span>
                                <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
