<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()){
            $userRoles = Auth::user()->roles->pluck('name');
            if (!$userRoles->contains('admin')) {
                return redirect(route('loginadmin'))->with('error', 'you dont have permission');
            }
            return $next($request);
        }
        else
            return redirect(route('loginadmin'))->with('error', 'you need to login');

    }
}
