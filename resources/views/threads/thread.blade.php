@extends('layouts.master')

@section('title')
    Threads
@endsection

@push('head')
    <link href='/css/comments/_comment.css' rel='stylesheet'>
@endpush

@section('content')
    <div class='container background-primary'>
        <div class='row'>
            <div class='col-3-3 remove-gutter-xs'>
                @include('modules.thread-body')
            </div>
        </div>
        <div class='row'>
            <div class='col-3-3 remove-gutter-xs'>
                @include('modules.create-comment')
            </div>
        </div>
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
    </div>
@endsection
