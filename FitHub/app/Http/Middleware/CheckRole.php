<?php
namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;

class CheckRole{
    public function handle($request, Closure $next, $role){
        if(!auth()->check()){
            return redirect('/login');
        }
        if (!auth()->user()->hasRole($role)) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
