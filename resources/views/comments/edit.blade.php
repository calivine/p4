@extends('layouts.master')

@section('title')
    Edit Comment
@endsection

@section('content')
    <section>
        <p>
            {{ $created_at }}
        </p>
        <p>
            {{ $text }}
        </p>
    </section>
    <form method='POST' action='/comments/{{ $id }}'>
        {{ method_field('put') }}
        {{ csrf_field() }}
        <label for='comment_text'>
            Edit Text:
        </label>
        <input type='text' name='comment_text' id='comment_text' value='{{ old('comment_text', $text) }}'>
        <input type='submit' value='Save Changes'>
    </form>
@endsection