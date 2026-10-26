{{-- stats: dark strip of numbers --}}
<x-stats :class="$s['_class'] ?? ''" :items="array_map(fn ($item) => [$item['label'], is_numeric($item['number']) ? (int) $item['number'] : $item['number'], $item['suffix'] ?? ''], $s['items'])" />
