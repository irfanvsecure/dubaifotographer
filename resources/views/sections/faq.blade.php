{{-- faq: accordion; its questions also feed the page FAQPage schema (Sections\FaqSchema) --}}
<x-faq class="{{ $s['_class'] ?? 'faq-soft' }}" :eyebrow="$s['eyebrow'] ?? '- FAQ'" :title="$s['heading'] ?? 'Common questions'" :items="array_map(fn ($item) => [$item['question'], $item['answer']], $s['items'])" />
