<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;

class ListController extends Controller
{
    //
    function show(){
        $data = Userdata::all();
        return view('list',['userdata'=>$data]);
    }
}
