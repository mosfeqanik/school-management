@extends('layouts.master')

@section('title','Dashboard')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">Principal</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin.login.show')}}">
                    <span class="float-left">2</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">Teacher</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('teacher.login.show')}}">
                    <span class="float-left">12</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">Guardian</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('guardian.login.show')}}">
                    <span class="float-left">100</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <div class="mr-5">Student</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('student.login.show')}}">
                    <span class="float-left">100</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
    </div>
    @if(Auth::guard('admin')->check())
    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">Teacher</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('teacher.register.show')}}">
                    <span class="float-left">Register</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">Guardian</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('guardian.register.show')}}">
                    <span class="float-left">Register</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <div class="mr-5">Student</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('student.register.show')}}">
                    <span class="float-left">Register</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4"></div>
        <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <form action="{{route('section.create')}}" method="POST">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-life-ring"></i>
                        </div>
                        <div class="mr-5">
                            {{csrf_field()}}
                            <input type="number" name="name" placeholder="Add class">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Add</button>
                      <i class="fas fa-angle-right"></i>
                </form>
            </div>
        </div>
        <div class="col-xl-4"></div>
    </div>
    @endif

        <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            My Students</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>class</th>
                        <th>Joining Date</th>
                        <th>Guardian</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>class</th>
                        <th>Joining Date</th>
                        <th>Guardian</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
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

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            My Teachers</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{ Carbon\Carbon::parse($teacher->created_at)->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
