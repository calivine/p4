@extends('layouts.master')

@section('content')
<<<<<<< HEAD
    <div class='container'>
        <div class='row'>
            <div class='col-2-3'>
                @foreach($threads as $thread)
                    @include('threads.link')
                @endforeach
            </div>
        </div>
    </div>
=======
    <section class='container background-primary'>
        @foreach($threads as $thread)
            @include('modules.thread-link')
        @endforeach
    </section>
>>>>>>> 8578e3517c37b56e7d44b15946450cbc142b363d
@endsection