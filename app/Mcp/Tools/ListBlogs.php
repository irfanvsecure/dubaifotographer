<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('List blog posts, newest first: id, slug, URL, title, status, category and dates. Filter by status, category or search text.')]
class ListBlogs extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'status' => 'nullable|in:published,draft,all',
            'category_id' => 'nullable|integer',
            'search' => 'nullable|string|max:100',
            'limit' => 'nullable|integer|min:1|max:200',
            'offset' => 'nullable|integer|min:0',
        ]);
        $query = Blog::query()->with('category')
            ->when(($data['status'] ?? 'all') !== 'all', fn ($q) => $q->where('status', $data['status']))
            ->when($data['category_id'] ?? null, fn ($q, $id) => $q->where('category_id', $id))
            ->when($data['search'] ?? null, fn ($q, $s) => $q->where(fn ($q) => $q->where('title', 'like', "%$s%")->orWhere('slug', 'like', "%$s%")))
            ->orderByRaw('published_at is null desc')->orderByDesc('published_at')->orderByDesc('id');
        $total = (clone $query)->count();
        $blogs = $query->skip($data['offset'] ?? 0)->take($data['limit'] ?? 50)->get();

        return $this->json(['total' => $total, 'blogs' => $blogs->map(fn ($b) => $this->blogArray($b))->all()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'status' => $schema->string()->enum(['published', 'draft', 'all'])->description('Default: all'),
            'category_id' => $schema->integer(),
            'search' => $schema->string()->description('Text to find in the title or slug'),
            'limit' => $schema->integer()->description('Max rows (default 50, max 200)'),
            'offset' => $schema->integer(),
        ];
    }
}
