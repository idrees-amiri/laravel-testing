<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        # shahzaib r u understandsing what is programming logic condition , flow 

        if($request->age < 18) {
            // return redirect('home');
            return redirect('home');
        }
        return $next($request);
    }
}
