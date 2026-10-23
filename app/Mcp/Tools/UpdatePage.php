<?php

namespace App\Mcp\Tools;

use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change a page. Requires the `version` from get_page (read first, so newer edits are not overwritten). Only the fields you send change. status "published" makes it public: only when the site owner explicitly asks. Changing the slug of a published page adds a 301 from the old URL automatically.')]
class UpdatePage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'version' => 'required|string',
            'slug' => ['sometimes', 'string', 'max:150', $this->slugRule(true)],
            'title' => 'sometimes|string|max:200',
            'h1' => 'sometimes|nullable|string|max:300',
            'content' => 'sometimes|string',
            'status' => 'sometimes|in:draft,published',
            'parent_id' => 'sometimes|nullable|integer|exists:pages,id',
            'sort_order' => 'sometimes|integer',
        ]);
        $page = Page::query()->find($data['id']);
        if (! $page) {
            return Response::error('Page not found.');
        }
        $this->checkVersion($page, $request, 'get_page');
        if (isset($data['content']) && $page->template !== 'page') {
            return Response::error("This page's body is designed in the Blade template \"{$page->template}\" and cannot be replaced here. You can change title, h1, slug, status and SEO.");
        }
        if (isset($data['slug']) && $data['slug'] !== $page->slug) {
            if ($page->slug === '') {
                return Response::error('The home page URL cannot change.');
            }
            $this->ensureSlugFree($data['slug'], $page);
        }
        if (isset($data['content'])) {
            $data['content'] = $this->placeholders($data['content']);
        }

        $changes = collect($data)->except(['id', 'version'])->all();
        $old = $page->only(array_keys($changes));
        $page->update($changes);
        $this->log('page', $page->id, $old, $changes);

        return $this->json(['updated' => $this->pageArray($page->fresh('seo'), true)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'version' => $schema->string()->required()->description('From get_page'),
            'slug' => $schema->string(),
            'title' => $schema->string(),
            'h1' => $schema->string()->description('Main heading (HTML allowed, e.g. <br>)'),
            'content' => $schema->string()->description('Body HTML; text pages (template "page") only'),
            'status' => $schema->string()->enum(['draft', 'published']),
            'parent_id' => $schema->integer(),
            'sort_order' => $schema->integer(),
        ];
    }
}
