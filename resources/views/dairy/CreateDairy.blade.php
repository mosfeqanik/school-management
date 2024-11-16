@extends('layouts.master')
@include('partials.tinymce')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h2> Create a Dairy Report</h2>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-"8>
            <form action="{{route('dairy.create')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Day</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Bangla_1st_paper">Bangla 1st paper</label>
                    <textarea name="Bangla_1st_paper" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="Bangla_2nd_paper">Bangla 2nd paper</label>
                    <textarea name="Bangla_2nd_paper" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="English_1st_paper">English 1st paper</label>
                    <textarea name="English_1st_paper" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="English_2nd_paper">English 2nd paper</label>
                    <textarea name="English_2nd_paper" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="Sociology">Sociology</label>
                    <textarea name="Sociology" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="General_knowledge">General knowledge</label>
                    <textarea name="General_knowledge" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="English_literature">English literature</label>
                    <textarea name="English_literature" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="Example1">Example</label>
                    <textarea name="Example1" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="Example2">Example</label>
                    <textarea name="Example2" class="form-control" cols="2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="Example3">Example</label>
                    <textarea name="Example3" class="form-control" cols="2" rows="2"></textarea>
                </div>

                <div>
                    <button class="btn btn-primary" type="submit">Create A New Dairy</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>

    </div>
@endsection