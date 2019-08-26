<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $token = $request->header('APP-KEY');
        if($token != 'ADNAN'){
            return response()->json(['message' => 'App key not found'], 401);
        }
        return $next($request);
    }
}
