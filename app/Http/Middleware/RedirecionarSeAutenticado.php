<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirecionarSeAutenticado
{
  public function handle(Request $request, Closure $next, string $guard = null): Response
  {
    if (Auth::guard($guard)->check()) {
      return redirect()->intended('/');
    }

    return $next($request);
  }
}
