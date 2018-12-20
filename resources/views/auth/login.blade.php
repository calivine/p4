@extends('layouts.master')

@section('content')
    <h2>Log In</h2>
    <form method='POST' action='{{ route('login') }}'>
        @csrf
        <label for='email'>Email
            <input id='email' type='email' name='email' value='{{ old('email') }}' autofocus>
        </label>

        <label for='password'>Password
            <input id='password' type='password' name='password'>
        </label>
        <label for='remember'>
            <input type='checkbox' name='remember'
                   id='remember' {{ old('remember') ? 'checked' : '' }}>
            Remember Me
        </label>

        <button type='submit' class='btn btn-primary'>
            Login
        </button>
    </form>
@endsection
