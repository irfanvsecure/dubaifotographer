<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Media;
use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('List trashed pages, blog posts and images. restore_item brings one back.')]
class ListTrash extends SiteTool
{
    public function handle(Request $request): Response
    {
        $row = fn (string $type) => fn ($item) => [
            'type' => $type,
            'id' => $item->id,
            'name' => $item->title ?? $item->file_path,
            'slug' => $item->slug ?? null,
            'deleted_at' => $item->deleted_at?->toIso8601String(),
        ];

        return $this->json(['trash' => collect()
            ->concat(Page::onlyTrashed()->get()->map($row('page')))
            ->concat(Blog::onlyTrashed()->get()->map($row('blog')))
            ->concat(Media::onlyTrashed()->get()->map($row('image')))
            ->sortByDesc('deleted_at')->values()->all()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
