<?php

use Illuminate\Support\Facades\Route;
use Wink\WinkPost;

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
    $posts = WinkPost::live()->orderBy('publish_date', 'DESC')->limit(3)->get();
    return view('home', [
      'posts' => $posts,
    ]);
});

Route::get('/blog', function() {
    $posts = WinkPost::live()->orderBy('publish_date', 'DESC')->paginate(10);
    return view('posts.index', [
        'posts' => $posts,
    ]);
});

Route::get('blog/{slug}', function($slug) {
    $post = WinkPost::live()->whereSlug($slug)->firstOrFail();
    return view('posts.single', compact('post'));
});