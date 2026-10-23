<?php

namespace App\Mcp\Tools;

use App\Models\ActivityLog;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Recent changes made through MCP (newest first): tool, item, old and new values. Filter by entity (page, blog, seo, media, redirect, settings, category) and id.')]
class ActivityLogTool extends SiteTool
{
    public function name(): string
    {
        return 'activity_log';
    }

    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'entity' => 'nullable|string|max:50',
            'entity_id' => 'nullable|integer',
            'limit' => 'nullable|integer|min:1|max:200',
        ]);

        return $this->json(['entries' => ActivityLog::query()
            ->when($data['entity'] ?? null, fn ($q, $e) => $q->where('entity', $e))
            ->when($data['entity_id'] ?? null, fn ($q, $id) => $q->where('entity_id', $id))
            ->latest('id')->take($data['limit'] ?? 30)->get()
            ->map(fn (ActivityLog $log) => [
                'id' => $log->id,
                'at' => $log->created_at?->toIso8601String(),
                'tool' => $log->tool,
                'entity' => $log->entity,
                'entity_id' => $log->entity_id,
                'old' => json_decode((string) $log->old_value, true),
                'new' => json_decode((string) $log->new_value, true),
            ])->all()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'entity' => $schema->string(),
            'entity_id' => $schema->integer(),
            'limit' => $schema->integer()->description('Default 30'),
        ];
    }
}
