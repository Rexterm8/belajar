<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('Home',[
       "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About',[
        "title" => "About",
        "name" => "Julianto",
        "email" => "julianto007@binus.ac.id",
        "image" => "juli.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

route::get('/post/{slug}',[PostController::class, 'show']);

