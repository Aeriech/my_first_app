<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    //validation
    function getData(Request $request){
        $request->validate([
            'username' => 'required | max:10',
            'password' => 'required | min:5'
        ]);
        $data = $request->input();
        $request -> session() -> put('username',$data['username']);
        return redirect('profile');
    }

    // function getDatabase(){
    //     //the usrs is the name of the table in my_first_app database in mysql
    //     return DB::select("select * from users");
    // }

    // function getData(){
    //     return User::all();
    // }
}
