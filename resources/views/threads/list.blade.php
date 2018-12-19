@extends('layouts.master')

@section('content')
    @foreach($threads as $thread)
        @include('threads.link')
    @endforeach
@endsection