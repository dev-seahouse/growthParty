<?php

namespace App\Exceptions;

use Exception;
use GrahamCampbell\Exceptions\NewExceptionHandler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;


class Handler extends ExceptionHandler
{
  /**
   * A list of the exception types that should not be reported.
   *
   * @var array
   */
  protected $dontReport = [
    \Illuminate\Auth\AuthenticationException::class,
    \Illuminate\Auth\Access\AuthorizationException::class,
    \Symfony\Component\HttpKernel\Exception\HttpException::class,
    \Illuminate\Database\Eloquent\ModelNotFoundException::class,
    \Illuminate\Session\TokenMismatchException::class,
    \Illuminate\Validation\ValidationException::class,
  ];

  /**
   * Report or log an exception.
   *
   * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
   *
   * @param  \Exception $exception
   * @return void
   */
  public function report(Exception $exception)
  {
    parent::report($exception);
  }

  /**
   * Render an exception into an HTTP response.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Exception $exception
   * @return \Illuminate\Http\Response
   */
  public function render($request, Exception $exception)
  {
    if ($exception instanceof AuthenticationException) {
      return $this->unauthenticated($request, $exception);
    }

    if ($exception instanceof ProfilePicUploadException) {
      return $this->standardException($exception);
    }

    if ($exception instanceof InvalidOTPException) {
      return $this->standardException($exception);
    }
    return parent::render($request, $exception);
  }

  /**
   * Convert an authentication exception into an unauthenticated response.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  AuthenticationException $exception
   * @return \Illuminate\Http\Response
   */
  protected function unauthenticated($request, AuthenticationException $exception)
  {
    if ($request->expectsJson()) {
      return response()->json(['error' => 'Unauthenticated.'], 401);
    }

    return redirect()->guest(route('welcome'));
  }

  /**
   * @param Exception $exception
   * @return \Illuminate\Http\JsonResponse
   */
  protected function standardException(Exception $exception)
  {
    return response()->json([
      'error'   => true,
      'message' => $exception->getMessage(),
      'code'    => $exception->getCode()
    ], $exception->getCode());
  }
}
