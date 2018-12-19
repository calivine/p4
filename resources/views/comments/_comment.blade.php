<div class='row comment-box'>
    <div class='col-1-4'>
        <div class='row'>
            {{ $comment->user->name }}
        </div>
        @foreach($comment->user->roles as $role)
            <div class='row'>
                {{ $role->name }}
            </div>
        @endforeach
        <div class='row'>
            {{ $comment->created_at }}
        </div>
    </div>
    <div class='col-1-2'>
        <p>
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
