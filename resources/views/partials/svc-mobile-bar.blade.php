{{-- Phone action bar (mobile) of a service page; WhatsApp link from its svc_hero section --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone_link' => '+971522946276'];
    $whatsapp = $page->sections->firstWhere('type', 'svc_hero')?->data['whatsapp'] ?? 'https://wa.me/971522946276';
@endphp
<div class="svc-mobile-bar">
    <a href="tel:{{ $contact['phone_link'] }}">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
    <a class="svc-mobile-wa" href="{{ $whatsapp }}" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
    <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
</div>
