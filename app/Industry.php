<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Industry
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Industry extends Model
{

}
