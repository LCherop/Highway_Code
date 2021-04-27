<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

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
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()){
            if(Auth::user()->userType='Police Officer'){
                return $next($request);
            }
            return redirect('dashboard');
        }
        return redirect('/');
    
        
    }
    
}
