{{-- Dark stats strip. items: [label, number, suffix] --}}
@props(['items'])
<section {{ $attributes->merge(['class' => 'stats']) }}>
    <div class="stats-inner">
        @foreach ($items as [$label, $number, $suffix])
            <div class="stat">
                <p class="stat-number"><span @if (is_numeric($number)) data-count="{{ $number }}" @endif>{{ $number }}</span><span class="stat-suffix">{{ $suffix }}</span></p>
                <p class="stat-label">{{ $label }}</p>
            </div>
        @endforeach
    </div>
</section>
