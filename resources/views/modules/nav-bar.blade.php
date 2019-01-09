<nav>
    <h1>
        <a href='/'>
            {{ config('app.name') }}
        </a>
    </h1>
    <ul>
        @foreach(config('app.nav'.Auth::check()) as $link => $label)
            @if(Request::is(substr($link,1)))
                <li>
                    {{ $label }}
                </li>
            @else
                <li>
                    <a href='{{ $link }}' class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'> {{ $label }}</a>
                </li>
            @endif
        @endforeach

        @if(Auth::check())
            <li>
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout {{ $user->name }}</a>
                </form>
            </li>
        @endif
    </ul>
</nav>