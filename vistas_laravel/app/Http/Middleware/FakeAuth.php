<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FakeAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('logged')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
