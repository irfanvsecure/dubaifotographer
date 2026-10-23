{{-- Body of a designed page: its page_sections rows in order, each drawn by resources/views/sections/<type> --}}
@foreach ($page->sections as $section)
    @include('sections.'.$section->type, ['s' => $section->data, 'section' => $section])
@endforeach
