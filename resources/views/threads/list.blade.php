@extends('layouts.master')

@section('content')
    <section class='container background-primary'>
        @foreach($threads as $thread)
            @include('threads.link')
        @endforeach
    </section>
@endsection