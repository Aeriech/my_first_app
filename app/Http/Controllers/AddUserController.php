<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;

class AddUserController extends Controller
{
    //
    function addUser(Request $req){
        $req->validate([
            'username' => 'required | max:20',
            'password' => 'required | min:5',
            'email' => 'required | max:50'
        ]);
        $user = new Userdata();
        $user -> username = $req -> username;
        $user -> password = $req -> password;
        $user -> email = $req -> email;
        $user -> save();
        return redirect('login');
    }
}
