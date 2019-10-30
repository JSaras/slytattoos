@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <br>
    <small>Written on {{$post->created_at}}</small>
    <br><br>
    <a href="/posts" class="btn btn-dark">Go Back</a>
@endsection