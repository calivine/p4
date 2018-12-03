@extends('layouts.master')

@section('content')
    <form method='POST' action='/create'>
        {{ csrf_field() }}
        <fieldset>
            <label for='title'>
                Title:*
                <input type='text' autocomplete='off' name='title' id='title' value='{{ old('title') }}'>
            </label>
            <label for='body_text'>
                Text:*
                <textarea autocomplete='off' name='body_text' id='body_text'>
                {{ old('body_text') }}
            </textarea>
            </label>
        </fieldset>
        <button type='submit'>Submit</button>
    </form>
@endsection
