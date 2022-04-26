<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view('welcome', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Faisal",
        "email" => "ahmadfaisal2513@gmail.com",
        "image" => "laravel.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Posts
Route::get('/posts/{post:slug}', [PostController::class, 'show']); // route mode Binding


Route::get('/categories', function() {
    return view('categories',[
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'active' => "categories",
//         'posts' => $category->posts->load('author','category'), // Penggunaan lazy eager
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category','author'), // penggunaan lazy eager load jika penulisan tertukar tidak masalah
//     ]);
// });
