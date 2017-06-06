<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use DeepCopy\Filter\Filter;
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

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/home';

  /**
   * What is the name attribute of the id field?
   * @var string
   */
  protected $userIdFieldName = "loginId";

  /**
   * User is using email or mobile number to login?
   * @var string
   */
  protected $loginIdType = "email";

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

  public function username()
  {
    return $this->loginIdType;
  }

  protected function setIdType(Request $request)
  {
    if (is_numeric($request->input($this->userIdFieldName))) {
      $this->loginIdType = "mobile";
    } else if (filter_var($request->input($this->userIdFieldName), FILTER_VALIDATE_EMAIL)) {
      $this->loginIdType = "email";
    }
  }

  protected function sendLoginResponse(Request $request)
  {
    $request->session()->regenerate();

    $this->clearLoginAttempts($request);

    $this->authenticated($request, $this->guard()->user())
      ?: redirect()->intended($this->redirectPath());
    return response()->json(['SUCCESS' => 'AUTHENTICATED'], 200);
  }

  protected function sendFailedLoginResponse(Request $request)
  {
    $errors = [$this->username() => trans('auth.failed')];
    if ($request->expectsJson()) {
      return response()->json($errors,422);
    }

    return redirect()->back()
      ->withInput($request->only($this->username(), 'remember'))
      ->withErrors($errors);
  }
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  /**
   * @param Request $request
   */
  protected function replaceRequestField(Request $request)
  {
    $request->merge([$this->loginIdType => $request->input($this->userIdFieldName)]);
  }


}
