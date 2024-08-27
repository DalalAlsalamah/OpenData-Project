<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // Validate the request
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Attempt to login the user
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match our records.'
            ]);
        }

        // Regenerate the session token to prevent session fixation
        request()->session()->regenerate();

        // Redirect to the datasets page
        return redirect('/datasets');
    }

    public function destroy()
    {
        // Log the user out
        Auth::logout();

        // Redirect to the login page
        return redirect('/login');
    }
}
