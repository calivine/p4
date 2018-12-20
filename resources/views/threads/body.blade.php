<section>
    <h2>{{ $thread->title }}</h2>
    <div class='row'>
        <span>Started by {{ $thread->user->name }} on {{ $thread->created_at }}</span>
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