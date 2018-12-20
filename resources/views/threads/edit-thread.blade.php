@extends('layouts.master')

@section('content')

    <div class='row'>
        <h2>Edit Thread</h2>
    </div>
    <div class='row'>
        <form method='POST' action='/threads/{{ $thread->id }}'>
            {{ method_field('put') }}
            {{ csrf_field() }}

            <label for='title'>
                Title:
                <input type='text' name='title' id='title' value='{{ old('title', $thread->title) }}'>
            </label>

            <label for='body_text'>
                Text:
                <textarea type='text' name='body_text' id='body_text' rows='10', cols='25'>
                    {{ old('body_text', $thread->body_text) }}
                </textarea>
            </label>

            <input type='submit' class='btn btn-primary' value='Save Changes'>
        </form>
    </div>
    <div class='row'>
        <a href='/threads/{{ $thread->id }}/delete'>Delete Thread</a>
    </div>

@endsection