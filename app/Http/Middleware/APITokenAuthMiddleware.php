<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class APITokenAuthMiddleware
{
    public function handle($request, Closure $next):mixed
    {
        $authorizationHeader = $request->header('Authorization');

        if (!$authorizationHeader || !str_starts_with($authorizationHeader, 'Bearer ')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $apiKey = substr($authorizationHeader, 7); // Remove 'Bearer ' prefix (7 characters)

        // Validate $apiKey against the expected token (e.g., from env)
        if ($apiKey !== env('API_TOKEN')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);

    }
}
