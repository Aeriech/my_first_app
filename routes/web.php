<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
//use App\Http\Controllers\UploadController;
use App\Http\Controllers\ListController;

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

//home page
Route::get('/', function () {
    return view('welcome');
});

//log out in profile page
Route::get('/logout', function () {
    //if session have a value of username  it will pull or delete it
    if (session() -> has('username')) {
        session() -> pull('username');
    }
    //else if theres no value it will open log in page
    return view('login');
});

//log in route
Route::get('/login', function () {
    //if session have a value and user tries to acess log in route he will be redirected to profile route
    if (session() -> has('username')) {
        return redirect('profile');
    }
    //else if theres no value it will open log in page
    return view('login');
});

//shows profile route
Route::view('profile', 'profile');

//using controller to validate username and password and fetch username input
Route::post('users', [UsersController::class,'getData']);

//to open list route
Route::view('list', 'list');
//to use controller to get list of database
Route::get('list',[ListController::class,'show']);

// upload file
// Route::view('upload', 'upload');

//for uploading file using controller
// Route::post('upload',[UploadController::class,'index']);

// controller for fetching data from data base
// Route::get('users', [UsersController::class,'getDatabase']);
//  Route::get('users', [UsersController::class,'getData']);

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