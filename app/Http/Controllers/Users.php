<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        $names =["Aeriech", "Ace", "Edison"];
        return view("name", ["names"=>$names]);
    }
}
