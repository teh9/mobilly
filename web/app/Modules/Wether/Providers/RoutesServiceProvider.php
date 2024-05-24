<?php

namespace App\Modules\Wether\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Route;

class RoutesServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes( function () {
            RateLimiter::for('api', function (Request $request) {
                return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
            });

            Route::prefix('api')->group( function() {
                Route::get('stations', [\App\Modules\Wether\Http\Controllers\StationsController::class, 'index']);
                Route::get('stations/{id}', [\App\Modules\Wether\Http\Controllers\StationsController::class, 'show']);
            });
        });
    }
}
