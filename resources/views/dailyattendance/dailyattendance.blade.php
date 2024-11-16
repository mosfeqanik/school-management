@extends('layouts.master')
@section('title','Daily attendance')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Dairy attendance </h1>
        </div>
    </div>
        <form action="{{route('dailyattendance.Create')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input type="date" name="attendancedate" class="form-control">
            </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><input type="text" name="id" value="{{$user->id}}" style="background-color: white;
  color: black; text-align: center;" disabled></td>
                                <td><input type="text" name="name" value="{{$user->name}}"style="background-color: white;
  color: black; text-align: center;" disabled></td>
                                <td><input type="radio" name="action" value="present">Present</td>
                                <td><input type="radio" name="action" value="Absent">Absent</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- dairy tabe -->
@endsection
