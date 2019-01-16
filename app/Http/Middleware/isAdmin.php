<?php

namespace App\Http\Middleware;

use Closure;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        if (Auth::user()->role_id != 4) {
            Flash::error('Access denied!');
            return redirect ('/transactions');
        }
        return $next($request);
    }
}
