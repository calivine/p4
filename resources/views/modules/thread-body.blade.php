<section>
    <h2>{{ $thread['title'] }}</h2>
    <p>
        Created at {{ $thread['created_at'] }} By {{ $author}}
    </p>
    <p>
        {{ $thread['body_text'] }}
    </p>
</section>