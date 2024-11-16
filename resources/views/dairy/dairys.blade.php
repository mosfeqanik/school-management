@extends('layouts.master')
@section('title','Dairy')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Dairy </h1>
        </div>
        @if(Auth::guard('admin')->check())
        <div class="col-md-12">
            <a href="{{route('dairy.create.show')}}" class="text-white btn btn-primary btn-margin-right">Create Dairy Report</a>
        </div>
        @elseif(Auth::guard('teacher')->check())
            <div class="col-md-12">
                <a href="{{route('dairy.create.show')}}" class="text-white btn btn-primary btn-margin-right">Create Dairy Report</a>
            </div>
        @endif
        <div class="container">
            <h2  class="text-primary">Daily Dairy</h2>
            @foreach($dairys as $dairy)
            <p  class="text-primary" >{{ Carbon\Carbon::parse($dairy->created_at)->format('d-m-Y') }}</p>
            <h1>Day:{{$dairy->title}}</h1>
                <div class="table-responsive-sm   ">
                <table class="table table-bordered text-primary">
                    <thead>
                    <tr>
                        <th>Bangla 1st paper</th>
                        <th>Bangla 2nd paper</th>
                        <th>English 1st paper</th>
                        <th>English 1st paper</th>
                        <th>Sociology</th>
                        <th>General knowledge</th>
                        <th>English literature</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$dairy->Bangla_1st_paper}}</td>
                        <td>{{$dairy->Bangla_2nd_paper}}</td>
                        <td>{{$dairy->English_1st_paper}}</td>
                        <td>{{$dairy->English_2nd_paper}}</td>
                        <td>{{$dairy->Sociology}}</td>
                        <td>{{$dairy->General_knowledge}}</td>
                        <td>{{$dairy->English_literature}}</td>
                        <td>{{$dairy->Example1}}</td>
                        <td>{{$dairy->Example2}}</td>
                        <td>{{$dairy->Example3}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
    </div>
        <!-- dairy tabe -->
@endsection