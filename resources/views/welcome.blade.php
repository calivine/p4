@extends('layouts.master')

@section('content')
    <p>
        Welcome to the P4 Forums.
    </p>
    @if(auth::check())
        <a href='/threads/new'>Create New Thread</a>
    @else
        <p>
            Register <a href='/register'>here</a> to get started.
        </p>
    @endif

    @foreach($threads as $thread)
        @include('modules.thread-link')
    @endforeach

@endsection
