<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    public function programs()
    {
        return $this->hasMany('App\Program');
    }
}
