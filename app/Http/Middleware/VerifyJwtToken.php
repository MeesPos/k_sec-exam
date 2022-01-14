<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;
use Tymon\JWTAuth;
use Tymon\JWTAuth\Exceptions\UserNotDefinedException;

class VerifyJwtToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = $request->only('token');

            if (! $token = \JWTAuth::parseToken()) {
                return response()->json(['error' => 'error']);
            }
        } catch (Exception $e) {
            if ($e instanceof JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['error' => $e->getMessage()]);
            } else if ($e instanceof JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['error' => $e->getMessage()]);
            } else if ($e instanceof JWTAuth\Exceptions\JWTException) {
                return response()->json(['error' => $e->getMessage()]);
            } else {
                return response()->json(['error' => $e->getMessage()]);
            }
        }

        $request->request->add(['token' => $token]);

        return $next($request);
    }
}
