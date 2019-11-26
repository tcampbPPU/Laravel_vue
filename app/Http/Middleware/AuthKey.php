<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Closure;

class AuthKey
{

    public function handle($request, Closure $next) {
        $token = $request->header('APP_KEY');
        if ($token != 'ABC123') {
            return response()->json(['message' => 'Cannot Perform Request, App Key Not Found.'], 401);
        }
        return $next($request);
    }
}
