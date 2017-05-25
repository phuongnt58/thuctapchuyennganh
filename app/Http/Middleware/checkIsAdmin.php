<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkIsAdmin
{
    /**
     * Handle an incoming request.
     * Check if user is admin. If not, system do not allow user to access link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->user_role != 1)
        {
            return redirect()->route('admin.home');
        }
        return $next($request);
    }
}
