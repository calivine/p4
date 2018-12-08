<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Comment;

class CommentController extends Controller
{
    /*
     * GET
     * /comments/{id}/edit
     */
    public function edit($id)
    {
        # TO DO: display view to edit a comment
        $comment = Comment::find($id);
        return view('comments.edit')->with([
            'text' => $comment->text,
            'created_at' => $comment->created_at,
            'author' => $comment->author,
            'id' => $comment->id
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
