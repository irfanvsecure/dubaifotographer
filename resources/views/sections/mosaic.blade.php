{{-- mosaic: photo tiles for industries --}}
<x-mosaic class="{{ $s['_class'] ?? 'section-sand' }}" :eyebrow="$s['eyebrow'] ?? ''" :title="$s['heading']" :tiles="array_map(fn ($tile) => [$tile['image'], $tile['title'], $tile['text']], $s['tiles'])" />
