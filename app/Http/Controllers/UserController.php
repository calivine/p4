<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;


class UserController extends Controller
{
    public function profile()
    {
        # Get user who is signed in
        # return profile page for that user
        $user = Auth::user();
        dump($user->roles());
        die();
    }
}
