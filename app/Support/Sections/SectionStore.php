<?php

namespace App\Support\Sections;

use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionRevision;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

/**
 * Every change to page sections goes through here: a revision of the old state is kept,
 * the FAQPage schema follows the FAQ sections, and cached CSS for the page is dropped.
 */
class SectionStore
{
    /** database/content/sections/<name>.php for a page slug ("" = home) */
    public static function definitionFile(string $slug): string
    {
        return database_path('content/sections/'.($slug === '' ? 'home' : str_replace('/', '--', $slug)).'.php');
    }

    /** Loads a page's definition file into page_sections (only when it has none, unless $force). */
    public static function import(Page $page, bool $force = false): int
    {
        $file = self::definitionFile($page->slug);
        if (! is_file($file) || ($page->sections()->exists() && ! $force)) {
            return 0;
        }
        $definition = require $file;

        return DB::transaction(function () use ($page, $definition) {
            $page->sections()->delete();
            foreach ($definition['sections'] as $position => [$key, $type, $data]) {
                $options = array_filter($data, fn ($k) => str_starts_with($k, '_'), ARRAY_FILTER_USE_KEY);
                $fields = array_diff_key($data, $options);
                $page->sections()->create([
                    'key' => $key,
                    'type' => $type,
                    'position' => $position + 1,
                    'data' => SectionTypes::validate($type, $fields, $options),
                ]);
            }

            return count($definition['sections']);
        });
    }

    public static function add(Page $page, string $type, string $key, array $data, ?string $afterKey): PageSection
    {
        $clean = SectionTypes::validate($type, $data);

        return DB::transaction(function () use ($page, $type, $key, $clean, $afterKey) {
            $position = $afterKey === null
                ? (int) $page->sections()->max('position') + 1
                : (int) $page->sections()->where('key', $afterKey)->value('position') + 1;
            $page->sections()->where('position', '>=', $position)->increment('position');
            $section = $page->sections()->create(['key' => $key, 'type' => $type, 'position' => $position, 'data' => $clean]);
            SectionRevision::query()->create([
                'page_id' => $page->id, 'section_key' => $key, 'type' => $type,
                'position' => null, 'data' => null, 'action' => 'add',
            ]);
            self::changed($page, $type);

            return $section;
        });
    }

    public static function update(PageSection $section, array $data): PageSection
    {
        $clean = SectionTypes::validate($section->type, $data, $section->data);

        return DB::transaction(function () use ($section, $clean) {
            $section->snapshot('update');
            $section->update(['data' => $clean]);
            self::changed($section->page, $section->type);

            return $section;
        });
    }

    public static function delete(PageSection $section): void
    {
        DB::transaction(function () use ($section) {
            $section->snapshot('delete');
            $page = $section->page;
            $section->delete();
            self::renumber($page);
            self::changed($page, $section->type);
        });
    }

    /** @param  string[]  $keys  every section key of the page, in the new order */
    public static function reorder(Page $page, array $keys): void
    {
        $current = $page->sections()->pluck('key')->all();
        if (count($keys) !== count($current) || array_diff($current, $keys) || count(array_unique($keys)) !== count($keys)) {
            throw ValidationException::withMessages(['keys' => 'Send every section key of the page exactly once: '.implode(', ', $current)]);
        }
        DB::transaction(function () use ($page, $keys) {
            foreach ($page->sections()->get() as $section) {
                $section->snapshot('reorder');
                $section->update(['position' => array_search($section->key, $keys, true) + 1]);
            }
            self::changed($page, null);
        });
    }

    /** Puts a section back the way the revision recorded it (re-creates it when it was deleted). */
    public static function restore(SectionRevision $revision): PageSection
    {
        if ($revision->action === 'add') {
            throw ValidationException::withMessages(['revision_id' => 'This revision marks when the section was added; it has no earlier content. Use delete_page_section to remove the section instead.']);
        }
        $page = $revision->page;

        return DB::transaction(function () use ($page, $revision) {
            $section = $page->sections()->where('key', $revision->section_key)->first();
            if ($section) {
                $section->snapshot('restore');
                $section->update(['type' => $revision->type, 'data' => $revision->data]);
            } else {
                $position = min((int) $revision->position, (int) $page->sections()->max('position') + 1);
                $page->sections()->where('position', '>=', $position)->increment('position');
                $section = $page->sections()->create([
                    'key' => $revision->section_key, 'type' => $revision->type,
                    'position' => $position, 'data' => $revision->data,
                ]);
                SectionRevision::query()->create([
                    'page_id' => $page->id, 'section_key' => $section->key, 'type' => $section->type,
                    'position' => null, 'data' => null, 'action' => 'add',
                ]);
            }
            self::changed($page, $revision->type);

            return $section;
        });
    }

    private static function renumber(Page $page): void
    {
        foreach ($page->sections()->get()->values() as $i => $section) {
            if ($section->position !== $i + 1) {
                $section->update(['position' => $i + 1]);
            }
        }
    }

    /** After every change: FAQ schema in sync, page CSS cache dropped (pages themselves are not cached). */
    private static function changed(Page $page, ?string $type): void
    {
        if ($type === 'faq' || $type === null) {
            FaqSchema::sync($page);
        }
        File::delete(File::glob(storage_path('framework/cache/critical-*.css')));
        $page->touch();
    }
}
