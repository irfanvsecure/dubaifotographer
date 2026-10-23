{{-- booking: booking form with feature points --}}
<x-booking class="{{ $s['_class'] ?? 'booking-large' }}" :eyebrow="$s['eyebrow'] ?? '- Book your shoot'" :title="$s['heading']" :features="array_map(fn ($feature) => [$feature['icon'], $feature['title'], $feature['text']], $s['features'])">
    {!! $s['text'] !!}
</x-booking>
