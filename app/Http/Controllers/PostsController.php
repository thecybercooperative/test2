<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
      $posts = WinkPost::live()
          ->orderBy('publish_date', 'DESC')
          ->paginate(10);
          return view('posts.index', [
            'title' => 'Blog',
            'subtitle' => 'Here\'s what we think about the state of cybersecurity marketing.',
            'posts' => $posts,
          ]);
    }

   public function single($slug)
   {
       $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

       return view('posts.single', compact('post'));
   }

}