<section>
    <h2>{{ $thread->title }}</h2>
    <div class='row'>
        <span>Started by {{ $thread->user->name }} on {{ $thread->created_at }}</span>
    </div>
    <div class='row'>
        <div class='col-1-4'>
            <div class='row'>
                <span>{{ $thread->user->name }}</span>
            </div>
            @foreach($thread->user->roles as $role)
                <div class='row'>
                    <span>{{ $role->name }}</span>
                </div>
            @endforeach
        </div>
        <div class='col-1-2'>
            <p>
                {{ $thread->body_text }}
            </p>
        </div>
    </div>
</section>