<section>
    <h2>{{ $thread->title }}</h2>
    <div class='col-1-4'>
        <span>
            Created at {{ $thread->created_at }} {{ $thread->user->name }}
        </span>
    </div>
    <div class='col-1-2'>
        <p>
            {{ $thread->body_text }}
        </p>
    </div>
</section>