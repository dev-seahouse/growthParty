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

  public function getEstimatedReadAttribute()
  {
    $postContent = $this->body;
    $word = str_word_count(strip_tags($postContent));
    $m = floor($word / 190);
    $s = floor($word % 190 / (190 / 60));
    if ($m == 0){
      $est = $s . ' second'. ($s==1 ? '' : 's');
    }else {
      $est = $m . ' minute'.($m == 1 ? '':'s');
    }
    return $est;
  }
}
