<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ServiceProvider
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Programs\Program[] $programs
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @property string|null $address
 * @property string|null $uen
 * @property string|null $website
 * @property string|null $email
 * @property string $industry_id
 * @property string|null $phone
 * @property string|null $source
 * @property string|null $description
 * @property-read \App\Rating $ratings
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereUen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereWebsite($value)
 * @mixin \Eloquent
 */
class ServiceProvider extends Model
{
  public function programs()
  {
    return $this->hasMany(Programs\Program::class);
  }

  public function ratings()
  {
    return $this->hasOne(Rating::class);
  }


  public function getCompanyLogoPath()
  {
    $fileTypeAllowed = '{jpg, png}';
    $publicStoragePath ='storage/serviceProviders/';
    $serviceProviderStoragePath = $publicStoragePath. $this->id .'/';

    $logoFile = glob($serviceProviderStoragePath.'logo'. '/' .$fileTypeAllowed, GLOB_BRACE);
    if (!$logoFile) {$logoFile = array($publicStoragePath. 'default.png');}
    return $logoFile[0];
  }

  public static function findByName($name)
  {
    return self::where('name', $name)->firstOrFail();
  }

}
