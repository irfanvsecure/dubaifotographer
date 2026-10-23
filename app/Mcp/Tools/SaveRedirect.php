<?php

namespace App\Mcp\Tools;

use App\Models\Redirect;
use App\Support\SiteRenderer;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Create or change a redirect: from_path (old URL path on this site) → to_url (a path like "/new-page/" or a full URL). 301 = moved for good (default), 302 = temporary. A redirect only applies when no published page or post exists at from_path.')]
class SaveRedirect extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'from_path' => 'required|string|max:190',
            'to_url' => 'required|string|max:255',
            'status_code' => 'nullable|in:301,302',
            'is_active' => 'nullable|boolean',
        ]);
        $from = Redirect::normalize($data['from_path']);
        $to = str_replace('%%BASE%%', '', $this->placeholders($data['to_url']));
        if (! str_starts_with($to, '/') && ! filter_var($to, FILTER_VALIDATE_URL)) {
            return Response::error('to_url must be a path starting with "/" or a full URL.');
        }
        if (rtrim($to, '/') === rtrim($from, '/')) {
            return Response::error('A redirect cannot point to itself.');
        }
        if (SiteRenderer::find($from)) {
            return Response::error("A published page or post lives at $from, so this redirect would never be used. Unpublish or move that page first.");
        }

        $redirect = Redirect::query()->firstOrNew(['from_path' => $from]);
        $old = $redirect->exists ? $redirect->only(['to_url', 'status_code', 'is_active']) : null;
        $redirect->fill(['to_url' => $to, 'status_code' => (int) ($data['status_code'] ?? 301), 'is_active' => $data['is_active'] ?? true])->save();
        // no chains: redirects that pointed to from_path now go straight to the target
        $chained = Redirect::query()->whereIn('to_url', [$from, $from.'/'])->whereKeyNot($redirect->id)->update(['to_url' => $to]);
        $this->log('redirect', $redirect->id, $old, $redirect->only(['from_path', 'to_url', 'status_code', 'is_active']));

        return $this->json(['saved' => $redirect->toArray(), 'chains_shortened' => $chained]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'from_path' => $schema->string()->required()->description('Old path, e.g. "/old-services-page/"'),
            'to_url' => $schema->string()->required()->description('New path ("/services/") or full URL'),
            'status_code' => $schema->integer()->enum([301, 302])->description('Default 301'),
            'is_active' => $schema->boolean()->description('Default true'),
        ];
    }
}
