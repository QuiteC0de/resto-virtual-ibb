<?php

namespace App\Http\Middleware;
use App\Http\Middleware\Auth;

use Closure;

class Admincek
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
        if (auth()->user()->role == "admin" || "owner") {
            return $next($request);
        }else{
            return abort(403);
        }
    }
}
