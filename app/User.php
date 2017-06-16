<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  const storageFolderUrl = "/users/";

  protected $fillable = [
    'email', 'password', 'mobile'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public static $profilePicFileName = "profilePic"; // filename of userUploaded profile picture
  public static $smallProfilePicFileName = "avatar"; // filename of avatar, which is smaller sized user profile pic

  public function getStoragePath()
  {
    return self::storageFolderUrl.$this->id.'/';
  }

}
