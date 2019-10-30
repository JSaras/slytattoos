@extends('layouts.app')

@section('content')
    <h1>Portfolio</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="width: 30rem; padding: 10px; margin: 0 0 10px 20px;">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h1>No posts found</h1>
    @endif
    <br>
    <a href="/posts/create" class="btn btn-dark">Create Post</a>
@endsection