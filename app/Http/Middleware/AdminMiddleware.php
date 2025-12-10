<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ambil user dari request (null jika belum login)
        $user = $request->user();

        // jika belum login -> redirect ke login
        if (! $user) {
            return redirect()->route('login');
        }

        // jika bukan admin -> abort 403
        if (! isset($user->role) || $user->role !== 'admin') {
            abort(403, 'Unauthorized access.');
        }

        // lanjutkan request
        return $next($request);
    }
}
