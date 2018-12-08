@extends('layouts.master')

@section('title')
    Edit Comment
@endsection

@section('content')
    <p>
        Are you sure you want to delete this comment?
    </p>
    <form method='POST' action='/comments/{{ $comment->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Delete'>
    </form>
    <a href='/threads/{{ $comment->thread_id }}'>Cancel and Return</a>
@endsection