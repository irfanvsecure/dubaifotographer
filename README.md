# Dubai Fotographer

Laravel 12 site for [dubaifotographer.com](https://dubaifotographer.com). Pages, blog posts, SEO tags, redirects, images and site settings live in the database. Claude manages them through an MCP server at `/api/mcp`.

## How a page is served

1. `routes/web.php` sends every path to `SiteController`.
2. The controller looks for a **published** row in `pages`, then in `blogs`. If there is none, it checks the `redirects` table. If that has no match either, it returns 404.
3. `App\Support\SiteRenderer` renders the page, then `App\Support\PageOptimizer` post-processes the HTML:
   - adds the critical CSS inline;
   - loads the rest of the CSS without blocking;
   - converts images to WebP and adds width/height and lazy loading;
   - shares SVG icons;
   - hides the email address from scrapers.

There are three kinds of content:

| Kind | Where the body lives | Editable through MCP |
|---|---|---|
| Blog posts (`blogs`) | `blogs.content` (HTML), template `resources/views/templates/blog.blade.php` | everything |
| Text pages (`pages.template = 'page'`) | `pages.content`, template `templates/page.blade.php` | everything |
| Designed pages (home, services, locations…) | their own Blade view, named by `pages.template` | title, H1, slug, status, parent, SEO |

Links to the site inside content are stored as `%%BASE%%/path/`. Each request replaces `%%BASE%%` with the site address, so the same data works on live, staging and local.

`<head>` SEO tags come from `seo_meta` (`resources/views/partials/seo-head.blade.php`): title, description, canonical, robots, Open Graph, Twitter and JSON-LD. Empty fields fall back to the page title and the `settings` table.

SEO URLs:

| URL | Content |
|---|---|
| `/sitemap.xml` | every published page and post that is not `noindex` |
| `/sitemap_index.xml` | index of the page and post sitemaps |
| `/page-sitemap.xml` | published, indexable pages |
| `/post-sitemap.xml` | published, indexable posts |
| `/robots.txt` | built from the `robots_txt` setting, with the Sitemap line added |

When a published page or post changes its slug, a 301 from the old URL is created automatically.

## MCP server

`POST /api/mcp` (Streamable HTTP, [laravel/mcp](https://github.com/laravel/mcp)). Code: `app/Mcp`.

### Auth

- Requests need `Authorization: Bearer <MCP_TOKEN>`.
- The token is only in `.env`. The database stores its SHA-256 hash (`mcp_tokens`), never the token itself.
- Wrong tokens: 10 tries a minute per IP. Valid token: 120 requests a minute.

```bash
php artisan mcp:token --generate   # prints MCP_TOKEN=<64 random characters>; put it in .env
php artisan mcp:token              # stores the hash of MCP_TOKEN; an older token stops working
```

To rotate the token: generate a new one, put it in `.env`, run `php artisan config:cache` (live) and `php artisan mcp:token`, then update Claude with the new header.

### Connect Claude Code

```bash
claude mcp add --transport http dubaifotographer https://dubaifotographer.com/api/mcp --header "Authorization: Bearer <MCP_TOKEN>"
```

For a local test: `php artisan serve --port=8765`, then use `http://127.0.0.1:8765/api/mcp` instead.

### Connect claude.ai (web)

claude.ai connectors cannot send a header, so the token goes in the URL. In claude.ai: **Settings → Connectors → Add custom connector**. Give it a name ("Dubai Fotographer") and this URL, with no OAuth settings:

```
https://dubaifotographer.com/api/mcp/<MCP_TOKEN>
```

Anyone with that URL can edit the site, so treat it like a password. Rotating `MCP_TOKEN` (see above) changes the URL too.

### Tools

Every change is written to `activity_log` with its old and new values.

**Content**

| Tool | What it does |
|---|---|
| `list_pages` / `get_page` | List pages; read one (H1, body, SEO, `version`) |
| `create_page` | New text page, always a **draft** |
| `update_page` | Change title, H1, slug, status, parent, order; body for text pages. Needs `version` from `get_page` |
| `delete_page` | To the trash; needs `confirm: true` |
| `list_blogs` / `get_blog` | List posts; read one |
| `create_blog` | New post, always a **draft** |
| `update_blog` | Change any field, tags, layout, status. Needs `version` from `get_blog` |
| `delete_blog` | To the trash; needs `confirm: true` |
| `list_categories` / `create_category` / `update_category` | Blog categories (and tags in use) |

**Page sections** (body of designed pages; the homepage is converted so far)

| Tool | What it does |
|---|---|
| `get_page_sections` | Sections of a page with their fields and `version`; `include_types: true` lists the section types |
| `update_page_section` | Change fields of one section (needs `version`); list fields are replaced whole |
| `add_page_section` | New section from a predefined type, after a given section |
| `delete_page_section` | Remove a section (needs `version` and `confirm: true`) |
| `reorder_page_sections` | New order of all sections (needs `confirm: true`) |
| `list_section_revisions` / `restore_section_revision` | History of every section change; put any earlier version back |

Every section change keeps the previous content as a revision. HTML fields allow only `p, a, strong, em, ul, li, br, h2, h3`; scripts, iframes, styles and event attributes are stripped. Changing a FAQ section rewrites the page's FAQPage schema.

The section types and their fields are defined in `app/Support/Sections/SectionTypes.php`. Each type is drawn by `resources/views/sections/<type>.blade.php`. To convert another page, write `database/content/sections/<slug>.php` (see `home.php`), make its template `@include('partials.page-sections')`, then run `php artisan content:sections <slug>`.

**SEO**

| Tool | What it does |
|---|---|
| `get_seo` / `update_seo` | Meta title and description, canonical, robots, OG, JSON-LD, focus keyword. Update needs `version` |
| `audit_seo` | Title/description length, H1 count, duplicates, missing alt, thin content, canonical, noindex, missing schema |
| `audit_performance` | Core Web Vitals basics: render-blocking CSS/JS, images without size, not lazy, large or not WebP, HTML size |
| `get_internal_links` | Links in/out per page, orphan pages |
| `check_broken_links` | Internal links (and outside links with `check_external`) |
| `validate_sitemap_robots` | Sitemap contents vs robots.txt, published pages left out |
| `generate_schema` | Article, Service, FAQPage (read from the page FAQ), LocalBusiness, BreadcrumbList; `save: true` adds it |

**Images**

| Tool | What it does |
|---|---|
| `upload_image` | From a URL or base64. `alt_text` required. Converted to WebP, compressed, scaled to 1920px, stored in `public/assets/images/uploads/YYYY/MM` |
| `list_images` / `update_image` | Media library; changing alt text also updates `<img>` tags in DB content |
| `delete_image` | To the trash (the file stays). Refused while content still uses it |

**Redirects and settings**

| Tool | What it does |
|---|---|
| `list_redirects` / `save_redirect` / `delete_redirect` | 301/302 redirects (no chains; never over a live page) |
| `get_settings` / `update_settings` | `site_name`, `default_meta_description`, `default_og_image`, `robots_txt`, `social_links`, `contact` (footer) |

**Safety and operations**

| Tool | What it does |
|---|---|
| `activity_log` | Recent changes with old and new values |
| `list_trash` / `restore_item` | Trashed pages, posts and images |
| `clear_cache` | view, route, config, app caches (and the inlined critical CSS) |
| `list_stale_posts` | Published posts not updated for N days |

### Safety rules (built into the tools and the server instructions)

- New pages and posts are drafts. Only `update_page` / `update_blog` with `status: "published"` makes them public. Claude is told to do that only when the owner asks.
- Update tools refuse to run without the `version` from the matching get tool, so Claude must read before writing and can't overwrite newer edits.
- Deletes need `confirm: true`. Pages, posts and images are soft-deleted and can be restored.
- Slugs are checked across pages, posts and the trash. The home page can't be deleted or renamed.

## .env keys

| Key | Purpose |
|---|---|
| `APP_URL` | Site address (used by console commands) |
| `DB_*` | Database (MySQL on live, SQLite locally) |
| `MCP_TOKEN` | Bearer token for `/api/mcp` (64+ random characters) |
| `GA_MEASUREMENT_ID` | Google Analytics 4 ID (`G-…`); empty = no analytics |
| `MAIL_*` | Booking form email |

## Deploy

First deploy of the database-driven version (the live site still has the content only in Blade):

```bash
# 1. back up the live database
mysqldump -h <host> -u <user> -p <database> > backup-$(date +%Y%m%d-%H%M).sql

# 2. code and packages
git pull
composer install --no-dev --optimize-autoloader

# 3. tables, then the content (dry run first: it reports what it would import and saves nothing)
php artisan migrate --force
php artisan content:import --dry-run
php artisan content:import

# 4. WebP copies of the JPEG/PNG images in use (originals stay)
php artisan images:webp

# 5. MCP token (put MCP_TOKEN in .env first)
php artisan mcp:token

# 6. caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

`content:import` never overwrites rows that already exist, so running it again is safe. It reads `resources/views/*` (pages and posts), `resources/views/seo/*` (the old Yoast tags) and `resources/data/blog-posts.php`. Keep those files until the live import is done.

Later deploys: `git pull`, `composer install --no-dev`, `php artisan migrate --force`, `php artisan content:sections` (moves newly converted pages into sections; pages that already have sections are skipped), `php artisan images:webp`, then the three cache commands.

After editing CSS or JS in `public/assets`: `node scripts/minify-assets.mjs` (rebuilds the `.min` files the site serves).

## Tests

```bash
php artisan test
```

The tests import the content into an in-memory database. They cover pages, posts, redirects, drafts, H1s and the MCP server: auth, tool list, draft/version/confirm rules, trash and slug redirects.
