@extends('layouts.master')

@section('title')
     Delete Thread
@endsection

@section('content')
    <p>
        Are you sure you want to delete this thread?
    </p>
    <form method='POST' action='/threads/{{ $thread->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Delete'>
    </form>
    <a href='/threads/{{ $thread->thread_id }}/edit'>Cancel and Return</a>
@endsection