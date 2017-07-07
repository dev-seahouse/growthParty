<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Occupation
 *
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Occupation extends Model
{
  public function user()
  {
    return $this->hasMany(User::class);
  }

}
