<?php

namespace App\Mcp\Tools;

use App\Models\SectionRevision;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('History of a page\'s sections, newest first: each revision is the content a section had before a change (update, delete, reorder, restore). Pass a key for one section; full: true includes the stored content. restore_section_revision puts a revision back.')]
class ListSectionRevisions extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'slug' => 'nullable|string',
            'key' => 'nullable|string',
            'full' => 'nullable|boolean',
            'limit' => 'nullable|integer|min:1|max:100',
        ]);
        $page = $this->page($request);
        $revisions = SectionRevision::query()->where('page_id', $page->id)
            ->when($request->get('key'), fn ($q, $key) => $q->where('section_key', $key))
            ->latest('id')->take($request->get('limit') ?? 20)->get();

        return $this->json([
            'page' => $this->pageRef($page),
            'revisions' => $revisions->map(fn (SectionRevision $r) => [
                'revision_id' => $r->id,
                'at' => $r->created_at?->toIso8601String(),
                'section' => $r->section_key,
                'type' => $r->type,
                'before' => $r->action,
                'position' => $r->position,
                'content' => ($request->get('full') ?? false)
                    ? $r->data
                    : ($r->data ? mb_substr(trim(strip_tags(json_encode($r->data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))), 0, 160).'…' : null),
            ])->all(),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'page_id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the page slug ("" = home page)'),
            'key' => $schema->string()->description('Only this section'),
            'full' => $schema->boolean()->description('Include the full stored content'),
            'limit' => $schema->integer()->description('Default 20'),
        ];
    }
}
