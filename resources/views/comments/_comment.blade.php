<div class='comment-box'>
    {{ $comment['author'] }} said at {{ $comment['created_at'] }}
    {{ $comment['text'] }}
    <a href='/comments/{{ $comment['id'] }}/edit'>Edit</a>
    <a href='/comments/{{ $comment['id'] }}/delete'>Delete Comment</a>
</div>