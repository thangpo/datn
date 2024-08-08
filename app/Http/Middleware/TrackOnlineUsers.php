<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;

class TrackOnlineUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()) {
            $expiresAt = now()->addMinutes(5);
            Redis::set('user-online-' . $request->user()->id, true);
            Redis::expire('user-online-' . $request->user()->id, $expiresAt->diffInSeconds());
        }

        return $next($request);
    }
}