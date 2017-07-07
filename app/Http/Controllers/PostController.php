<?php

namespace App\Http\Controllers;

use App\Blog\Post;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::paginate(10);
    return view('posts.index', compact('posts'));
  }

  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }
}
