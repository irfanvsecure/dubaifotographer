{{-- svc_marquee: scrolling keywords (the list is doubled so the loop is seamless) --}}
<section class="svc-marquee" aria-label="What we cover">
    <ul>
        @foreach ($s['items'] as $item)
            <li>{{ $item }}</li>
        @endforeach
        @foreach ($s['items'] as $item)
            <li aria-hidden="true">{{ $item }}</li>
        @endforeach
    </ul>
</section>
