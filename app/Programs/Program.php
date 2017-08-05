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
 * @property int $id
 * @property int $service_provider_id
 * @property int $affiliate_count
 * @property int $program_template_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Programs\ProgramTemplate $programTemplate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program matchedPrograms($occupation)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereAffiliateCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereProgramTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereServiceProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereUpdatedAt($value)
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
