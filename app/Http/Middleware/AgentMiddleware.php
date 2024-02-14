<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AgentMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('agent')->check()) {
            return $next($request);
        }

        return redirect('/'); 
    }
}
