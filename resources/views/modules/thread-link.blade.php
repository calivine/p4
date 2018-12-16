<li>
    <div class='row'>
        <div class='col-1-4'>
            <a href='{{ '/threads/' . $thread->id }}'>
                {{ $thread->title }}
            </a>
        </div>
        @if(Auth::check())
            <div class='col-1-4'>
                @if($user_role->name == 'admin')
                    <a href='{{ '/threads/' . $thread->id . '/edit' }}'>
                        Edit
                    </a> Thread
                @endif
            </div>
        @endif
    </div>
</li>