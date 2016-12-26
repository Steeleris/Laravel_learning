<?php

namespace App\Http\Middleware;

use Closure;

class Birthday
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $date, $age = null)
    {
        if ($date == '2016-06-12') {
            return redirect()->route('bday', array($age));
        }

        return $next($request);
    }
}
