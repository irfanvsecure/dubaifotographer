{{-- Body of a designed page: its page_sections rows in order, each drawn by resources/views/sections/<type> --}}
@php
    // service pages: every WhatsApp button uses the link set on the svc_hero section
    $whatsapp = $page->sections->firstWhere('type', 'svc_hero')?->data['whatsapp'] ?? 'https://wa.me/971522946276';
@endphp
@foreach ($page->sections as $section)
    @include('sections.'.$section->type, ['s' => $section->data, 'section' => $section, 'whatsapp' => $whatsapp])
@endforeach
