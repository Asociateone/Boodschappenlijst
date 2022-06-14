<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserBelongsToPage
{
    public function handle(Request $request, Closure $next): JsonResponse
    {
        preg_match('/(user)\/([1-9]+)\/*/', $request->path(), $matches);

        abort_if(Auth::user()->id != $matches[2], 403);

        return $next($request);
    }
}
