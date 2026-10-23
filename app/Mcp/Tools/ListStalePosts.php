<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Published blog posts not updated for a while (default 180 days), oldest first: candidates for a refresh (new facts, prices, internal links, a newer year in the title).')]
class ListStalePosts extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['days' => 'nullable|integer|min:7|max:3650']);
        $days = $data['days'] ?? 180;

        $posts = Blog::query()->with('category')->where('status', 'published')
            ->where('updated_at', '<', now()->subDays($days))
            ->orderBy('updated_at')->get();

        return $this->json([
            'days' => $days,
            'count' => $posts->count(),
            'posts' => $posts->map(fn (Blog $b) => $this->blogArray($b) + ['days_since_update' => (int) $b->updated_at->diffInDays(now())])->all(),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return ['days' => $schema->integer()->description('Not updated for at least this many days (default 180)')];
    }
}
