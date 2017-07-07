<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string|null $name
 * @property string $email
 * @property string|null $avatar
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $last_login
 * @property string|null $dob for verification
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $last_login_ip
 * @property string|null $registered_ip
 * @property int $is_activated
 * @property string $mobile
 * @property int $is_setup
 * @property string|null $occupation
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Programs\Program[] $programs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsSetup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRegisteredIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
    return self::storageFolderUrl . $this->id . '/';
  }

  public function occupation()
  {
    return $this->belongsTo(Occupation::class);
  }

  public function programs()
  {
    return $this->belongsToMany('App\Programs\Program');
  }
}
