<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('access_token')) {
            $token = $request->input('access_token');
            $accessToken = \App\Models\AccessToken::where('token', $token)->first();

            if (!$accessToken || $accessToken->expires_at < now()) {
                session()->remove('access');
                return $next($request);
            }

            session(['access' => $accessToken->toArray()]);
            session()->flash('message', 'Access level: '.(session('access')['level'] ?? 'none'));
        }
        return $next($request);
    }
}
