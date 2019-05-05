<?php

namespace App\Http\Middleware;

use Closure;

class CheckChoice
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
        if (strpos($request->route()->getPrefix(), 'admin') !== false) {
            return $next($request);
        }

        if (empty($roleCookie = $request->cookie('role')) && !$request->route()->named('role.choice')) {
            return redirect()->route('role.choice');
        }

        if ($roleCookie && $request->route()->named('role.choice')) {
            return redirect()->route('main.index');
        }

        return $next($request);
    }
}
