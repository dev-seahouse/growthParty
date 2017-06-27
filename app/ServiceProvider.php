<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ServiceProvider
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Program[] $programs
 * @mixin \Eloquent
 */
class ServiceProvider extends Model
{
    public function programs()
    {
        return $this->hasMany('App\Program');
    }
}
