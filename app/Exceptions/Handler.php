<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\Debug\Exception\FlattenException;

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
    // Render full exception details in debug mode
    if (config('app.debug'))
    {
      return parent::render($request, $exception);
    }

    if ($exception instanceof TokenMismatchException) {
      if ($request->ajax())
      {
        return response('Token Mismatch Exception', 401);
      }
      return redirect()->route('welcome');
    }

    // model not found exception
    if ($exception instanceof ModelNotFoundException)
    {
      // ajax 404 json feedback
      if ($request->ajax()) {
        return response()->json(['error' => 'Not Found'], 404);
      }
      // return 404 page
      return response()->view('errors.404',[],404);
    }

    //http exception
    if ($this->isHttpException($exception))
    {
      if (!\Auth::check())
      {
        return redirect()->route('welcome');
      }

      $exception = FlattenException::create($exception);
      $statusCode =$exception->getStatusCode($exception);

      if (in_array($statusCode, array(403,404,500,503))){
        return response()->view('app.errors.' . $statusCode, [], $statusCode);
      }
    }
    return parent::render($request, $exception);
  }

  /**
   * Convert an authentication exception into an unauthenticated response.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Illuminate\Auth\AuthenticationException $exception
   * @return \Illuminate\Http\Response
   */
  protected function unauthenticated($request, AuthenticationException $exception)
  {
    if ($request->expectsJson()) {
      return response()->json(['error' => 'Unauthenticated.'], 401);
    }

    return redirect()->guest(route('login'));
  }
}
