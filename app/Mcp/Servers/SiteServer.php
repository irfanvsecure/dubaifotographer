<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools;
use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('Dubai Fotographer')]
#[Version('1.0.0')]
#[Instructions(<<<'TEXT'
Manage the content and SEO of dubaifotographer.com, a photography and videography studio in Dubai serving all 7 Emirates.

Rules:
- New pages and posts are saved as drafts. Publish (status "published") only when the site owner explicitly asks for it.
- Always read before you write: get_page / get_blog / get_seo return a `version`; the update tools need it, so newer edits are never overwritten.
- Deleting (pages, posts, images, redirects) needs the owner's OK first: describe what will be removed, then call with confirm: true. Deleted pages, posts and images go to the trash (list_trash, restore_item).
- Content is HTML. Links and images on this site are written as %%BASE%%/path/ (e.g. %%BASE%%/contact-us/); the site fills in its own address. Every page has exactly one H1, made by the template: do not put <h1> in content.
- Images: upload_image first (alt text required; converted to WebP), then use the returned html or URL.
- Designed pages (home, services, locations…) have their body in sections: get_page_sections, then update_page_section (version needed), add_page_section, delete_page_section, reorder_page_sections. Every section change keeps a revision (list_section_revisions, restore_section_revision) and FAQ changes update the FAQPage schema. The homepage is converted so far; pages not converted yet return no sections, and only their title, H1, slug, status and SEO are editable.
- Changing the slug of a published page or post adds a 301 redirect from the old URL automatically.
- Check work with audit_seo, audit_performance, get_internal_links and check_broken_links. Every change is recorded in activity_log.
TEXT)]
class SiteServer extends Server
{
    // all tools fit in one tools/list page
    public int $defaultPaginationLength = 50;

    protected array $tools = [
        // content
        Tools\ListPages::class,
        Tools\GetPage::class,
        Tools\CreatePage::class,
        Tools\UpdatePage::class,
        Tools\DeletePage::class,
        Tools\ListBlogs::class,
        Tools\GetBlog::class,
        Tools\CreateBlog::class,
        Tools\UpdateBlog::class,
        Tools\DeleteBlog::class,
        Tools\GetPageSections::class,
        Tools\UpdatePageSection::class,
        Tools\AddPageSection::class,
        Tools\DeletePageSection::class,
        Tools\ReorderPageSections::class,
        Tools\ListSectionRevisions::class,
        Tools\RestoreSectionRevision::class,
        Tools\ListCategories::class,
        Tools\CreateCategory::class,
        Tools\UpdateCategory::class,
        // SEO
        Tools\GetSeo::class,
        Tools\UpdateSeo::class,
        Tools\AuditSeo::class,
        Tools\AuditPerformance::class,
        Tools\GetInternalLinks::class,
        Tools\CheckBrokenLinks::class,
        Tools\ValidateSitemapRobots::class,
        Tools\GenerateSchema::class,
        // images
        Tools\UploadImage::class,
        Tools\ListImages::class,
        Tools\UpdateImage::class,
        Tools\DeleteImage::class,
        // redirects and settings
        Tools\ListRedirects::class,
        Tools\SaveRedirect::class,
        Tools\DeleteRedirect::class,
        Tools\GetSettings::class,
        Tools\UpdateSettings::class,
        // safety and operations
        Tools\ActivityLogTool::class,
        Tools\ListTrash::class,
        Tools\RestoreItem::class,
        Tools\ClearCache::class,
        Tools\ListStalePosts::class,
    ];
}
