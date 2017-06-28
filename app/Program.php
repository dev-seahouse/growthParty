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


    public function isAssigned()
    {
      return true;
    }
}
