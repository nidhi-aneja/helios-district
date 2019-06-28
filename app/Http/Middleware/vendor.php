<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class vendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if(!Auth::check()) {
            return redirect()->to('/login'); 
        }
        if(Auth::user()->role=='vendor')
        return $next($request);
     
    }
}
