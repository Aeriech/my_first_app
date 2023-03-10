<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

// import to use the controller
// use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    if (session() -> has('username')) {
        session() -> pull('username');
    }
    return view('login');
});

Route::get('/login', function () {
    if (session() -> has('username')) {
        return redirect('profile');
    }
    return view('login');
});

//using controller
Route::post('users', [UsersController::class,'getData']);

// controller for fetching data from data base
// Route::get('users', [UsersController::class,'getDatabase']);

//  Route::get('users', [UsersController::class,'getData']);

//Route::view('login', "login");
Route::view('profile', 'profile');

// to pass data
// Route::get('/{name}', function ($name) {
//     return view('about', ['name' => $name]);
// });

//2 ways to call view
//1st way is the longer way
// Route::get('/about', function () {
//     return view('about');
// });

//2nd way is short cut for viewing route the first parameter is what is the route and second one is name of the file
// Route::view('name','name');

// //To call the controller
// Route::get("users", [Users::class, 'index']);