<?php

namespace App\Http\Controllers\Auth;

use App\Communications\Otp;
use App\Exceptions\InvalidOTPException;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Debugbar;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Request;


class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  //protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  public function sendOtp(Otp $otp)
  {
    $number = \request()->input('mobile');
    $otp->send($number);
  }

  public function verifyOtp(Otp $otp)
  {
    $verificationCode = Request::input('');
  }

  /**
   * Attention: remember to modify rules defined in loginController
   * Get a validator for an incoming registration request.
   *
   * @param  array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'email'    => 'required|string|email|max:255|unique:users',
      'mobile'   => 'required|digits:8',
      'password' => 'required|string|min:6',
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array $data
   * @return User
   */
  protected function create(array $data)
  {
    return User::create([
      'email'    => $data['email'],
      'mobile'   => $data['mobile'],
      'password' => bcrypt($data['password']),
    ]);
  }

  /**
   * The user will be directed to setup view.
   */
  protected function registered($user)
  {
    return redirect()->route('setup');
  }


}
