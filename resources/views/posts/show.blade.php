@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <img style="width: 60%" src="/storage/cover_images/{{$post->cover_image}}">
    <div>
        <hr>
        {!!$post->body!!}
    </div>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <br>
    <hr>
    <a href="/posts" class="btn btn-dark">Go Back</a>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
            <hr>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}    
            {!!Form::close() !!}
        @endif
    @endif
@endsection