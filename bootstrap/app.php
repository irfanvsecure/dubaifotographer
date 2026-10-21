<?php

use App\Http\Middleware\ForceHttps;
use App\Http\Middleware\RedirectTrailingSlash;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->prepend(RedirectTrailingSlash::class);
        // Prepend runs first, so HTTPS/www is one hop before the trailing-slash redirect.
        $middleware->prepend(ForceHttps::class);
        // hosting/CDN proxies (LiteSpeed, Cloudflare) end HTTPS before PHP; trust their headers
        // so canonicals, sitemaps and links are built with https://
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
