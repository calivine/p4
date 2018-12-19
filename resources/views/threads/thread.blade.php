@extends('layouts.master')

@section('content')
    <div class='row thread-body'>
        <div class='col-3-3 remove-gutter-xs'>
            @include('threads.body')
        </div>
    </div>
    @if(Auth::check())
        <div class='row'>
            <div class='col-3-3 remove-gutter-xs'>
                @include('modules.create-comment')
            </div>
        </div>
    @endif
    <div class='row'>
        <div class='col-3-3 remove-gutter-xs'>
            <section>
                @if ($comments != null)
                    @foreach ($comments as $comment)
                        @include('comments._comment')
                    @endforeach
                @endif
            </section>
        </div>
    </div>
    <a href='/'>Return Home</a>
@endsection
