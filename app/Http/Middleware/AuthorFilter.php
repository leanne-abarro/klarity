<?php

namespace App\Http\Middleware;

use Closure;

class AuthorFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        // checks if logged in user is an author
        if (\Auth::user() -> role == 0){

            // if no, kick them out
            if ($request -> ajax()){
                return response('Unauthorized', 401);
            } else {
                return redirect() -> guest('login');
            }
        }
        return $next($request);
    }
}
