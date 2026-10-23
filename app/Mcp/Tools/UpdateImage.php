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

#[Description('Change the alt text or title of an image in the library. The new alt text is also written into the <img> tags of page/post content stored in the database that use this image (designed Blade pages keep the alt in their template; the reply lists them).')]
class UpdateImage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'alt_text' => 'sometimes|required|string|min:3|max:255',
            'title' => 'sometimes|nullable|string|max:255',
        ]);
        $media = Media::query()->find($data['id']);
        if (! $media) {
            return Response::error('Image not found.');
        }
        $changes = collect($data)->except('id')->all();
        $old = $media->only(array_keys($changes));
        $media->update($changes);

        $updated = [];
        if (isset($changes['alt_text'])) {
            $src = preg_quote('%%BASE%%/'.$media->file_path, '#');
            $pattern = '#(<img\b[^>]*\ssrc="'.$src.'"[^>]*\salt=")[^"]*(")|(<img\b[^>]*\salt=")[^"]*("[^>]*\ssrc="'.$src.'")#';
            $alt = e($changes['alt_text']);
            foreach ([Page::class, Blog::class] as $class) {
                $class::query()->where('content', 'like', '%'.$media->file_path.'%')->get()->each(function ($item) use ($pattern, $alt, &$updated) {
                    $content = preg_replace_callback($pattern, fn ($m) => $m[1] !== '' ? $m[1].$alt.$m[2] : $m[3].$alt.$m[4], $item->content);
                    if ($content !== $item->content) {
                        $item->update(['content' => $content]);
                        $updated[] = $item->path();
                    }
                });
            }
            Blog::query()->where('featured_image', Str::after($media->file_path, 'assets/images/'))->update(['featured_image_alt' => $changes['alt_text']]);
        }
        $this->log('media', $media->id, $old, $changes + ['content_updated' => $updated]);

        return $this->json(['updated' => $media->fresh()->only(['id', 'file_path', 'alt_text', 'title']), 'content_updated_on' => $updated]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'alt_text' => $schema->string()->description('What the image shows'),
            'title' => $schema->string(),
        ];
    }
}
