<?php

namespace App\Programs;

use App\Material;
use App\ServiceProvider;
use App\User;
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

  public function serviceProvider()
  {
    return $this->belongsTo(ServiceProvider::class);
  }

  public function programMaterial()
  {
    return $this->hasMany(Material::class);
  }

  public function programTemplate()
  {
    return $this->belongsTo(ProgramTemplate::class);
  }

  public function users()
  {
    return $this->belongsToMany(User::class)->withTimestamps();
  }

  public function hasUser($user_id)
  {
    foreach ($this->users as $user) {
      if($user->id == $user_id) {
        return true;
      }
    }
  }

  public function programName()
  {
    return $this->programTemplate()->first()->name;
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
    return $query->join("program_templates", "programs.id", "program_templates.id")
      ->whereRaw('
    JSON_CONTAINS ( JSON_UNQUOTE ( matching_requirements ), JSON_QUOTE( ? ))', [$occupation])
      ->get();
  }
}
