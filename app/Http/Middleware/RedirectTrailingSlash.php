<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * The live WordPress site served every page with a trailing slash ("/about-us/")
 * and that is what the canonicals and sitemaps use, so "/about-us" is sent there.
 * Paths that end in a file extension (sitemaps, images, robots.txt) are left alone.
 */
class RedirectTrailingSlash
{
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->getPathInfo();

        if (
            ($request->isMethod('GET') || $request->isMethod('HEAD'))
            && $path !== '/'
            && ! str_ends_with($path, '/')
            && ! preg_match('/\.[A-Za-z0-9]{1,5}$/', $path)
            && $path !== '/up'
        ) {
            $query = $request->getQueryString();

            return redirect()->away($request->getSchemeAndHttpHost().$request->getBaseUrl().$path.'/'.($query ? '?'.$query : ''), 301);
        }

        return $next($request);
    }
}
