<div class='comment-box'>
        {{ $comment->user->name }} said at {{ $comment->created_at }}
        {{ $comment->text }}
        @if($user != null and $user->id == $comment->user_id)
                <a href='/comments/{{ $comment->id }}/edit'>Edit</a>
                <a href='/comments/{{ $comment->id }}/delete'>Delete Comment</a>
        @endif
</div>