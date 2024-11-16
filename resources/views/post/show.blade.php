@extends('layouts.master')
@section('title','Post')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <div class="col-md-12">
                    <h2> {{$post->title}}</h2>
                </div>
                {{--<div class="btn-group">--}}
                    {{--<a class="btn btn-primary btn-sm" href="{{route('blog.edit',$blog->id)}}">Edit</a>--}}
                    {{--<form action="{{route('blog.delete',$blog->id)}}" method="post">--}}
                        {{--{{method_field('Delete')}}--}}
                        {{--<button class="btn btn-danger btn-sm btn-margin-right" type="submit">--}}
                            {{--Delete--}}
                        {{--</button>--}}
                        {{--{{csrf_field()}}--}}
                    {{--</form>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <articles>
                    {{--                        {{$blog->body}}--}}
                    {!! $post->details !!}
                </articles>
            </div>
            <div class="col-md-2"></div>
            <div class="row">
                <div class="col-md-12">
                    @foreach($comments as $comment)
                        <div class="col-md-12 ">
                            {{--<strong >{{App\user::find($comment->user_id)->name}}</strong>--}}
                            <small>{{ $comment->created_at->diffForhumans() }}</small>
                            <p class="border border-danger">{{$comment->comments}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('user.post.addcomment',$post->id)}}" method="post">
                        {{csrf_field()}}
                        <textarea name="comments" placeholder="comments" ></textarea>
                        <input type="submit" name="submit" value="comment">
                    </form>
                </div>
            </div>

        </article>
    </div>
@endsection