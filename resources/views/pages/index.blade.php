@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$title}}</h1>
        <p> This is just a sample app that I'm making. Let's see. </p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" role="button" href="/register">Register</a></p>
</div>
 @endsection