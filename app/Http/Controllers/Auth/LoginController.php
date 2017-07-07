<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  const MOBILE = "mobile";
  const EMAIL = "email";
  use AuthenticatesUsers;

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/dashboard';

  /**
   * What is the name attribute for id?
   * @var string
   */
  protected $nameAttributeOfId = "loginId";

  /**
   * User is using email or mobile number to login?
   * @var string
   */
  protected $idType = self::EMAIL;

  public function login(Request $request)
  {
    $this->setIdType($request);

    $this->replaceRequestField($request);

    $this->validateLogin($request);

    if ($this->hasTooManyLoginAttempts($request)) {
      $this->fireLockoutEvent($request);

      return $this->sendLockoutResponse($request);
    }

    if ($this->attemptLogin($request)) {
      return $this->sendLoginResponse($request);
    }

    $this->incrementLoginAttempts($request);

    return $this->sendFailedLoginResponse($request);

  }

  /**
   * is user using email or mobile?
   * @param Request $request
   */
  protected function setIdType(Request $request)
  {
    if ($this->requestIsNumber($request)) {
      $this->idType = self::MOBILE;
    } else if ($this->requestIsEmail($request)) {
      $this->idType = self::EMAIL;
    }
  }

  /**
   * @param Request $request
   * @return bool
   */
  protected function requestIsNumber(Request $request)
  {
    return is_numeric($request->input($this->nameAttributeOfId));
  }

  /**
   * @param Request $request
   * @return mixed
   */
  protected function requestIsEmail(Request $request)
  {
    return filter_var($request->input($this->nameAttributeOfId), FILTER_VALIDATE_EMAIL);
  }

  /**
   * this is a hack. database expects either email or mobile,
   * but we are giving it loginId => "email@address.com" instead of
   * mail => "email@address.com", so we change request['loginId'] to
   * either request['email'] or request['mobile']
   * @param Request $request
   */
  protected function replaceRequestField(Request $request)
  {
    $request->merge([$this->idType => $request->input($this->nameAttributeOfId)]);
  }

  protected function validateLogin(Request $request)
  {
    $messages = [
      'password.required' => 'did you forget to enter password?',
      'password.min'      => 'please choose a password with more than 6 characters',
      'email.required'    => 'did you forget to enter login id?',
      'mobile.required'   => 'did you forget to enter login id',
      'mobile.digits'     => 'please enter a valid mobile number',
      'mobile.numeric'    => 'please enter a valid mobile number',
      'mobile.regex'      => 'please enter a valid mobile number',
      'email.email'       => 'please enter a valid email address'
    ];
    $rules = $this->prepareValidationRules($request);
    $this->validate($request, $rules);
  }

  /**
   * Attention: remember to modify rules in registerController
   */
  protected function prepareValidationRules(Request $request)
  {
    $rules = ['password' => 'required|string|min:6'];

    if ($this->idType == self::EMAIL) {
      $rules = array_add($rules, self::EMAIL, 'required|string|email|max:255');
    } elseif ($this->idType == self::MOBILE) {
      $rules = array_add($rules, self::MOBILE, array('required', 'regex:/^[89]\d{7}$/'));
    }
    return $rules;
  }

  protected function sendLoginResponse(Request $request)
  {
    $request->session()->regenerate();

    $this->clearLoginAttempts($request);

    return response()->json(['SUCCESS' => 'AUTHENTICATED'], 200);
  }

  protected function sendFailedLoginResponse(Request $request)
  {
    $errors = [$this->username() => trans('auth.failed')];
    if ($request->expectsJson()) {
      return response()->json($errors, 422);
    }

    return redirect()->back()
      ->withInput($request->only($this->nameAttributeOfId, 'remember'))
      ->withErrors($errors);
  }

  public function username()
  {
    return $this->idType;
  }

}
