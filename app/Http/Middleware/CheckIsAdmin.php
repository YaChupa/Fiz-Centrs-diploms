<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       
        if(\Illuminate\Support\Facades\Auth::user()->user_status === 1){
            return $next($request); 
        }
        
       return redirect()->route('index');
    }
}
