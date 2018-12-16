<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Thread;
use App\Comment;
use App\User;

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
        if(Auth::check())
        {
            $id = Auth::id();
            # $user = User::where('id', $id)->with('roles')->get();
            $user = User::find($id);
            foreach ($user->roles as $role) {
                $user_role = $role;
            }
            return view('threads.list')->with([
                'threads' => $threads,
                'user_role' => $user_role
            ]);
        }
        return view('threads.list')->with([
            'threads' => $threads,
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
    public function displayThread(Request $request, $id)
    {
        # Find thread by id
        $thread = Thread::find($id);

        # Get associated comments and their author's names
        $comments = Comment::where('thread_id', $id)->with('user')->get();

        # Get data about current user
        $user = $request->user();

        return view('threads.thread')->with([
            'thread' => $thread,
            'comments' => $comments->isNotEmpty() ? $comments : null,
            'user' => $user ?? null
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
            'title' => 'required|size:191',
            'body_text' => 'required|size:191'
        ]);

        # Get user object
        $user = $request->user();

        $threads = new Thread();

        $threads->title = $request->input('title');
        $threads->body_text = $request->input('body_text');
        $threads->user()->associate($user);
        $threads->save();

        return redirect()->route('viewThread', ['id' => $threads->id])->with([
            'alert' => 'New thread was successfully created.'
        ]);
    }


}
