<li>
    <a href='{{ '/threads/' . $thread->id }}'>
        {{ $thread->title }}
    </a>
    @if(Auth::check())

        @if($user_role->name == 'admin')
             Edit
        @endif
    @endif
</li>