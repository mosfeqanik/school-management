@extends('layouts.master')

@section('title','Posts')
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
        @if(Auth::guard('admin')->check())
            <div class="col-md-12">

                <a href="{{route('post.create.show')}}" class="text-white btn btn-primary btn-margin-right"> Create Blog</a>

                <a href="#" class="text-white btn btn-danger btn-margin-right">Trashed Blog</a>

                <a href="#" class="btn btn-success btn-margin-right text-white">Create Class</a>

                <a href="#" class="btn btn-warning btn-margin-right text-white">Publish Blogs</a>
            </div>
        @elseif(Auth::guard('teacher')->check())
            <div class="col-md-12">

                <a href="{{route('post.create.show')}}" class="text-white btn btn-primary btn-margin-right"> Create Post</a>

            </div>
        @endif
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <h1>{{$post->teachers['name']}}</h1>
                        <h1><a href="{{route('post.showbyid',$post->id)}}">{{$post->title}}</a></h1>
                        {!!$post->details!!}
                        posted:<small>{{$post->created_at->diffForHumans()}}</small>
                        <div class="col-4">
                            <img src="{{asset('images/Featured_Images'.$post->image)}}" alt="" width="100%">
                        </div>
                    @endforeach
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection
