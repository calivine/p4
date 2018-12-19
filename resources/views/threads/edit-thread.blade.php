@extends('layouts.master')

@section('content')
    <div class='container'>
        <div class='row'>
            <h2>Edit Thread</h2>
        </div>
        <div class='row'>
            <form method='POST' action='/threads/{{ $thread->id }}'>
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class='row'>
                    <div class='col-1-4'>
                        <label for='title'>
                            Title:
                        </label>
                    </div>
                    <div class='col-1-4'>
                        <input type='text' name='title' id='title' value='{{ old('title', $thread->title) }}'>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-1-4'>
                        <label for='body_text'>
                            Text:
                        </label>
                    </div>
                    <div class='col-1-4'>
                        <input type='text' name='body_text' id='body_text' value='{{ old('body_text', $thread->body_text) }}'>
                    </div>
                </div>
                <input type='submit' value='Save Changes'>
            </form>
        </div>
        <div class='row'>
            <a href='/threads/{{ $thread->id }}/delete'>Delete Thread</a>
        </div>
    </div>

@endsection