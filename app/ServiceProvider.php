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
 */
class ServiceProvider extends Model
{
  public function programs()
  {
    return $this->hasMany(Programs\Program::class);
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

}
