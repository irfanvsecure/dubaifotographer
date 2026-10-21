<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Send the public site to https://dubaifotographer.com before Laravel boots.
// Local hosts are left on http so the dev server keeps working.
$host = $_SERVER['HTTP_HOST'] ?? '';
if (preg_match('/^(www\.|mail\.)?dubaifotographer\.com(?::\d+)?$/i', $host)) {
    $forwarded = strtolower($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '');
    $secure = $forwarded === 'https'
        || strtolower($_SERVER['HTTP_X_FORWARDED_SSL'] ?? '') === 'on'
        || (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    $bare = preg_replace('/:\d+$/', '', $host);
    if (! $secure || strcasecmp($bare, 'dubaifotographer.com') !== 0) {
        if ($secure) {
            header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
        }
        header('Location: https://dubaifotographer.com'.($_SERVER['REQUEST_URI'] ?? '/'), true, 301);
        exit;
    }
}

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
