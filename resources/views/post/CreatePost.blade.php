@extends('layouts.master')
@include('partials.tinymce')
@section('title','Create post')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h2> Create a Post</h2>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-"8>
            <form action="{{route('post.create')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea name="details" class="form-control my-editor">{!! old('details') !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Create A New Post</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>

    </div>
@endsection
