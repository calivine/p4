@extends('layouts.master')

@section('content')
    <div class='row'>
        @include('threads.search-thread')
    </div>
    @foreach($threads as $thread)
        @include('modules.thread-link')
    @endforeach
    <a href='/'>Home</a>
@endsection