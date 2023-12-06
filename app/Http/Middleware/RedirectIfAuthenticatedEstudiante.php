<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedEstudiante
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('estudiante')->check()) {
            return redirect('ruta-estudiante');
        }

        return $next($request);
    }
}
