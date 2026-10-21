<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * The live host must answer on one URL. http:// and www. both 301 to
 * https://dubaifotographer.com so crawlers do not index a second copy of every page.
 * Local hosts (localhost, 127.0.0.1) are left alone.
 */
class ForceHttps
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        if (! preg_match('/^(www\.)?dubaifotographer\.com$/i', $host)) {
            return $next($request);
        }

        $path = $request->getPathInfo();
        if (
            $path !== '/'
            && ! str_ends_with($path, '/')
            && ! preg_match('/\.[A-Za-z0-9]{1,5}$/', $path)
            && $path !== '/up'
        ) {
            $path .= '/';
        }
        $query = $request->getQueryString();
        $target = 'https://dubaifotographer.com'.$path.($query ? '?'.$query : '');

        if ($request->secure() && strcasecmp($host, 'dubaifotographer.com') === 0 && $target === 'https://dubaifotographer.com'.$request->getRequestUri()) {
            return $next($request);
        }

        return redirect()->away($target, 301);
    }
}
