<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->check() && ! $request->is('login')) {
            return redirect('/login');
        }

        $role_page = [
            'admin' => 'administrator',
            'doctor' => 'personal',
        ];

        foreach ($role_page as $role => $page) {
            if (auth()->check()
                && ! str_starts_with($request->getPathInfo(), "/$page")
                && auth()->user()?->hasRole($role)
            ) {
                return redirect("/$page");
            }
        }

        abort_if(auth()->check() && ! auth()->user()?->roles()->exists(), 403);

        return $next($request);
    }
}