{{--
    <head> SEO tags for a page or blog post, built from its seo_meta row (MCP: get_seo / update_seo).
    Empty fields fall back to the page itself and the site settings.
--}}
@php
    $seo = $entity->seo;
    $isBlog = $entity instanceof \App\Models\Blog;
    $siteName = \App\Models\Setting::get('site_name', 'dubaifotographer');
    $url = '%%BASE%%'.$entity->path();
    $title = $seo?->meta_title ?: $entity->title.' - '.$siteName;
    $description = $seo?->meta_description ?: \App\Models\Setting::get('default_meta_description');
    $image = $seo?->og_image
        ?: ($isBlog && $entity->featured_image ? '%%BASE%%/assets/images/'.$entity->featured_image : null)
        ?: '%%BASE%%/'.\App\Models\Setting::get('default_og_image', 'assets/images/2026/04/dubaifotographer-logo-e1782899876206.png');
@endphp
<title>{{ $title }}</title>
<meta name="robots" content="{{ $seo?->robots ?: 'index, follow' }}"/>
@if ($description)
<meta name="description" content="{{ $description }}"/>
@endif
<link rel="canonical" href="{{ $seo?->canonical_url ?: $url }}"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="{{ $isBlog ? 'article' : 'website' }}"/>
<meta property="og:title" content="{{ $seo?->og_title ?: $title }}"/>
@if ($seo?->og_description ?: $description)
<meta property="og:description" content="{{ $seo?->og_description ?: $description }}"/>
@endif
<meta property="og:url" content="{{ $url }}"/>
<meta property="og:site_name" content="{{ $siteName }}"/>
<meta property="og:image" content="{{ $image }}"/>
@if ($isBlog && $entity->published_at)
<meta property="article:published_time" content="{{ $entity->published_at->toAtomString() }}"/>
@endif
@if ($entity->updated_at)
<meta property="article:modified_time" content="{{ $entity->updated_at->toAtomString() }}"/>
@endif
<meta name="twitter:card" content="summary_large_image"/>
@foreach ($seo?->schemas() ?? [] as $schema)
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endforeach
