@extends('layouts.master')

@section('content')
    @foreach($threads as $thread)
        <li>
            <a href='{{ '/threads/' . $thread->id }}'>
                {{ $thread->title }}
            </a>
        </li>
    @endforeach

@endsection