<?php

namespace App\Http\Middleware;

use Closure;

class authenticate_user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Request::is('login') && !Auth::check() && !Auth::guard('api'))
      {
          return redirect("/login");
      }
        return $next($request);
    }
}
