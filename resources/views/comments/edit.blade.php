@extends('layouts.master')

@section('title')
    Edit Comment
@endsection

@section('content')
    <section>
        <p>
            {{ $comment->created_at }}
        </p>
    </section>
    <form method='POST' action='/comments/{{ $comment->id }}'>
        {{ method_field('put') }}
        {{ csrf_field() }}
        <label for='comment_text'>
            Edit Text:
        </label>
        <input type='text' name='comment_text' id='comment_text' value='{{ old('comment_text', $comment->text) }}'>
        <input type='submit' value='Save Changes'>
    </form>
    <a href='/threads/{{ $thread_id }}'>Back</a>
@endsection