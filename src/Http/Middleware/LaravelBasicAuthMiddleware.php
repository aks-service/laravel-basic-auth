<?php

namespace AksService\LaravelBasicAuth\Http\Middleware;

use Closure;

class LaravelBasicAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (! config('basic-auth.active')) {
            return $next($request);
        }

        $username = config('basic-auth.username');
        $password = config('basic_auth.password');

        if (
            $request->getUser() !== $username
            || $request->getPassword() !== $password
        ) {
            return response('Unauthorized.', 401, ['WWW-Authenticate' => 'Basic realm="Authorization"']);
        }

        return $next($request);
    }
}
