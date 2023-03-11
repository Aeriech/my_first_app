<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    // show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // handle the login form submission
    public function login(Request $request)
    {
        // validate the input fields
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();

            // redirect to the intended page or home
            return redirect()->intended('/');
        }

        // redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

}

}