<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ThrottleGuestByIp
{
    protected $maxAttempts = 60; // 60 requests
    protected $decaySeconds = 60; // por minuto

    public function handle($request, Closure $next)
    {
        // Solo para usuarios NO logueados
        if (Auth::check()) {
            return $next($request);
        }

        $ip  = $request->ip();
        $key = $this->cacheKey($ip);

        $now  = time();
        $data = Cache::get($key);

        if (!$data) {
            $data = [
                'count' => 0,
                'start' => $now,
            ];
        }

        $elapsed = $now - (int) $data['start'];

        // Si pasó la ventana de tiempo, reset
        if ($elapsed >= $this->decaySeconds) {
            $data = [
                'count' => 0,
                'start' => $now,
            ];
            $elapsed = 0;
        }

        $data['count']++;

        // Tiempo restante para expirar
        $ttlSeconds = max(1, $this->decaySeconds - $elapsed);

        // Cache::put usa MINUTOS en Laravel 5.1
        Cache::put($key, $data, (int) ceil($ttlSeconds / 60));

        if ($data['count'] > $this->maxAttempts) {

            Log::warning("⛔ ThrottleGuestByIp: IP $ip excedió el límite de $this->maxAttempts solicitudes en $this->decaySeconds segundos.");
            return response('Too Many Requests', 429, [
                'Retry-After' => $ttlSeconds,
            ]);
        }

        return $next($request);
    }

    protected function cacheKey($ip)
    {
        return 'throttle:guest:ip:' . sha1($ip);
    }
}
