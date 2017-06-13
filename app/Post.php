<?php

namespace App;

use TCG\Voyager\Models\Post as Model;
use TCG\Voyager\Models\User as User;

class Post extends Model
{
  
  public function getRouteKeyName()
  {
    return "slug";
  }
  
  public function author()
  {
    // retrieve user object
    return $this->authorId();
  }
  public function getEstimatedRead()
  {
    $postContent = $this->body;
  }
}
