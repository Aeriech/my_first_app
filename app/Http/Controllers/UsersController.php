<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Userdata;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    //validation
    function getData(Request $req){
        $req->validate([
            'email' => 'required | email',
            'password' => 'required '
        ]);

        // Attempt to authenticate the user
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
