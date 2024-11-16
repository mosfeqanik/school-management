@extends('layouts.master')
@section('title','Student')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Students Information </h1>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                My Students</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Age</th>
                            <th>class</th>
                            <th>Joining Date</th>
                            <th>Guardian</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>class</th>
                            <th>Joining Date</th>
                            <th>Guardian</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>Age</td>
                                <td>Class</td>
                                <td>{{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}</td>
                                <td>Guardian</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- dairy tabe -->
@endsection