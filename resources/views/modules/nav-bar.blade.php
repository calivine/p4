<nav>

    <div class='col-1-6'>
        <h1> {{ config('app.name') }}</h1>
    </div>
    @foreach(config('app.nav'.Auth::check()) as $link => $label)
        <div class='col-1-6'>
            <a href='{{ $link }}' class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'> {{ $label }}</a>
        </div>
    @endforeach

    @if(Auth::check())
        <div class='col-1-6'>
            <form method='POST' id='logout' action='/logout'>
                {{ csrf_field() }}
                <a href='#' onClick='document.getElementById("logout").submit();'>Logout {{ $user->name }}</a>
            </form>
        </div>
    @endif

</nav>