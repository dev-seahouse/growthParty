<?php

namespace App;

use App\Programs\Program;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Conversation
 *
 * @property int $id
 * @property string|null $message
 * @property int $user_id
 * @property int $program_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Programs\Program $program
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereUserId($value)
 * @mixin \Eloquent
 */
class Conversation extends Model
{
  protected $fillable = ['message', 'user_id', 'program_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function program()
  {
    return $this->belongsTo(Program::class);
  }

  public function getUpdatedAtAttribute($value)
  {
    $time = Carbon::parse($value);
    return $time->toDayDateTimeString();
  }
}
