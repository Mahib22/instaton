<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    //
    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request)
    {
        //
        $attr = $request->validate([
            'name' => ['required', 'string', 'max:191', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:191', 'min:3'],
            'username' => ['required', 'alpha_num', 'unique:users,username,' . auth()->id()],
        ]);

        // update profile
        auth()->user()->update($attr);

        return redirect()
            ->route('profile', auth()->user()->username)
            ->with('message', 'Profile updated successfully');
    }
}
