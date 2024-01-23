<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
   public function handle(Request $request, Closure $next, $role)
   {
      if (!Auth::check()) //If the user is not logged in redirect to login
      {
         return redirect('/login');
      }

      $user = Auth::user();

      if($user->hasRole()) //Check if user is admin
      {
          return $next($request); //If user is admin, allow them to access the page
      }
      return redirect('/'); //If user does not have the required role redirect to home page
   }
}
