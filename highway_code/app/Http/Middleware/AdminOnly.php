<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminOnly 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  \String  $authAdmin
     * @return mixed
     */
    public function handle(Request $request, Closure $next, String $authAdmin)
    {
        if(! $authAdmin='Admin' &&auth()->user()->userType($authAdmin) ){
            abort(code403);
        }
        return $next($request);
    }
    
}
