<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Comment;

class CommentController extends Controller
{
    /*
     * POST
     * /comment
     * Process user input and add new comment to thread.
     */
    public function addComment(Request $request, $id) {
        # Validate request data
        $request->validate([
            'text' => 'required'
        ]);

        $thread = Thread::find($id);
        $user = $request->user();

        $comment = new Comment();
        $comment->text = $request->input('text');
        $comment->thread()->associate($thread);
        $comment->user()->associate($user);
        $comment->save();

        return redirect()->route('viewThread', ['id' => $id])->with([
            'alert' => 'Your comment was added.'
        ]);
    }

    /*
     * GET
     * /comments/{id}/edit
     */
    public function edit($id)
    {
        # TO DO: display view to edit a comment
        $comment = Comment::find($id);
        $thread_id = $comment->thread->id;
        return view('comments.edit')->with([
            'comment' => $comment,
            'thread_id' => $thread_id
        ]);
    }

    /*
     * PUT
     * /comments/{id}
     * Process the form to update comment
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'comment_text' => 'required'
        ]);

        $comment = Comment::find($id);

        $comment->text = $request->input('comment_text');
        $comment->save();

        return redirect()->route('viewThread', ['id' => $comment->thread_id])->with([
            'alert' => 'Comment Updated'
        ]);
    }

    /*
     * GET
     * /comments/{id}/delete
     * Display confirmation page to delete comment
     */
    public function delete($id)
    {
        $comment = Comment::find($id);

        return view('comments.delete')->with([
            'comment' => $comment
        ]);
    }

    /*
     * Complete the delete process
     * DELETE
     * /comments/{id}/delete
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        $comment->delete();

        return redirect()->route('viewThread', ['id' => $comment->thread_id])->with([
            'alert' => 'Comment Deleted'
        ]);
    }
}
