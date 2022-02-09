<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    //
    public function __invoke(User $user, $following)
    {
        if ($following !== "follower" && $following !== "following") {
            return redirect(route('profile', $user->username));
        }

        return view('users.following', [
            'user' => $user,
            'follows' => $following == "following" ? $user->follows : $user->followers,
        ]);
    }
}
