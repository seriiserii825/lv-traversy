<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //
    public function update(Request $request)
    {
        $user =  Auth::user();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'avatar' => 'image|mimes:jpeg,jpg,webp|max:2048'
        ]);

        if ($request->hasFile('avatar')) {
            if($user->avatar) {
                Storage::delete('public/'.$user->avatar);
            }

            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');

        }

        $user->update($validated);
        return redirect()->route('dashboard')->with('success', 'Profile updated successfully');
    }
}
