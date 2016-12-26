<?php

namespace App\Http\Middleware;

use Closure;

class ColleagueBirthday
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $date, $age)
    {
        if ($date == '2016-01-01') {
            return redirect()->route('cbday', array($age));
        }

        return $next($request);
    }
}
