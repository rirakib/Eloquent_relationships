<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//one to one relations 
Route::get('/', function () {  
    $user = User::all();
    return view('one_to_one',compact('user'));
});

//one to many relations 
Route::get('/one_to_many',function(){

    $posts = Post::all();
    return view('one_to_many',compact('posts'));
});
