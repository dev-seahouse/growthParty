<?php

namespace App\Programs;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Programs\ProgramTemplate
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property array $matching_requirements
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Programs\Program[] $programs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereMatchingRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
