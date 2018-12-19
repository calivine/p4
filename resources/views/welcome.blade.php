@extends('layouts.master')

@section('content')
    <p>
        Welcome to the P4 Forums. Click on a thread below to get started.
    </p>
    @if(auth::check())
        <a href='/threads/new'>Create New Thread</a>
    @else
        <p>
            Register <a href='/register'>here</a> to create your own thread.
        </p>
    @endif

    @foreach($threads as $thread)
        @include('threads.link')
    @endforeach

@endsection
