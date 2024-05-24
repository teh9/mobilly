<?php

namespace App\Modules\Wether\Middleware;

use Closure;
use Illuminate\Http\Request;

class WetherApiBearerMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        $apiKey = $request->header('Authorization');

        if ($apiKey !== 'Bearer ' . env('API_KEY')) {
            return response()->json(['status' => false, 'message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
