<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post as Post;

class PostController extends Controller
{
  public function index() {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }
}
