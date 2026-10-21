{{--
    Article layout for blog posts and text pages (policies, FAQ).

    <x-article variant="post" :title="$title" author="Abu Bakar" author-url="..." date="August 10, 2026"
               :prev="[url, label, title?]" :next="[url, label, title?]" comments="7841">
        @verbatim ...body html... @endverbatim
    </x-article>

    variant   page   : plain white page, title + body (policies, FAQ)
              post   : light page background, white card with title, author/date meta and body, then
                       previous/next links and the comment form
              boxed  : like post, but the featured image and body sit in a narrow centred column
              full   : full-width article without card (title, featured image and body in any order)
              narrow : (with post) every text block limited to the 750px content width
              flush  : (with post) no space between the header and the text
              stack  : (with full) body made of separate blocks spaced by a fixed gap
    class     full only: article-sheet (white 80% sheet), article-title-center, article-title-dark,
              article-text-black, article-shape (angled band on top), article-plain (white page)
    order     full only: order of title / media / body, e.g. "media,title,body"
    title-id  id of the title heading; the title is then the first Table of Contents entry
    toc       "before-title": Table of Contents above the title (full only). Otherwise it is
              placed where the body contains <!--toc-->
    toc-class extra classes for the TOC box: toc-plain (icon-less toggle), toc-spaced (toggle on its own line)
    toc-items [[level, id, label], ...] fixed TOC entries; default: generated from the body
              headings that have an id (and the title when title-id is set)
    media     slot: featured image
    cta       show the closing "free quote" block and the sticky sidebar (quote card + "In this
              article" list on wide screens). Default: on for posts (every variant except page)
--}}
@props([
    'variant' => 'post',
    'title' => '',
    'titleId' => null,
    'order' => 'title,media,body',
    'toc' => null,
    'tocItems' => null,
    'tocClass' => '',
    'author' => null,
    'authorUrl' => null,
    'date' => null,
    'prev' => null,
    'next' => null,
    'comments' => null,
    'cta' => null,
])
@php
    $body = trim((string) $slot);
    $variants = explode(' ', $variant);
    $isFull = in_array('full', $variants);
    $showCta = $cta ?? ! in_array('page', $variants);
    // posts that already end with their own quote box (.promo) skip the closing block
    $showEndCta = $showCta && ! str_contains($body, 'class="promo');
    $readMinutes = max(1, (int) round(str_word_count(strip_tags($body)) / 220));

    // Table of Contents entries: [level, id, label]
    $items = $tocItems;
    if ($items === null && (str_contains($body, '<!--toc-->') || $toc === 'before-title')) {
        $items = [];
        if ($titleId) {
            $items[] = [1, $titleId, $title];
        }
        preg_match_all('#<h([1-6])\b[^>]*\bid="([^"]+)"[^>]*>(.*?)</h\1>#s', $body, $headings, PREG_SET_ORDER);
        foreach ($headings as $h) {
            $label = html_entity_decode(strip_tags($h[3]), ENT_QUOTES | ENT_HTML5);
            $items[] = [(int) $h[1], $h[2], preg_replace('/^[\s\x{a0}]+|[\s\x{a0}]+$/u', '', preg_replace('/\s+/u', ' ', $label))];
        }
    }
    $tocHtml = '';
    if ($items) {
        // nested lists following the heading levels
        $list = '';
        $stack = [];
        foreach ($items as [$level, $id, $label]) {
            $link = '<a href="#'.e($id, false).'">'.e($label).'</a>';
            if (! $stack) {
                $list .= '<ul class="toc-list"><li>'.$link;
                $stack[] = $level;
            } elseif ($level > end($stack)) {
                // skipped levels get an empty entry (numbered 0, like the plugin did)
                for ($l = end($stack) + 1; $l < $level; $l++) {
                    $list .= '<ul><li class="toc-skip">';
                    $stack[] = $l;
                }
                $list .= '<ul><li>'.$link;
                $stack[] = $level;
            } else {
                while (count($stack) > 1 && $level < end($stack)) {
                    $list .= '</li></ul>';
                    array_pop($stack);
                }
                $list .= '</li><li>'.$link;
            }
        }
        $list .= str_repeat('</li></ul>', count($stack));
        $tocHtml = '<div class="'.e(trim('toc '.$tocClass)).'">'
            .'<div class="toc-head"><p class="toc-title">Table of Contents</p>'
            .'<button type="button" class="toc-toggle" aria-expanded="true" aria-label="Toggle Table of Content"><span class="screen-reader-text">Toggle</span>'
            .'<svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z"/></svg>'
            .'<svg width="10" height="10" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z"/></svg>'
            .'</button></div>'
            .'<nav>'.$list.'</nav></div>';
    }
    $arrowLeft = '<svg viewBox="0 0 448 512" aria-hidden="true"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>';
    $arrowRight = '<svg viewBox="0 0 448 512" aria-hidden="true"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>';
    $tocFirst = $toc === 'before-title';
    if ($tocHtml && ! $tocFirst) {
        $body = str_replace('<!--toc-->', $tocHtml, $body);
    }
    $titleTag = '<h1 class="article-title"'.($titleId ? ' id="'.e($titleId).'"' : '').'>'.e($title).'</h1>';
@endphp

@once
    @push('styles')
        <link rel="stylesheet" href="%%BASE%%/assets/css/pages/article.css">
    @endpush
    @push('scripts')
        <script src="%%BASE%%/assets/js/article.js"></script>
    @endpush
@endonce

<section {{ $attributes->class(array_merge(['article'], array_map(fn ($v) => 'article-'.$v, $variants), $showCta ? ['article-has-cta'] : [])) }}>
    @if ($showCta)
        <div class="article-progress" aria-hidden="true"><span></span></div>
    @endif
    <div class="article-container">
      <div class="article-layout">
        <div class="article-primary">
        @if ($showCta)
            <div class="article-kicker">
                <a href="%%BASE%%/our-blog">{!! $arrowLeft !!} Our Blog</a>
                <span>{{ $readMinutes }} min read</span>
            </div>
        @endif
        @if ($isFull)
            <div class="article-main">
                <div class="article-flow">
                    @foreach (explode(',', $order) as $part)
                        @if ($part === 'media' && isset($media))
                            <figure class="article-media">{{ $media }}</figure>
                        @elseif ($part === 'title' && $tocFirst)
                            <div class="article-heading">{!! $tocHtml !!}{!! $titleTag !!}</div>
                        @elseif ($part === 'title')
                            {!! $titleTag !!}
                        @elseif ($part === 'body')
                            <div class="article-body">
{!! $body !!}
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            @if ($showEndCta)
                <aside class="article-cta" aria-label="Get a free quote">
                    <div class="article-cta-text">
                        <p class="eyebrow">FREE QUOTE</p>
                        <p class="article-cta-title">Ready to plan your shoot?</p>
                        <p class="article-cta-lead">Tell us about your event, product or property and get a tailored quote from our team, usually within a few hours.</p>
                        <ul class="article-cta-trust">
                            <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                            <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                            <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                            <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                        </ul>
                    </div>
                    <div class="article-cta-actions">
                        <a class="btn" href="%%BASE%%/booking-form">Get a Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                        <a class="btn btn-outline" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp Us</a>
                        <a class="article-cta-phone" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
                    </div>
                </aside>
            @endif

            @if ($prev || $next)
                <nav class="post-nav" aria-label="Posts">
                    <div class="post-nav-prev">
                        @if ($prev)
                            <a href="{{ $prev[0] }}" title="{{ $prev[2] ?? $prev[1] }}" rel="prev"><span class="post-nav-label" aria-hidden="true">{!! $arrowLeft !!} Previous</span><p>{{ $prev[1] }}</p></a>
                        @endif
                    </div>
                    <div class="post-nav-next">
                        @if ($next)
                            <a href="{{ $next[0] }}" title="{{ $next[2] ?? $next[1] }}" rel="next"><span class="post-nav-label" aria-hidden="true">Next {!! $arrowRight !!}</span><p>{{ $next[1] }}</p></a>
                        @endif
                    </div>
                </nav>
            @endif
        @else
            <article class="article-main">
                <header class="article-header">
                    {!! $titleTag !!}
                    @if ($author)
                        <div class="article-meta">By <a href="{{ $authorUrl }}" title="View all posts by {{ $author }}" rel="author">{{ $author }}</a> / <span>{{ $date }}</span></div>
                    @endif
                </header>
                @if (isset($media))
                    <div class="article-column">
                        <div class="article-column-inner">
                            <figure class="article-media">{{ $media }}</figure>
                            <div class="article-body">
{!! $body !!}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="article-body">
{!! $body !!}
                    </div>
                @endif
            </article>

            @if ($showEndCta)
                <aside class="article-cta" aria-label="Get a free quote">
                    <div class="article-cta-text">
                        <p class="eyebrow">FREE QUOTE</p>
                        <p class="article-cta-title">Ready to plan your shoot?</p>
                        <p class="article-cta-lead">Tell us about your event, product or property and get a tailored quote from our team, usually within a few hours.</p>
                        <ul class="article-cta-trust">
                            <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                            <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                            <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                            <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                        </ul>
                    </div>
                    <div class="article-cta-actions">
                        <a class="btn" href="%%BASE%%/booking-form">Get a Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                        <a class="btn btn-outline" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp Us</a>
                        <a class="article-cta-phone" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
                    </div>
                </aside>
            @endif

            @if ($prev || $next)
                <nav class="post-nav" aria-label="Posts">
                    <div class="post-nav-prev">
                        @if ($prev)
                            <a href="{{ $prev[0] }}" title="{{ $prev[2] ?? $prev[1] }}" rel="prev"><span class="post-nav-label" aria-hidden="true">{!! $arrowLeft !!} Previous</span><p>{{ $prev[1] }}</p></a>
                        @endif
                    </div>
                    <div class="post-nav-next">
                        @if ($next)
                            <a href="{{ $next[0] }}" title="{{ $next[2] ?? $next[1] }}" rel="next"><span class="post-nav-label" aria-hidden="true">Next {!! $arrowRight !!}</span><p>{{ $next[1] }}</p></a>
                        @endif
                    </div>
                </nav>
            @endif

            @if ($comments)
                <div id="comments" class="comments">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Comment <small><a id="cancel-comment-reply-link" href="#respond" hidden>Cancel Reply</a></small></h3>
                        <form action="%%BASE%%/wp-comments-post.php" method="post" class="comment-form">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span>Required fields are marked <span class="required">*</span></span></p>
                            <div class="comment-field">
                                <label for="comment" class="screen-reader-text">Type here..</label>
                                <textarea id="comment" name="comment" placeholder="Type here.." cols="45" rows="8" aria-required="true"></textarea>
                            </div>
                            <div class="comment-fields">
                                <p><label for="author" class="screen-reader-text">Name*</label><input id="author" name="author" type="text" placeholder="Name*" size="30" aria-required="true" autocomplete="name"></p>
                                <p><label for="email" class="screen-reader-text">Email*</label><input id="email" name="email" type="text" placeholder="Email*" size="30" aria-required="true" autocomplete="email"></p>
                                <p><label for="url" class="screen-reader-text">Website</label><input id="url" name="url" type="text" placeholder="Website" size="30" autocomplete="url"></p>
                            </div>
                            <p class="comment-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                            <p class="comment-submit"><input name="submit" type="submit" id="submit" value="Post Comment"><input type="hidden" name="comment_post_ID" value="{{ $comments }}"><input type="hidden" name="comment_parent" value="0"></p>
                        </form>
                    </div>
                </div>
            @endif
        @endif
        </div>
        @if ($showCta)
            <aside class="article-aside" aria-label="Book a shoot">
                <div class="article-aside-inner">
                    <div class="aside-quote">
                        <p class="eyebrow">DUBAI FOTOGRAPHER</p>
                        <p class="aside-quote-title">Get a free quote for your shoot</p>
                        <p class="aside-quote-rating">@include('partials.icon', ['name' => 'star'])@include('partials.icon', ['name' => 'star'])@include('partials.icon', ['name' => 'star'])@include('partials.icon', ['name' => 'star'])@include('partials.icon', ['name' => 'star']) <span>5.0 average client rating</span></p>
                        <a class="btn" href="%%BASE%%/booking-form">Get a Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                        <a class="btn btn-outline" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
                        <p class="aside-quote-note">Since 2014 &middot; Licensed &amp; insured &middot; All 7 Emirates</p>
                    </div>
                    <nav class="aside-toc" aria-label="In this article" hidden>
                        <p class="aside-toc-title">In this article</p>
                    </nav>
                </div>
            </aside>
        @endif
      </div>
    </div>
</section>
