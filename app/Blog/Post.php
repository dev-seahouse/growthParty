<?php

namespace App\Blog;

use TCG\Voyager\Models\Post as Model;

class Post extends Model
{
  public function getRouteKeyName()
  {
    return "slug";
  }
}
