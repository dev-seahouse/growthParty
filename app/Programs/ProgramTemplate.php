<?php

namespace App\Programs;

use Illuminate\Database\Eloquent\Model;

class ProgramTemplate extends Model
{
  protected $casts = [
    'matching_requirements' => 'array',
  ];

  public function programs()
  {
    return $this->hasMany(Program::class);
  }

  public static function findByName($name)
  {
    return self::where('name', $name)->firstOrFail();
  }

}
