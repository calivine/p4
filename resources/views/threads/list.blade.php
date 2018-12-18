@extends('layouts.master')

@section('content')
    <section class='container background-primary'>
        @foreach($threads as $thread)
            @include('modules.thread-link')
        @endforeach
    </section>
@endsection