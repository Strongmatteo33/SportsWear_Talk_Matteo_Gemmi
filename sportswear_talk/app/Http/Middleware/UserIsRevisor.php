<?php

namespace App\Http\Middleware;

use Closure;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserIsRevisor
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->is_revisor){
            return $next($request);
        }

        return redirect(route('homepage'))->with('message', 'Non sei autorizzato');
    }
}
