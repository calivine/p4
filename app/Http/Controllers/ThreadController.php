<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Comment;

class ThreadController extends Controller
{
    /*
     * GET
     * /threads/list
     * Get and display list of threads
     */
    public function getList()
    {
        $threads = Thread::orderBy('id', 'desc')->get();
        return view('threads.list')->with([
            'threads' => $threads
        ]);
    }


    /*
     * GET
     * /threads/new
     * Display form to create a new thread
     */
    public function new(Request $request)
    {
        return view('threads.new')->with([
            'title' => session('title', ''),
            'body_text' => session('body_text', '')
        ]);
    }

    /*
     * GET
     * /threads/{id}
     * Display a thread
     */
    public function displayThread($id)
    {
        $thread = Thread::find($id);
        $comments = Comment::where('thread_id', '=', $id)->get();

        return view('threads.thread')->with([
            'title' => $thread->title,
            'body_text' => $thread->body_text,
            'author' => $thread->author,
            'created_at' => $thread->created_at,
            'id' => $thread->id,
            'comments' => $comments->isNotEmpty() ? $comments->toArray() : null
        ]);
    }

    /*
     * POST
     * /create
     * Process input to create new thread
     */
    public function create(Request $request)
    {
        # Validate request data
        $request->validate([
            'title' => 'required',
            'body_text' => 'required'
        ]);

        $threads = new Thread();

        $threads->title = $request->input('title');
        $threads->body_text = $request->input('body_text');
        $threads->author = 'Test';
        $threads->reply_count = 0;

        $threads->save();


        return redirect()->route('viewThread', ['id' => $threads->id]);
    }

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

        $comment = new Comment();

        $comment->thread_id = $id;
        $comment->text = $request->input('text');
        $comment->author = 'Test';

        $comment->save();

        $thread = Thread::find($id);
        $thread->reply_count = $thread->reply_count + 1;
        $thread->save();


        /*
         *  TODO: Update reply count in Threads table.
         *  OR  REMOVE reply count column and calculate on a query statement
         */

        return redirect()->route('viewThread', ['id' => $id]);
    }
}
