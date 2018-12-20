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
     * /
     * Get most recent three threads and display on homepage
     */
    public function welcomeThreads()
    {
        $threads = Thread::orderBy('id', 'desc')
                    ->with('user')
                    ->take(3)
                    ->get();

        if(Auth::check())
        {
            $id = Auth::id();
            # $user = User::where('id', $id)->with('roles')->get();
            $user = User::find($id);
            # Check user's role
            foreach ($user->roles as $role) {
                if ($role->name == 'admin') {
                    $user_role = $role;
                    break;
                }
                $user_role = $role;
            }

            return view('welcome')->with([
                'threads' => $threads,
                'user_role' => $user_role
            ]);
        } else {
            return view('welcome')->with([
                'threads' => $threads,
            ]);
        }
    }



    /*
     * GET
     * /threads/list
     * Get and display list of threads
     */
    public function getList()
    {
        $threads = Thread::orderBy('id', 'desc')->with('user')->get();
        if(Auth::check())
        {
            $id = Auth::id();
            # $user = User::where('id', $id)->with('roles')->get();
            $user = User::find($id);
            foreach ($user->roles as $role) {
                if ($role->name == 'admin') {
                    $user_role = $role;
                    break;
                }
                $user_role = $role;
            }
            return view('threads.list')->with([
                'threads' => $threads,
                'user_role' => $user_role
            ]);
        } else {
            return view('threads.list')->with([
                'threads' => $threads,
            ]);
        }



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
        $comments = Comment::where('thread_id', $id)->with('user.roles')->get();

        # Get data about current user
        $user = $request->user();

        return view('threads.thread')->with([
            'thread' => $thread,
            'comments' => $comments->isNotEmpty() ? $comments : null,
            'user' => $user ?? null
        ]);
    }

    /*
     * GET
     * /threads/new
     * Display form to create a new thread
     */
    public function new()
    {
        return view('threads.new')->with([
            'title' => session('title', ''),
            'body_text' => session('body_text', '')
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
            'title' => 'required|max:100',
            'body_text' => 'required|max:191'
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

    /*
     * GET
     * /threads/{id}/edit
     * Display Thread to edit
     */
    public function editThread($id)
    {
        $thread = Thread::find($id);
        return view('threads.edit-thread')->with([
            'thread' => $thread
        ]);
    }

    /*
     * PUT
     * /threads/{id}
     * Process edit Thread
     */
    public function updateThread(Request $request, $id)
    {
        $this->validate($request, [
            'body_text' => 'required|max:191',
            'title' => 'max:100'
        ]);
        $thread = Thread::find($id);
        $thread->title = $request->input('title');
        $thread->body_text = $request->input('body_text');
        $thread->save();

        return redirect('/threads/list')->with([
            'alert' => 'Thread Updated'
        ]);
    }

    /*
     * GET
     * /comments/{id}/delete
     * Display confirmation page to delete comment
     */
    public function delete($id)
    {
        $thread = Thread::find($id);

        return view('threads.delete')->with([
            'thread' => $thread
        ]);
    }

    /*
     * Complete the delete process
     * DELETE
     * /comments/{id}/delete
     */
    public function destroy($id)
    {
        $thread = Thread::find($id);

        # First remove thread's comments
        $thread->comments()->delete();

        # Delete thread
        $thread->delete();

        # Return to home page with confirmation
        return redirect('/')->with([
            'alert' => 'Thread Deleted'
        ]);
    }


}
