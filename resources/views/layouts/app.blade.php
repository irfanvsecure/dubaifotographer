<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="FVp7IG3WVyp937E2xUhE4xWLwfFJ86MSk-gDn-MEJq0" />
    <meta name="google-site-verification" content="L_B6NwsvVC4mK9MVqO3nnPI9DZO1odgfTiUD71xIqxI" />
    {{-- SEO tags from seo_meta (SiteController); views without a DB row keep their own section --}}
    @isset($seoHead)
        {!! $seoHead !!}
    @else
        @yield('seo')
    @endisset
    @if ($ga = config('services.google_analytics'))
        {{-- gtag.js loads after the page has loaded, so it does not hold up the first screen;
             the page view queued in dataLayer is sent then --}}
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', @json($ga));
            window.addEventListener('load', function () {
                setTimeout(function () {
                    var s = document.createElement('script');
                    s.async = true;
                    s.src = 'https://www.googletagmanager.com/gtag/js?id=' + @json($ga);
                    document.head.appendChild(s);
                }, 1500);
            });
        </script>
    @endif
    <link rel="icon" href="%%BASE%%/assets/images/2026/04/dubai-fav-150x150.png" sizes="32x32">
    <link rel="icon" href="%%BASE%%/assets/images/2026/04/dubai-fav-300x300.png" sizes="192x192">
    <link rel="apple-touch-icon" href="%%BASE%%/assets/images/2026/04/dubai-fav-300x300.png">
    <link rel="stylesheet" href="%%BASE%%/assets/css/fonts.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/main.css">
    @stack('styles')
</head>
<body>
    @include('partials.header')

    <main id="content">
        @yield('content')
        @include('partials.related-guides')
    </main>

    @include('partials.footer')
    @include('partials.mobile-bar')
    {{-- Back to top: shown after scrolling down (main.js) --}}
    <button class="to-top" type="button" aria-label="Back to top"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5.6 4.3 13.3l1.4 1.4L11 9.4V20h2V9.4l5.3 5.3 1.4-1.4z"/></svg></button>
    @include('partials.whatsapp')

    <script>window.siteBase = "%%BASE%%";</script>
    @stack('scripts')
    <script src="%%BASE%%/assets/js/main.js"></script>
</body>
</html>
