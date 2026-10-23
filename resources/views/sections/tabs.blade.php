{{-- tabs: one tab per topic (tabs from service.css / service.js) --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
    $id = $s['_id'] ?? $section->key;
@endphp
<section class="svc-section svc-grey {{ $s['_class'] ?? 'home-tabs' }}">
    <div class="svc-container">
        @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
        <p class="svc-title home-tabs-title">{{ $s['heading'] }}</p>
        <div class="svc-tabs" data-tabs>
            <div class="svc-tab-list" role="tablist">
                @foreach ($s['tabs'] as $i => $tab)
                    <button type="button" class="svc-tab{{ $i === 0 ? ' is-active' : '' }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="{{ $id }}-panel-{{ $i }}" id="{{ $id }}-tab-{{ $i }}">
                        @include('partials.icon', ['name' => $tab['icon']])
                        <span>{{ $tab['label'] }}</span>
                    </button>
                @endforeach
            </div>
            <div class="svc-tab-panels">
                @foreach ($s['tabs'] as $i => $tab)
                    <div class="svc-panel{{ $i === 0 ? ' is-active' : '' }}" role="tabpanel" id="{{ $id }}-panel-{{ $i }}" aria-labelledby="{{ $id }}-tab-{{ $i }}">
                        <img src="%%BASE%%/assets/images/{{ $tab['image'] }}" alt="{{ $tab['alt'] }}" loading="lazy">
                        <div class="svc-panel-body">
                            <h2>{{ $tab['heading'] }}</h2>
                            <div class="svc-panel-text">{!! $tab['body'] !!}</div>
                            <div class="svc-panel-buttons">
                                <a class="svc-btn svc-btn-dark" href="#quote">Book Your Session</a>
                                <a class="svc-btn svc-btn-outline" href="tel:{{ $contact['phone_link'] }}">@include('partials.icon', ['name' => 'phone-alt']) {{ $s['_phone_label'] ?? $contact['phone'] }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
