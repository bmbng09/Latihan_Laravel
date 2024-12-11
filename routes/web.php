<?php

use GuzzleHttp\Middleware;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/signin', function () {
//     return "Sign-in Form";
// });
Route::get('/signin', function () {
    return view('signin');
});

// Route::post('/signin', function () {
//     return "Process Sign-in Data";
// });
Route::post('/signin', [UserController::class, 'login']);



// Route::get('/signup', function () {
    //     return "Sign-up Form";
    // });
Route::get('/signup', function () {
        return view('signup');
    });

    Route::post('/signup', [UserController::class], 'register');
// Route::post('/signup', function () {
//     return "Process Sign-up Data";
// });


Route::get('/', function () {
    return view('welcome');
    // return "Welcome to the Home Page";
});

// ini soal no 3 latihan 1
// Route::get('/blog/{blogId}', function ($blogId) {
//     $title = request()->query('title', 'Default Title');
//     $content = request()->query('content', 'No Content');

//     return "Blog ID: $blogId, Title: $title, Content: $content";
// });

// Route::get('/blog/{slug}', function ($slug) {
//     return "Blog Detail for Slug: $slug";
// });

// ini soal no 1 latihan 2
Route::get('/blog', function () {
    return view('blog');
});



Route::get('/category/{slug}', function ($slug) {
    return "Articles under Category: $slug";
});


Route::get('/author/{username}', function ($username) {
    return "Articles written by Author: $username";
});


Route::get('/privacy-policy', function () {
    return "Privacy Policy Page";
});

Route::get('/profile', function () {
    return "Halaman Profile";
})->middleware(Auth::class);
