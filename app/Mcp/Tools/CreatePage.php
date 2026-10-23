<?php

namespace App\Mcp\Tools;

use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Create a text page (title, H1, body HTML). It is always saved as a DRAFT and is not public until update_page sets status "published" (only when the site owner explicitly asks). Set its SEO with update_seo afterwards.')]
class CreatePage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'slug' => ['required', 'string', 'max:150', $this->slugRule(true)],
            'title' => 'required|string|max:200',
            'h1' => 'nullable|string|max:300',
            'content' => 'required|string',
            'parent_id' => 'nullable|integer|exists:pages,id',
            'sort_order' => 'nullable|integer',
        ]);
        $this->ensureSlugFree($data['slug']);

        $page = Page::query()->create([
            'slug' => $data['slug'],
            'title' => $data['title'],
            'h1' => $data['h1'] ?? $data['title'],
            'content' => $this->placeholders($data['content']),
            'template' => 'page',
            'status' => 'draft',
            'parent_id' => $data['parent_id'] ?? null,
            'sort_order' => $data['sort_order'] ?? (int) Page::query()->max('sort_order') + 1,
        ]);
        $page->seo()->create([]);
        $this->log('page', $page->id, null, $page->only(['slug', 'title', 'status']));

        return $this->json(['created' => $this->pageArray($page->fresh('seo'), true)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'slug' => $schema->string()->required()->description('URL path: lowercase words and dashes, e.g. "wedding-packages" (may nest once: "locations/dubai-marina")'),
            'title' => $schema->string()->required()->description('Page name (also the default <title>)'),
            'h1' => $schema->string()->description('Main heading; defaults to the title'),
            'content' => $schema->string()->required()->description('Body HTML without an <h1> (the template adds it). Link to this site with %%BASE%%/path/'),
            'parent_id' => $schema->integer()->description('Parent page id'),
            'sort_order' => $schema->integer(),
        ];
    }
}
