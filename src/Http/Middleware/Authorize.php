<?php

namespace diimolabs\ProfileTool\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use diimolabs\ProfileTool\ProfileTool;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    public function handle(Request $request, Closure $next): Response
    {
        return app(ProfileTool::class)->authorize($request)
            ? $next($request)
            : abort(403);
    }
}
