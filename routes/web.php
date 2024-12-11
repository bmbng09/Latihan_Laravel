<?php

use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return "Sign-in Form";
});
Route::post('/signin', function () {
    return "Process Sign-in Data";
});


Route::get('/signup', function () {
    return "Sign-up Form";
});
Route::post('/signup', function () {
    return "Process Sign-up Data";
});


Route::get('/', function () {
    return "Welcome to the Home Page";
});


Route::get('/blog/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Default Title');
    $content = request()->query('content', 'No Content');

    return "Blog ID: $blogId, Title: $title, Content: $content";
});
// Route::get('/blog/{slug}', function ($slug) {
//     return "Blog Detail for Slug: $slug";
// });


Route::get('/category/{slug}', function ($slug) {
    return "Articles under Category: $slug";
});


Route::get('/author/{username}', function ($username) {
    return "Articles written by Author: $username";
});


Route::get('/privacy-policy', function () {
    return "Privacy Policy Page";
});
