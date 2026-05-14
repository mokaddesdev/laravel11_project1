<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Response;

class LanguageMiddleware
{
    public function handle($request, Closure $next): Response
    {
        if ($request->session()->has('locale')) {
            App::setLocale($request->session()->get('locale', 'en'));
        }
        return $next($request);
    }
}
