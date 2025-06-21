<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::user()->isAdmin == 1) {
            return $next($request);

        }else{
            return abort(403);
        }
        
    }
}