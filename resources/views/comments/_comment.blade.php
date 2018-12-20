<div class='row comment-box'>
    <div class='col-1-4'>
        <ul>
            <li>
                {{ $comment->user->name }}
            </li>
            @foreach($comment->user->roles as $role)
                <li>
                    {{ $role->name }}
                </li>
            @endforeach
            <li>
                {{ $comment->created_at->format('m/d/y g:ia') }}
            </li>
        </ul>
    </div>
    <div class='col-1-2'>
        <p>
            {{ $comment->text }}
        </p>
    </div>
    <div class='col-1-4'>
        @if($user != null and $user->id == $comment->user_id)
            <ul>
                <li>
                    <a href='/comments/{{ $comment->id }}/edit'>Edit</a>
                </li>
                <li>
                    <a href='/comments/{{ $comment->id }}/delete'>Delete Comment</a>
                </li>
            </ul>
        @endif
    </div>
</div>
