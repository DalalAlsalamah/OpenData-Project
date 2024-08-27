<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', Password::min(6)->letters()->numbers(), 'confirmed']
        ]);

        // Create the user in the database
        $user = User::create($attributes);

        // Log the user in
        Auth::login($user);

        // Redirect to the datasets page
        return redirect('/datasets');
    }
}
