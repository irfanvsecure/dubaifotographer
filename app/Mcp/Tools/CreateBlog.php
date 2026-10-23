<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Str;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Create a blog post. It is always saved as a DRAFT; publish it later with update_blog only when the site owner explicitly asks. Upload images first with upload_image and use the returned URL/snippet. Set SEO afterwards with update_seo.')]
class CreateBlog extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'slug' => ['required', 'string', 'max:150', $this->slugRule()],
            'title' => 'required|string|max:200',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'featured_image' => 'nullable|string|max:255',
            'featured_image_alt' => 'required_with:featured_image|nullable|string|max:255',
            'category_id' => 'nullable|integer|exists:categories,id',
            'category' => 'nullable|string|max:100',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:60',
            'author' => 'nullable|string|max:100',
        ]);
        $this->ensureSlugFree($data['slug']);

        $categoryId = $data['category_id'] ?? (isset($data['category'])
            ? Category::query()->firstOrCreate(['slug' => Str::slug($data['category'])], ['name' => $data['category']])->id
            : null);
        $blog = Blog::query()->create([
            'slug' => $data['slug'],
            'title' => $data['title'],
            'content' => $this->placeholders($data['content']),
            'excerpt' => $data['excerpt'] ?? null,
            'featured_image' => isset($data['featured_image']) ? $this->imagePath($data['featured_image']) : null,
            'featured_image_alt' => $data['featured_image_alt'] ?? null,
            'category_id' => $categoryId,
            'status' => 'draft',
            // same look as the newest posts: card with author/date, previous/next and quote box
            'layout' => ['variant' => 'post', 'author' => $data['author'] ?? 'Dubai Fotographer', 'author_url' => '%%BASE%%/about-us/'],
        ]);
        $this->syncTags($blog, $data['tags'] ?? []);
        $blog->seo()->create([]);
        $this->log('blog', $blog->id, null, $blog->only(['slug', 'title', 'status']));

        return $this->json(['created' => $this->blogArray($blog->fresh(['seo', 'category', 'tags']), true)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'slug' => $schema->string()->required()->description('URL slug: lowercase words and dashes'),
            'title' => $schema->string()->required()->description('Post title (the H1)'),
            'content' => $schema->string()->required()->description('Body HTML without an <h1>. Use <h2 id="..."> headings (a table of contents is built from them; put <!--toc--> where it should appear). Link to this site with %%BASE%%/path/'),
            'excerpt' => $schema->string()->description('One or two sentence summary'),
            'featured_image' => $schema->string()->description('Image URL or path from upload_image (shown in the blog listing)'),
            'featured_image_alt' => $schema->string()->description('Alt text; required with featured_image'),
            'category_id' => $schema->integer(),
            'category' => $schema->string()->description('Or a category name (created if new)'),
            'tags' => $schema->array()->items($schema->string()),
            'author' => $schema->string()->description('Shown under the title; default "Dubai Fotographer"'),
        ];
    }
}
