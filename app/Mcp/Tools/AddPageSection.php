<?php

namespace App\Mcp\Tools;

use App\Support\Sections\SectionStore;
use App\Support\Sections\SectionTypes;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Str;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Add a new section to a designed page, from the predefined types (get_page_sections with include_types: true lists them and their fields). It goes after the section `after` (or at the end). The page design styles it like the existing sections. Tell the site owner what you added; the page is live, so remove it with delete_page_section if it was not wanted.')]
class AddPageSection extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'slug' => 'nullable|string',
            'type' => 'required|string|in:'.implode(',', array_keys(SectionTypes::all())),
            'key' => ['nullable', 'string', 'max:60', 'regex:/^[a-z0-9]+(-[a-z0-9]+)*$/'],
            'after' => 'nullable|string',
            'data' => 'present|array',
        ]);
        $page = $this->page($request);
        if (! $page->sections()->exists()) {
            return Response::error('This page has no sections yet (its body is still in its Blade template), so sections cannot be added to it.');
        }
        if ($request->get('type') === 'home_hero') {
            return Response::error('A page has one hero; edit the existing one instead.');
        }
        $after = $request->get('after');
        if ($after !== null) {
            $this->section($page, $after);
        }

        $key = $request->get('key') ?: Str::slug($request->get('type'));
        for ($base = $key, $i = 2; $page->sections()->where('key', $key)->exists(); $i++) {
            $key = "$base-$i";
        }
        $section = SectionStore::add($page, $request->get('type'), $key, $request->get('data'), $after);
        $this->log('page_section', $section->id, null, ['page' => $page->path(), 'key' => $key, 'type' => $section->type, 'data' => $section->data]);

        return $this->json(['added' => $this->sectionArray($section), 'url' => $this->url($page)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'page_id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the page slug ("" = home page)'),
            'type' => $schema->string()->enum(array_keys(SectionTypes::all()))->required(),
            'key' => $schema->string()->description('Short id for the section, e.g. "pricing-faq" (default: the type)'),
            'after' => $schema->string()->description('Key of the section to insert after (default: at the end)'),
            'data' => $schema->object()->required()->description('All required fields of the type'),
        ];
    }
}
