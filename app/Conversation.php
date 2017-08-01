<?php

namespace App;

use App\Programs\Program;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  protected $fillable = ['message', 'user_id', 'group_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function program()
  {
    return $this->belongsTo(Program::class);
  }
    //
}
