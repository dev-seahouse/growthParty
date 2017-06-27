<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Material
 *
 * @property-read \App\Program $program
 * @mixin \Eloquent
 */
class Material extends Model
{
    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
