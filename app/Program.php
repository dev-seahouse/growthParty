<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

	public function serviceProvider()
    {
        return $this->belongsTo('App\ServiceProvider');
    }

    public function programMaterials()
    {
        return $this->hasMany('App\ProgramMaterial');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
