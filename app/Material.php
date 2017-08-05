<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Material
 *
 * @property-read \App\Programs\Program $program
 * @mixin \Eloquent
 * @property int $id
 * @property int $program_id
 * @property string $name
 * @property string $type
 * @property string $directory
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereUpdatedAt($value)
 */
class Material extends Model
{
  public function program()
  {
    return $this->belongsTo('App\Programs\Program');
  }
}
