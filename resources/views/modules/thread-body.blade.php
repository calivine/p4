<section>
    <h2 id='thread-header'>{{ $thread->title }}</h2>
    <div class='row'>
        <p id='thread-header-body'> Started by {{ $thread->user->name }} on {{ $thread->created_at->format('m/d/y g:ia') }}</p>
    </div>
    <div class='row'>
        <div class='col-1-4'>
            <ul>
                <li>
                    {{ $thread->user->name }}
                </li>
                @foreach($thread->user->roles as $role)
                    <li>
                        {{ $role->name }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class='col-1-2'>
            <p>
                {{ $thread->body_text }}
            </p>
        </div>
    </div>
</section>