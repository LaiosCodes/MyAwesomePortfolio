<?php

namespace App\Http\Middleware;

use App\Enum\AccessLevelEnum;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectedAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $minLevel): Response
    {
        if (session('access') === null) {
            return redirect('/');
        }
        $access = session('access');
        if ($access['expires_at'] < now()) {
            session()->remove('access');
            return redirect('/');
        }
        if (!AccessLevelEnum::hasMinLevel($access['level'], AccessLevelEnum::fromString($minLevel))) {
            return redirect('/');
        }
        return $next($request);
    }
}
