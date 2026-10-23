<?php

namespace App\Mcp\Tools;

use App\Support\ImageUploader;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Add an image from a URL or base64 data. It is converted to WebP, compressed and scaled to max_width, and stored in the media library. alt_text is required (describe what the image shows). Returns the URL and a ready <img> snippet with width/height and lazy loading for page or post content.')]
class UploadImage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'url' => 'required_without:image_base64|nullable|url|max:2000',
            'image_base64' => 'required_without:url|nullable|string',
            'filename' => 'nullable|string|max:120',
            'alt_text' => 'required|string|min:3|max:255',
            'title' => 'nullable|string|max:255',
            'max_width' => 'nullable|integer|min:200|max:4000',
            'quality' => 'nullable|integer|min:40|max:95',
        ]);

        try {
            $bytes = isset($data['url']) ? ImageUploader::fromUrl($data['url']) : ImageUploader::fromBase64($data['image_base64']);
            $name = $data['filename'] ?? (isset($data['url']) ? basename((string) parse_url($data['url'], PHP_URL_PATH)) : $data['alt_text']);
            $media = ImageUploader::store($bytes, $name, $data['alt_text'], $data['title'] ?? null, $data['max_width'] ?? 1920, $data['quality'] ?? 82);
        } catch (\RuntimeException $e) {
            return Response::error($e->getMessage());
        }
        $this->log('media', $media->id, null, $media->only(['file_path', 'alt_text', 'width', 'height', 'size']));

        return $this->json([
            'id' => $media->id,
            'file_path' => $media->file_path,
            'url' => $this->base().'/'.$media->file_path,
            'content_url' => $media->url(),
            'featured_image' => \Illuminate\Support\Str::after($media->file_path, 'assets/images/'),
            'width' => $media->width,
            'height' => $media->height,
            'size_kb' => round($media->size / 1024, 1),
            'html' => ImageUploader::snippet($media),
            'note' => 'Use `html` inside content, `featured_image` for create_blog/update_blog, `url` for og_image.',
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'url' => $schema->string()->description('Public image URL to fetch'),
            'image_base64' => $schema->string()->description('Or the image as base64 (data: prefix allowed)'),
            'filename' => $schema->string()->description('File name to use (SEO-friendly words), e.g. "dubai-marina-wedding"'),
            'alt_text' => $schema->string()->required()->description('What the image shows, for screen readers and search'),
            'title' => $schema->string(),
            'max_width' => $schema->integer()->description('Scale down to this width (default 1920)'),
            'quality' => $schema->integer()->description('WebP quality 40-95 (default 82)'),
        ];
    }
}
