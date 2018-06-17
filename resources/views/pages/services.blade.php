@extends('layouts.app')

@section('content')
        <h1><?php echo $title ?></h1>
        <p> This is the services page. </p>
        <ul class="list-group">
        @if(count($services) > 0)
        @foreach($services as $service)
            <li class="list-group-item">
                {{$service}}
            </li>
        @endforeach
        @endif
        </ul>
@endsection
