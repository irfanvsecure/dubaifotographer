<?php

namespace App\Support;

use App\Models\Blog;

/** Published posts for the blog listing and the "Guides for this service" links, newest first. */
class BlogIndex
{
    /** @return array<int, array{0: string, 1: ?string, 2: ?string, 3: string, 4: string, 5: string}> [slug, image, alt, title, date, topic] */
    public static function posts(): array
    {
        return Blog::query()
            ->with('category')
            ->where('status', 'published')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->get()
            ->map(fn (Blog $blog) => [
                $blog->slug,
                $blog->featured_image,
                $blog->featured_image_alt,
                $blog->layout['card_title'] ?? $blog->title,
                $blog->published_at?->format('F j, Y') ?? '',
                $blog->category?->name ?? 'Guide',
            ])
            ->all();
    }
}
