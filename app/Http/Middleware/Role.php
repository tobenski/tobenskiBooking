<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Access\AuthorizationException;

class Role
{
    public function handle($request, \Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);

        if (! $request->user()->hasAnyRole($roles)) {
            throw new AuthorizationException("You don't have the required role to access this resource.");
        }

        return $next($request);
    }
}
