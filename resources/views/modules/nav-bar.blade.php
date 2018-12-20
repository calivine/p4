<nav>
    <div class='col-1-6 remove-gutter-xs'>
        <h1>
            <a href='/'>
                {{ config('app.name') }}
            </a>
        </h1>
    </div>
    @foreach(config('app.nav'.Auth::check()) as $link => $label)
        <div class='col-1-6 remove-gutter-xs'>
            @if(Request::is(substr($link,1)))
                {{ $label }}
            @else
                <a href='{{ $link }}' class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'> {{ $label }}</a>
            @endif
        </div>
    @endforeach

    @if(Auth::check())
        <div class='col-1-6 remove-gutter-xs'>
            <form method='POST' id='logout' action='/logout'>
                {{ csrf_field() }}
                <a href='#' onClick='document.getElementById("logout").submit();'>Logout {{ $user->name }}</a>
            </form>
        </div>
    @endif
</nav>