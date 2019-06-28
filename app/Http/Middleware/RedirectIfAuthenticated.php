<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        if(!Auth::check()) {
            return redirect()->to('/login'); 
        }
        if(Auth::user()->role=='user')
        return redirect()->to('/userdashboard');
        elseif(Auth::user()->role=='vendor')
        return redirect()->to('/vendorboard'); 
        elseif(Auth::user()->role=='admin')
        return redirect()->to('/admin/admin');
            else
        
        return $next($request);
    }
}
 