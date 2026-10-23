<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Media;
use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Bring a trashed page, blog post or image back. Pages and posts come back with the status they had (a published one is public again).')]
class RestoreItem extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['type' => 'required|in:page,blog,image', 'id' => 'required|integer']);
        $class = ['page' => Page::class, 'blog' => Blog::class, 'image' => Media::class][$data['type']];
        $item = $class::onlyTrashed()->find($data['id']);
        if (! $item) {
            return Response::error("No trashed {$data['type']} with id {$data['id']}.");
        }
        $item->restore();
        $this->log($data['type'] === 'image' ? 'media' : $data['type'], $item->id, ['deleted' => true], ['restored' => true]);

        return $this->json(['restored' => $item->only(['id', 'slug', 'title', 'status', 'file_path'])]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'type' => $schema->string()->enum(['page', 'blog', 'image'])->required(),
            'id' => $schema->integer()->required(),
        ];
    }
}
