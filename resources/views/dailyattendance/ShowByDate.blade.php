@extends('layouts.master')
@section('title','Daily attendance')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Parents Information </h1>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Guardians</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joining Date</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joining Date</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($guardians as $guardian)
                            <tr>
                                <td>{{$guardian->id}}</td>
                                <td>{{$guardian->name}}</td>
                                <td>{{$guardian->email}}</td>
                                <td>{{ Carbon\Carbon::parse($guardian->created_at)->format('d-m-Y') }}</td>
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