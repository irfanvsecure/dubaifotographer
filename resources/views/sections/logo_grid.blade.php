{{-- logo_grid: client logos in a grid (about.css) --}}
<section class="section section-sand ab-clients">
    <div class="container">
        <div class="ab-head center">
            @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
            <h2 class="title">{{ $s['heading'] }}</h2>
        </div>
        <ul class="ab-logos">
            @foreach ($s['items'] as $item)
                <li><img src="%%BASE%%/assets/images/{{ $item['image'] }}" width="120" height="70" alt="{{ $item['alt'] }}" loading="lazy"></li>
            @endforeach
        </ul>
    </div>
</section>
