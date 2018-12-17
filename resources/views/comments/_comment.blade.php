<div class='row'>
    <div class='col-1-4'>
        <div class='row'>
            <span>{{ $comment->user->name }}</span>
        </div>
        @foreach($comment->user->roles as $role)
            <div class='row'>
                <span>{{ $role->name }}</span>
            </div>
        @endforeach
        <div class='row'>
            <span>{{ $comment->created_at }}</span>
        </div>
    </div>
    <div class='col-1-2'>
        <p class='comment-box'>
            {{ $comment->text }}
        </p>
    </div>
    <div class='col-1-4'>
        @if($user != null and $user->id == $comment->user_id)
            <a href='/comments/{{ $comment->id }}/edit'>Edit</a>
            <a href='/comments/{{ $comment->id }}/delete'>Delete Comment</a>
        @endif
    </div>
</div>
