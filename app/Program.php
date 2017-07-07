<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Program
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Material[] $programMaterial
 * @property-read \App\ServiceProvider $serviceProvider
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @mixin \Eloquent
 */
class Program extends Model
{
  protected $casts = [
    'matching_requirements' => 'array',
  ];

  public function serviceProvider()
  {
    return $this->belongsTo('App\ServiceProvider');
  }

  public function programMaterial()
  {
    return $this->hasMany('App\Material');
  }

  public function users()
  {
    return $this->belongsToMany('App\User');
  }


  public static function findByName($name)
  {
    return self::where('name', $name)->firstOrFail();
  }

  public static function getIdByName($name)
  {
    return self::findByName($name)->id;
  }

  public function scopeMatchedPrograms($query, $occupation)
  {
    return $query->whereRaw('json_contains(JSON_UNQUOTE(matching_requirements),json_quote(?))',$occupation);
  }
}
