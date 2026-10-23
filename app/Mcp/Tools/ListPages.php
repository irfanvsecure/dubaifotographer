<?php

namespace App\Mcp\Tools;

use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('List the site pages (not blog posts): id, slug, URL, title, status and template. Filter by status or search the title/slug.')]
class ListPages extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'status' => 'nullable|in:published,draft,all',
            'search' => 'nullable|string|max:100',
            'limit' => 'nullable|integer|min:1|max:200',
            'offset' => 'nullable|integer|min:0',
        ]);
        $query = Page::query()
            ->when(($data['status'] ?? 'all') !== 'all', fn ($q) => $q->where('status', $data['status']))
            ->when($data['search'] ?? null, fn ($q, $s) => $q->where(fn ($q) => $q->where('title', 'like', "%$s%")->orWhere('slug', 'like', "%$s%")))
            ->orderBy('sort_order');
        $total = (clone $query)->count();
        $pages = $query->skip($data['offset'] ?? 0)->take($data['limit'] ?? 100)->get();

        return $this->json(['total' => $total, 'pages' => $pages->map(fn ($p) => $this->pageArray($p))->all()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'status' => $schema->string()->enum(['published', 'draft', 'all'])->description('Default: all'),
            'search' => $schema->string()->description('Text to find in the title or slug'),
            'limit' => $schema->integer()->description('Max rows (default 100, max 200)'),
            'offset' => $schema->integer()->description('Rows to skip, for paging'),
        ];
    }
}
