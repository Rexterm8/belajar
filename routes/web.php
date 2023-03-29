<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\ProfileController;


use App\Models\Category;
use App\Models\User;
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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('tes', function (Request $request){
    return 'testing';
});

Route::match(['get', 'poste'], 'url-match', function(Request $request){
    if($request->isMethod('post'));
        return 'Route POST';
    endif;

    return 'Route GET';
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Julianto",
        "email" => "julianto007@binus.ac.id",
        "image" => "juli.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category','author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category','author' )
    ]);
});


Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/umkm/{id?}', [UMKMController::class, 'gg']);

Route::get('get-request', function(Request $request){
    $uri = $request->path();
    $url = $request->url();

    $urlWithQueryString = $request->fullUrl();

    $host = $request->host();
    $httpHost = $request->httpHost();
    $schemaHttpHost = $request->schemeAndHttpHost();

    $ipAddress = $request->ip();

    return $ipAddress;
});

// www.example.com/umkm/a -> wwww.example.com/umkm/b
