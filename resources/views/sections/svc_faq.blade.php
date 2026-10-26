{{-- svc_faq: accordion beside a WhatsApp box; its questions also feed the page FAQPage schema (Sections\FaqSchema) --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
@endphp
<section class="svc-section">
    <div class="svc-container svc-faq">
        <div class="svc-faq-list">
            <h2 class="svc-title">{{ $s['heading'] }}</h2>
            <div class="svc-accordion">
                @foreach ($s['items'] as $i => $item)
                    <details @if ($i === 0) open @endif>
                        <summary>
                            <h3>{{ $item['question'] }}</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer">{!! $item['answer'] !!}</div>
                    </details>
                @endforeach
            </div>
        </div>
        <div class="svc-faq-box">
            <p class="svc-faq-box-title">{{ $s['box_title'] }}</p>
            <p>{{ $s['box_text'] }}</p>
            <a class="svc-btn svc-btn-green" href="{{ $whatsapp }}" target="_blank">WhatsApp Us</a>
            <a class="svc-faq-call" href="tel:{{ $contact['phone_link'] }}">or call {{ $contact['phone'] }}</a>
        </div>
    </div>
</section>
