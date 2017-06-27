<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
