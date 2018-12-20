@extends('layouts.master')

@section('content')
    <h2>
        Registration
    </h2>

    <form method='POST' action='{{ route('register') }}'>
        @csrf

        <label for='name'>Name
            <input id='name' type='text' name='name' value='{{ old('name') }}' autofocus>
        </label>

        <label for='email'>E-Mail Address
            <input id='email' type='email' name='email' value='{{ old('email') }}'>
        </label>

        <label for='password'>Password(min:6)
            <input id='password' type='password' name='password'>
        </label>

        <label for='password-confirm'>Confirm Password
            <input id='password-confirm' type='password' name='password_confirmation'>
        </label>
        <button type='submit' class='btn btn-primary'>
            Register
        </button>
    </form>


@endsection
