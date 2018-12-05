@extends('layouts.master')


@section('content')
    <section>
        <h2>{{ $title }}</h2>
        <p>
            By {{ $author }}
        </p>
        <p>
            Created at {{ $created_at }}
        </p>
        <p>
            {{ $body_text }}
        </p>
    </section>
    <form method='POST' action='/threads/{{ $id }}/comment'>
        {{ csrf_field() }}
        <fieldset>
            <label for='text'>
                Text:*
                <textarea autocomplete='off' name='text' id='text'></textarea>
            </label>
        </fieldset>
        <button type='submit'>Submit</button>
    </form>
    <section>
        @if ($comments != null)
            @foreach ($comments as $comment)
                <p>
                    {{ $comment['text'] }}
                </p>
            @endforeach
        @endif
    </section>
    <a href='/'>Return Home</a>
@endsection
