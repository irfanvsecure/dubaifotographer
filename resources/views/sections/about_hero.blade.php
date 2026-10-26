{{-- about_hero: the page H1 (pages.h1) on a photo, text, booking + phone buttons, trust points (about.css) --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
@endphp
<section class="ab-hero" style="background-image: url('%%BASE%%/assets/images/{{ $s['image'] }}')">
    <div class="ab-hero-inner">
        @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
        <h1>{!! $page->h1 !!}</h1>
        <p class="ab-hero-text">{{ $s['text'] }}</p>
        <div class="buttons">
            <a class="btn" href="{{ \App\Support\Sections\SectionTypes::href($s['button']['link']) }}">{{ $s['button']['text'] }} @include('partials.icon', ['name' => 'arrow-right'])</a>
            <a class="btn btn-ghost" href="tel:{{ $contact['phone_link'] }}">@include('partials.icon', ['name' => 'phone-alt']) {{ $contact['phone'] }}</a>
        </div>
        <ul class="ab-trust">
            @foreach ($s['trust'] ?? [] as $point)
                <li>@include('partials.icon', ['name' => $point['icon']]) {{ $point['text'] }}</li>
            @endforeach
        </ul>
    </div>
</section>
