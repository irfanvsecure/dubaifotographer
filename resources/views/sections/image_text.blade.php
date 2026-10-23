{{-- image_text: photo beside text, a button and the phone button --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
@endphp
<section class="section">
    <div class="container">
        <div class="split split-plain">
            <div class="split-media" style="background-image: url('%%BASE%%/assets/images/{{ $s['image'] }}')"></div>
            <div class="split-body">
                @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
                <h2 class="title">{!! $s['heading'] !!}</h2>
                @foreach ($s['paragraphs'] as $paragraph)
                    <div class="text">{!! $paragraph !!}</div>
                @endforeach
                <div class="buttons">
                    <a class="btn" href="{{ \App\Support\Sections\SectionTypes::href($s['button']['link']) }}">{{ $s['button']['text'] }} @include('partials.icon', ['name' => 'arrow-right'])</a>
                    @if ($s['show_phone'] ?? true)
                        <a class="btn btn-outline" href="tel:%20{{ $contact['phone_link'] }}">{{ $s['_phone_label'] ?? $contact['phone'] }} @include('partials.icon', ['name' => 'phone-alt'])</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
