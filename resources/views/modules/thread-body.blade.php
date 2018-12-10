<section>
    <h2>{{ $thread['title'] }}</h2>
    <p>
        By {{ $thread['author'] }}
    </p>
    <p>
        Created at {{ $thread['created_at'] }}
    </p>
    <p>
        {{ $thread['body_text'] }}
    </p>
</section>