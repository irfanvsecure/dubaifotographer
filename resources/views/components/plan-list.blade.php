{{--
    Two columns: intro (eyebrow, h3 title, text slot, buttons) on the left, a list of
    steps with thin dividers on the right. items: HTML strings (wrap in <p> when the live page had one).
--}}
@props(['eyebrow', 'title', 'items'])
<section {{ $attributes->merge(['class' => 'section plan-section']) }}>
    <div class="container">
        <div class="plan-row">
            <div class="plan-intro">
                <p class="eyebrow">{{ $eyebrow }}</p>
                <h3 class="title">{{ $title }}</h3>
                <div class="text">{{ $slot }}</div>
                <x-cta-buttons />
            </div>
            <ul class="plan-list">
                @foreach ($items as $item)
                    <li class="text">{!! $item !!}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
