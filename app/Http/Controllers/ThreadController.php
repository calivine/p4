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
        $comments = $thread->comments;


        return view('threads.thread')->with([
            'thread' => $thread,
            'comments' => $comments->isNotEmpty() ? $comments : null
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
        $threads->save();

        return redirect()->route('viewThread', ['id' => $threads->id])->with([
            'alert' => 'New thread was successfully created.'
        ]);
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

        $thread = Thread::find($id);

        $comment = new Comment();
        $comment->text = $request->input('text');
        $comment->author = 'Test';
        $comment->thread()->associate($thread);
        $comment->save();

        return redirect()->route('viewThread', ['id' => $id])->with([
            'alert' => 'Your comment was added.'
        ]);
    }
}
