{{-- Thin strip of trust points under the hero. items: HTML strings (e.g. '<b>Licensed</b> &amp; insured') --}}
@props(['items'])
<section {{ $attributes->merge(['class' => 'trust-bar']) }}>
    <div class="trust-bar-inner">
        <ul class="trust-bar-list">
            @foreach ($items as $item)
                <li>{!! $item !!}</li>
            @endforeach
        </ul>
    </div>
</section>
