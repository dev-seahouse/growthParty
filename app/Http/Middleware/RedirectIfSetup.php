<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfSetup
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
    if (\Auth::user()->is_setup) {
      return redirect('/dashboard');
    }
    return $next($request);
  }
}
