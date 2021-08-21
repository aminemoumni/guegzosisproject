<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class setLanguage
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
        // die('amine');
        if($request->language == 'en' || $request->language == 'fr') {
            App::setLocale($request->language);
            return $next($request);
        }

        \abort(404);
    }
}
