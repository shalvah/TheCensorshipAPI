<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlwaysRespondWithJson
{
    public function handle(Request $request, Closure $next)
    {
        $request = $request->duplicate(null, null, null, null, null, ['HTTP_ACCEPT' => 'application/json']);

        return $next($request);
    }
}
