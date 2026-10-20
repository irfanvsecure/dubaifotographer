{{--
    Section with a centred heading block (strong eyebrow, title, optional intro) followed by the slot
    (e.g. .card-grid or .box-grid). Background via class: section-cream / section-sand / section-black.
--}}
@props(['eyebrow', 'title', 'intro' => null])
<section {{ $attributes->merge(['class' => 'section panel']) }}>
    <div class="container">
        <div class="panel-inner">
            <div class="section-head">
                <p class="eyebrow eyebrow-strong">{{ $eyebrow }}</p>
                <h2 class="title">{!! $title !!}</h2>
                @if ($intro)
                    <div class="text">{!! $intro !!}</div>
                @endif
            </div>
            {{ $slot }}
        </div>
    </div>
</section>
