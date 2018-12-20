@extends('layouts.master')

@section('content')
    <h2>Create New Thread</h2>
    <form method='POST' action='/create'>
        {{ csrf_field() }}
        <fieldset>
            <label for='title'>
                Title:*(100 character limit)
                <input type='text' autocomplete='off' name='title' id='title' value='{{ old('title') }}'>
            </label>
            <label for='body_text'>
                Text:*(191 character limit)
                <textarea autocomplete='off' name='body_text' id='body_text' rows='10' , cols='25'>
                    {{ old('body_text') }}
                </textarea>
            </label>
        </fieldset>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
@endsection
