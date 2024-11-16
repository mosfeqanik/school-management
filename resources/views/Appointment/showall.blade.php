@extends('layouts.master')
@section('title','Customer registration')
@section('content')
    <div class="container">
        @include('errors.error')
        <div class="card-header mt-5">
            <i class="fas fa-table"></i>
            Appointments</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Guardian Name</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Guardian Name</th>
                        <th>Time</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {{$counter=0}}
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{$counter=$counter+1}}</td>
                            <td>{{$appointment->Teachers['name']}}</td>
                            <td>{{$appointment->guardians['name']}}</td>
                            <td>{{$appointment->time}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Choose Appointment schedule</div>
            @foreach($teachers as $teacher)
                <div class="card-body">
                        <form action="{{route('appointment.create',$teacher->id)}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="form-label-group">
                                    <h2>{{$teacher->name}}</h2>
                                </div>
                            </div>
                            <select name="time" class="form-control form-label-group mb-3">
                                <option selected>Time</option>
                                <option value="10:00 AM-11:00 AM">10:00 AM-11:00 AM</option>
                                <option value="11:00 AM-12:00 AM">11:00 AM-12:00 AM</option>
                                <option value="12:00 AM-01:00 AM">12:00 AM-01:00 AM</option>
                            </select>
                            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit" >
                        </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
