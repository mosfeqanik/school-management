@extends('layouts.master')
@section('title','Teacher Login')
@section('content')
  <body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Welcome Dear Teacher</div>
      <div class="card-body">
        <form action="{{route('teacher.login')}}" method="post" >
          {{csrf_field()}}
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
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login" >
        </form>
      </div>
    </div>
  </div>
@endsection
