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
        dump($request->input('comment_text'));
        die();

    }
}
