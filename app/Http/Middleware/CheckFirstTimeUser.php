<?php

namespace App\Http\Middleware;

use Closure;

class CheckFirstTimeUser
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    $user = Auth::user();
    if (!$user->is_setup) {
      return redirect('/setup');
    }
    return $next($request);
  }
}
