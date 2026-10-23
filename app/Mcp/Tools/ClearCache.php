<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Clear Laravel caches: view (compiled Blade), route, config, app (settings + inlined critical CSS). Default: view and app, which is what content or CSS changes need. Page content itself is never cached, so edits show at once.')]
class ClearCache extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'caches' => 'nullable|array',
            'caches.*' => 'in:view,route,config,app',
        ]);
        $caches = $data['caches'] ?? ['view', 'app'];
        $done = [];
        foreach ($caches as $cache) {
            match ($cache) {
                'view' => Artisan::call('view:clear'),
                'route' => Artisan::call('route:clear'),
                'config' => Artisan::call('config:clear'),
                'app' => Artisan::call('cache:clear'),
            };
            if ($cache === 'app') {
                File::delete(File::glob(storage_path('framework/cache/critical-*.css')));
            }
            $done[] = $cache;
        }
        $this->log('cache', null, null, ['cleared' => $done]);

        return $this->json(['cleared' => $done, 'note' => in_array('config', $done) || in_array('route', $done) ? 'On the live server, run php artisan config:cache / route:cache again afterwards for speed.' : null]);
    }

    public function schema(JsonSchema $schema): array
    {
        return ['caches' => $schema->array()->items($schema->string()->enum(['view', 'route', 'config', 'app']))->description('Default ["view", "app"]')];
    }
}
