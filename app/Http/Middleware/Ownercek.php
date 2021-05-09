<?php

namespace App\Http\Middleware;

use Closure;

class Ownercek
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
        if (auth()->user()->role == "owner") {
            return $next($request);
        }else{
            return abort(403);
        }
    }
}
