@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <br>
    <small>Written on {{$post->created_at}}</small>
    <br><br>
    <hr>
    <a href="/posts" class="btn btn-dark">Go Back</a>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
    <hr>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}    
    {!!Form::close() !!}
@endsection