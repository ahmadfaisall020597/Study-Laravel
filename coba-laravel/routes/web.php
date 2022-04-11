<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome', [
        "tittle" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Faisal",
        "email" => "ahmadfaisal2513@gmail.com",
        "image" => "laravel.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Posts
Route::get('/posts/{slug}', [PostController::class, 'show']);
