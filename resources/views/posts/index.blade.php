@extends('layouts.app')

@section('content')
    <h1>Posts</h1> 
    @if(count($posts)>1)
    @foreach($posts as $post)
        <div class="card">
            <div class="card-body">
            <h3>{{$post->title}}</h3>
        <small>Written on {{$post->created_at}}</small>
            </div>
        </div>
    @endforeach
    @else
    <p>No posts found</p>
    @endif

@endsection