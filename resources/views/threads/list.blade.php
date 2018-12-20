@extends('layouts.master')

@section('content')
    @foreach($threads as $thread)
        @include('modules.thread-link')
    @endforeach
    <a href='/'>Home</a>
@endsection