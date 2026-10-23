<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Read one blog post: body HTML, excerpt, featured image, category, tags, layout, SEO and its current `version`. Call this before update_blog and pass the version back.')]
class GetBlog extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'slug' => 'nullable|string',
        ]);
        if (! isset($data['id']) && ! array_key_exists('slug', $data)) {
            return Response::error('Give id or slug.');
        }
        $blog = Blog::query()->with(['seo', 'category', 'tags'])
            ->when(isset($data['id']), fn ($q) => $q->whereKey($data['id']), fn ($q) => $q->where('slug', trim((string) ($data['slug'] ?? ''), '/')))
            ->first();

        return $blog ? $this->json($this->blogArray($blog, true)) : Response::error('Blog post not found.');
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the URL slug, e.g. "brief-your-event-photographer-uae"'),
        ];
    }
}
