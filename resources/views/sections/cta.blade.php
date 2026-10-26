{{-- cta: closing call to action on black --}}
<x-cta :class="$s['_class'] ?? ''" :eyebrow="$s['eyebrow'] ?? ''" :title="$s['heading']">
    <p>{{ $s['text'] }}</p>
</x-cta>
