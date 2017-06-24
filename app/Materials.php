<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    public function programMaterials()
    {
        return $this->belongsTo('App\Program');
    }
}
