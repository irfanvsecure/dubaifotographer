<?php

namespace App\Mcp\Tools;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Validation\ValidationException;
use Laravel\Mcp\Request;

/** Shared lookups for the page section tools. */
abstract class SectionTool extends SiteTool
{
    protected function page(Request $request): Page
    {
        $page = match (true) {
            $request->get('page_id') !== null => Page::query()->find($request->get('page_id')),
            array_key_exists('slug', $request->all()) => Page::query()->where('slug', trim((string) $request->get('slug'), '/'))->first(),
            default => null,
        };
        if (! $page) {
            throw ValidationException::withMessages(['page_id' => 'Page not found. Give page_id or slug ("" = home page).']);
        }

        return $page;
    }

    protected function section(Page $page, string $key): PageSection
    {
        $section = $page->sections()->where('key', $key)->first();
        if (! $section) {
            throw ValidationException::withMessages(['key' => "No section \"$key\" on this page. Sections: ".($page->sections()->pluck('key')->implode(', ') ?: 'none')]);
        }

        return $section;
    }

    protected function sectionArray(PageSection $section): array
    {
        return [
            'key' => $section->key,
            'type' => $section->type,
            'position' => $section->position,
            'version' => $this->version($section),
            'data' => array_filter($section->data, fn ($field) => ! str_starts_with($field, '_'), ARRAY_FILTER_USE_KEY),
        ];
    }

    protected function pageRef(Page $page): array
    {
        return ['page_id' => $page->id, 'slug' => $page->slug, 'url' => $this->url($page)];
    }
}
