@extends('layouts.master')

@section('title')
    Edit Comment
@endsection

@section('content')
    <form method='POST' action='/comments/{{ $comment->id }}'>
        {{ method_field('put') }}
        {{ csrf_field() }}
        <label for='comment_text'>
            Edit Text:
            <textarea type='text' name='comment_text' id='comment_text' rows='10', cols='25'>
                {{ old('comment_text', $comment->text) }}
            </textarea>
        </label>
        <button type='submit' class='btn btn-primary'>
            Save Changes
        </button>
    </form>
    <a href='/threads/{{ $thread_id }}'>Back</a>
@endsection