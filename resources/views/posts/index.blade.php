@extends('layouts.app')

@section('content')
    <h1>Portfolio</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="width: 30rem; padding: 10px; margin: 0 0 10px 20px;">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <br>
                        <div class="col-md-4 col-sm-4">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h1>No posts found</h1>
    @endif
    <br>
@endsection