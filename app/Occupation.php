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
 * @property string $name
 * @property int $industry_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereName($value)
 */
class Occupation extends Model
{
  public function user()
  {
    return $this->hasMany(User::class);
  }

}
