<?php

namespace App\Blog;

use TCG\Voyager\Models\Post as Model;
use TCG\Voyager\Models\User as User;

/**
 * App\Blog\Post
 *
 * @property int $id
 * @property int $author_id
 * @property int|null $category_id
 * @property string $title
 * @property string|null $seo_title
 * @property string $excerpt
 * @property string $body
 * @property string|null $image
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $status
 * @property int $featured
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TCG\Voyager\Models\User $authorId
 * @property-read \TCG\Voyager\Models\Category $category
 * @property-read mixed $estimated_read
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
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
