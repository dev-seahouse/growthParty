<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
