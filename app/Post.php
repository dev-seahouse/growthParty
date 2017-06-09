<?php

namespace App;

use TCG\Voyager\Models\Post as Model;

class Post extends Model
{
  public function getRouteKeyName()
  {
    return "slug";
  }
}
