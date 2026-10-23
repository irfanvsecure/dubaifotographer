<?php

namespace App\Mcp\Tools;

use App\Models\Media;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('List images in the media library (path, URL, alt text, size). missing_alt: true lists only images without alt text.')]
class ListImages extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'search' => 'nullable|string|max:100',
            'missing_alt' => 'nullable|boolean',
            'limit' => 'nullable|integer|min:1|max:200',
            'offset' => 'nullable|integer|min:0',
        ]);
        $query = Media::query()
            ->when($data['search'] ?? null, fn ($q, $s) => $q->where(fn ($q) => $q->where('file_path', 'like', "%$s%")->orWhere('alt_text', 'like', "%$s%")))
            ->when($data['missing_alt'] ?? false, fn ($q) => $q->where(fn ($q) => $q->whereNull('alt_text')->orWhere('alt_text', '')))
            ->orderByDesc('id');
        $total = (clone $query)->count();

        return $this->json([
            'total' => $total,
            'images' => $query->skip($data['offset'] ?? 0)->take($data['limit'] ?? 50)->get()->map(fn (Media $m) => [
                'id' => $m->id,
                'file_path' => $m->file_path,
                'url' => $this->base().'/'.$m->file_path,
                'alt_text' => $m->alt_text,
                'title' => $m->title,
                'width' => $m->width,
                'height' => $m->height,
                'size_kb' => $m->size ? round($m->size / 1024, 1) : null,
            ])->all(),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'search' => $schema->string()->description('Text in the file path or alt text'),
            'missing_alt' => $schema->boolean(),
            'limit' => $schema->integer()->description('Default 50'),
            'offset' => $schema->integer(),
        ];
    }
}
