<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){  
        if(!session('usuario'))
            return redirect()->route('paciente.login')
                ->with('erro','login expirado');
        return $next($request);
    }
}
