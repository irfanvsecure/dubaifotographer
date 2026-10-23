<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Str;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change a blog post. Requires the `version` from get_blog (read first, so newer edits are not overwritten). Only the fields you send change. status "published" makes it public (published_at defaults to now): only when the site owner explicitly asks. Changing the slug of a published post adds a 301 from the old URL automatically.')]
class UpdateBlog extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'version' => 'required|string',
            'slug' => ['sometimes', 'string', 'max:150', $this->slugRule()],
            'title' => 'sometimes|string|max:200',
            'content' => 'sometimes|string',
            'excerpt' => 'sometimes|nullable|string|max:500',
            'featured_image' => 'sometimes|nullable|string|max:255',
            'featured_image_alt' => 'sometimes|nullable|string|max:255',
            'category_id' => 'sometimes|nullable|integer|exists:categories,id',
            'category' => 'sometimes|string|max:100',
            'tags' => 'sometimes|array',
            'tags.*' => 'string|max:60',
            'status' => 'sometimes|in:draft,published',
            'published_at' => 'sometimes|nullable|date',
            'layout' => 'sometimes|array',
        ]);
        $blog = Blog::query()->with('tags')->find($data['id']);
        if (! $blog) {
            return Response::error('Blog post not found.');
        }
        $this->checkVersion($blog, $request, 'get_blog');
        if (isset($data['slug']) && $data['slug'] !== $blog->slug) {
            $this->ensureSlugFree($data['slug'], $blog);
        }

        $changes = collect($data)->except(['id', 'version', 'tags', 'category'])->all();
        if (isset($changes['content'])) {
            $changes['content'] = $this->placeholders($changes['content']);
        }
        if (! empty($changes['featured_image'])) {
            $changes['featured_image'] = $this->imagePath($changes['featured_image']);
            if (empty($changes['featured_image_alt'] ?? $blog->featured_image_alt)) {
                return Response::error('featured_image_alt is required with a featured image.');
            }
        }
        if (isset($data['category'])) {
            $changes['category_id'] = Category::query()->firstOrCreate(['slug' => Str::slug($data['category'])], ['name' => $data['category']])->id;
        }
        if (($changes['status'] ?? null) === 'published' && ! $blog->published_at && ! isset($changes['published_at'])) {
            $changes['published_at'] = now();
        }
        if (isset($changes['layout'])) {
            $changes['layout'] = array_merge($blog->layout ?? [], $changes['layout']);
        }

        $old = $blog->only(array_keys($changes));
        $blog->update($changes);
        if (array_key_exists('tags', $data)) {
            $old['tags'] = $blog->tags->pluck('name')->all();
            $changes['tags'] = $data['tags'];
            $this->syncTags($blog, $data['tags']);
        }
        $this->log('blog', $blog->id, $old, $changes);

        return $this->json(['updated' => $this->blogArray($blog->fresh(['seo', 'category', 'tags']), true)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'version' => $schema->string()->required()->description('From get_blog'),
            'slug' => $schema->string(),
            'title' => $schema->string(),
            'content' => $schema->string()->description('Full body HTML (replaces the old body)'),
            'excerpt' => $schema->string(),
            'featured_image' => $schema->string()->description('Image URL or path from upload_image'),
            'featured_image_alt' => $schema->string(),
            'category_id' => $schema->integer(),
            'category' => $schema->string()->description('Or a category name (created if new)'),
            'tags' => $schema->array()->items($schema->string())->description('Replaces all tags'),
            'status' => $schema->string()->enum(['draft', 'published']),
            'published_at' => $schema->string()->description('ISO date, e.g. 2026-10-23T09:00:00+04:00'),
            'layout' => $schema->object()->description('Article design options to merge, e.g. {"variant": "post", "author": "Abu Bakar"}'),
        ];
    }
}
