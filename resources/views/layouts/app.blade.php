<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('seo')
    <link rel="icon" href="%%BASE%%/assets/images/2026/04/dubai-fav-150x150.png" sizes="32x32">
    <link rel="icon" href="%%BASE%%/assets/images/2026/04/dubai-fav-300x300.png" sizes="192x192">
    <link rel="apple-touch-icon" href="%%BASE%%/assets/images/2026/04/dubai-fav-300x300.png">
    <link rel="stylesheet" href="%%BASE%%/assets/css/fonts.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/main.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/whatsapp.css">
    @stack('styles')
</head>
<body>
    @include('partials.header')

    <main id="content">
        @yield('content')
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
