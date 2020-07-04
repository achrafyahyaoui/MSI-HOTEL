<?php

namespace App\Http\Middleware;

use auth;
use Closure;

class admin
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
        if(Auth::check() && Auth::user()->role_id == 1)
                return redirect('/admin/home');
        
                return $next($request);
    }
}
