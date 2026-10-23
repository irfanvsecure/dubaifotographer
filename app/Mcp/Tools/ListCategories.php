<?php

namespace App\Mcp\Tools;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('List blog categories (with post counts) and the tags in use.')]
class ListCategories extends SiteTool
{
    public function handle(Request $request): Response
    {
        return $this->json([
            'categories' => Category::query()->withCount('blogs')->orderBy('name')->get(['id', 'name', 'slug', 'description'])->toArray(),
            'tags' => Tag::query()->withCount('blogs')->orderBy('name')->get(['id', 'name', 'slug'])->toArray(),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
