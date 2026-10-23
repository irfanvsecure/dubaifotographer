<?php

namespace App\Mcp\Tools;

use App\Models\ActivityLog;
use App\Models\Blog;
use App\Models\Page;
use App\Models\SeoMeta;
use App\Models\Tag;
use App\Support\SiteRenderer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;

/** Shared helpers for the site tools: JSON replies, the change log, versions and URL handling. */
abstract class SiteTool extends Tool
{
    /** list_pages, get_page, … */
    public function name(): string
    {
        return Str::snake(class_basename($this));
    }

    protected function json(mixed $data): Response
    {
        return Response::text(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }

    protected function log(string $entity, ?int $id, mixed $old, mixed $new): void
    {
        ActivityLog::record($this->name(), $entity, $id, $old, $new);
    }

    /** Site address of this request, e.g. https://dubaifotographer.com */
    protected function base(): string
    {
        return rtrim(url('/'), '/');
    }

    /** Links to this site are stored as %%BASE%%/… so content works on every domain (live, staging, local). */
    protected function placeholders(?string $value): ?string
    {
        if ($value === null) {
            return null;
        }

        return str_replace(
            [SiteRenderer::ORIGIN, 'https://www.dubaifotographer.com', 'http://dubaifotographer.com', $this->base()],
            '%%BASE%%',
            $value
        );
    }

    /** Fingerprint of a row; update tools only accept the version the matching get tool returned. */
    protected function version(?Model $model): string
    {
        return $model ? substr(md5(json_encode($model->getAttributes())), 0, 12) : 'none';
    }

    protected function checkVersion(?Model $model, Request $request, string $getTool): void
    {
        if ($request->get('version') !== $this->version($model)) {
            throw ValidationException::withMessages([
                'version' => "Call $getTool first and pass the version it returns. The item may have changed since it was last read; read it again before editing so no newer content is overwritten.",
            ]);
        }
    }

    protected function requireConfirm(Request $request, string $what): void
    {
        if ($request->get('confirm') !== true) {
            throw ValidationException::withMessages([
                'confirm' => "This will $what. Ask the site owner to confirm, then call again with confirm: true.",
            ]);
        }
    }

    /** Pages and posts share one URL space, so a slug must be free in both tables (trash included). */
    protected function ensureSlugFree(string $slug, ?Model $except = null): void
    {
        foreach ([Page::class, Blog::class] as $class) {
            $taken = $class::withTrashed()->where('slug', $slug)
                ->when($except instanceof $class, fn ($q) => $q->whereKeyNot($except->getKey()))
                ->exists();
            if ($taken) {
                throw ValidationException::withMessages(['slug' => "The URL /$slug/ is already used by a page, a post or an item in the trash."]);
            }
        }
    }

    /** Slug rule: lowercase words and dashes; pages may nest one level ("locations/x"); "" is the home page. */
    protected function slugRule(bool $nested = false): string
    {
        return $nested ? 'regex:#^([a-z0-9]+(-[a-z0-9]+)*)(/[a-z0-9]+(-[a-z0-9]+)*)?$#' : 'regex:#^[a-z0-9]+(-[a-z0-9]+)*$#';
    }

    /** "%%BASE%%/assets/images/x.webp", a full URL or "x.webp" → "x.webp" (blogs store it relative to assets/images) */
    protected function imagePath(string $value): string
    {
        return Str::after(Str::after($this->placeholders($value), '%%BASE%%/'), 'assets/images/');
    }

    protected function syncTags(Blog $blog, array $names): void
    {
        $blog->tags()->sync(collect($names)->filter()->map(
            fn ($name) => Tag::query()->firstOrCreate(['slug' => Str::slug($name)], ['name' => $name])->id
        )->all());
    }

    protected function url(Page|Blog $entity): string
    {
        return $this->base().$entity->path();
    }

    protected function seoArray(?SeoMeta $seo): array
    {
        return [
            'meta_title' => $seo?->meta_title,
            'meta_description' => $seo?->meta_description,
            'canonical_url' => $seo?->canonical_url,
            'robots' => $seo?->robots ?? 'index, follow',
            'og_title' => $seo?->og_title,
            'og_description' => $seo?->og_description,
            'og_image' => $seo?->og_image,
            'focus_keyword' => $seo?->focus_keyword,
            'schema_json' => $seo?->schemas() ?: null,
        ];
    }

    protected function pageArray(Page $page, bool $full = false): array
    {
        $data = [
            'id' => $page->id,
            'slug' => $page->slug,
            'url' => $this->url($page),
            'title' => $page->title,
            'status' => $page->status,
            'template' => $page->template,
            'updated_at' => $page->updated_at?->toIso8601String(),
        ];
        if (! $full) {
            return $data;
        }

        return $data + [
            'h1' => $page->h1,
            'content' => $page->content,
            'content_editable' => $page->template === 'page',
            'note' => $page->template === 'page'
                ? 'Body HTML is `content`. Links to this site use %%BASE%% (e.g. %%BASE%%/contact-us/).'
                : ($page->sections()->exists()
                    ? 'Designed page: edit the body with get_page_sections / update_page_section; title, h1, slug, status and SEO are edited here.'
                    : "Designed page not converted to sections yet: the body is in the Blade template \"{$page->template}\". Title, h1, slug, status, parent, sort order and SEO are editable."),
            'parent_id' => $page->parent_id,
            'sort_order' => $page->sort_order,
            'version' => $this->version($page),
            'seo' => $this->seoArray($page->seo),
        ];
    }

    protected function blogArray(Blog $blog, bool $full = false): array
    {
        $data = [
            'id' => $blog->id,
            'slug' => $blog->slug,
            'url' => $this->url($blog),
            'title' => $blog->title,
            'status' => $blog->status,
            'category' => $blog->category?->name,
            'published_at' => $blog->published_at?->toIso8601String(),
            'updated_at' => $blog->updated_at?->toIso8601String(),
        ];
        if (! $full) {
            return $data;
        }

        return $data + [
            'excerpt' => $blog->excerpt,
            'content' => $blog->content,
            'featured_image' => $blog->featured_image,
            'featured_image_alt' => $blog->featured_image_alt,
            'category_id' => $blog->category_id,
            'tags' => $blog->tags->pluck('name')->all(),
            'layout' => $blog->layout,
            'note' => 'Body HTML is `content`; links to this site use %%BASE%%. featured_image is a path under assets/images/. layout holds the article design options (variant, author, toc…); leave it out to keep it.',
            'version' => $this->version($blog),
            'seo' => $this->seoArray($blog->seo),
        ];
    }
}
