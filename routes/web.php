<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    $posts = Post::where('user_id', auth()->id())->get();
    return view('home', ['posts' => $posts]);
});


Route::POST('/register', [userController::class, 'register']);


Route::get('/logout', [userController::class, 'logout']);

Route::post('/login', [userController::class, 'login']);

Route::post('/create-post', [PostController::class, 'createPost']);
