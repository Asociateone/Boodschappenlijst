<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserBelongsToPage
{
    public function handle(Request $request, Closure $next): RedirectResponse|JsonResponse
    {
        preg_match('/user\/([1-9]+).*/', $request->path(), $match);

        if ($match[1] != Auth::user()->id) {
            $url = str_replace($match[1], (string)Auth::user()->id, $match[0]);

            return redirect()->to($url);
        }

        return $next($request);
    }
}
