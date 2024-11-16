@extends('layouts.master')
@section('title','Student Register')
@section('content')
    <body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form action="{{route('student.register')}}" method="post" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                            <label for="inputName">Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputConfirmPassword" name="password_confirmation " class="form-control" placeholder="Confirm Password" required="required">
                            <label for="inputConfirmPassword"> Confirm Password </label>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="register" >
                </form>
            </div>
        </div>
    </div>
@endsection
