<?php

namespace App\Mcp\Tools;

use App\Models\Redirect;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('List URL redirects (old path → new URL, 301/302, active, hit count).')]
class ListRedirects extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['search' => 'nullable|string|max:150']);

        return $this->json(['redirects' => Redirect::query()
            ->when($data['search'] ?? null, fn ($q, $s) => $q->where(fn ($q) => $q->where('from_path', 'like', "%$s%")->orWhere('to_url', 'like', "%$s%")))
            ->orderBy('from_path')->get(['id', 'from_path', 'to_url', 'status_code', 'is_active', 'hits', 'updated_at'])->toArray()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return ['search' => $schema->string()];
    }
}
