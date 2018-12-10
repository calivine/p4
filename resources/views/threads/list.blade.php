@extends('layouts.master')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-2-3'>
                @foreach($threads as $thread)
                    @include('modules.thread-link')
                @endforeach
            </div>
        </div>

    </div>


@endsection