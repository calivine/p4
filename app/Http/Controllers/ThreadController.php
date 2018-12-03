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
        return view('threads.thread')->with([
            'title' => $thread->title,
            'body_text' => $thread->body_text,
            'author' => $thread->author,
            'created_at' => $thread->created_at
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
}
