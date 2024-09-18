<?php

// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function show()
    {
        return view('show', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('show')->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            throw ValidationException::withMessages(['current_password' => 'The provided password does not match our records.']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->route('show')->with('success', 'Password changed successfully!');
    }
}

