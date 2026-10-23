<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Media;
use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Str;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;

#[IsDestructive]
#[Description('Move an image to the media trash (the file stays on disk; restore_item brings it back). Refused while page/post content in the database still uses it. Ask the site owner first, then call with confirm: true.')]
class DeleteImage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['id' => 'required|integer', 'confirm' => 'nullable|boolean']);
        $media = Media::query()->find($data['id']);
        if (! $media) {
            return Response::error('Image not found.');
        }
        $usedOn = collect([Page::class, Blog::class])
            ->flatMap(fn ($class) => $class::query()->where('content', 'like', '%'.$media->file_path.'%')->get())
            ->concat(Blog::query()->where('featured_image', Str::after($media->file_path, 'assets/images/'))->get())
            ->map(fn ($item) => $item->path())->unique()->values();
        if ($usedOn->isNotEmpty()) {
            return Response::error('Still used on: '.$usedOn->implode(', ').'. Remove it from that content first.');
        }
        $this->requireConfirm($request, "move the image {$media->file_path} to the trash");

        $media->delete();
        $this->log('media', $media->id, $media->only(['file_path', 'alt_text']), ['deleted' => true]);

        return $this->json(['trashed' => $media->only(['id', 'file_path']), 'restore_with' => ['tool' => 'restore_item', 'type' => 'image', 'id' => $media->id]]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'confirm' => $schema->boolean()->description('true, after the site owner agreed'),
        ];
    }
}
