{{-- trust_strip: thin strip of trust points (services-overview.css) --}}
<div class="svo-trust">
    <ul>
        @foreach ($s['items'] as $item)
            <li>@include('partials.icon', ['name' => $item['icon']]) {{ $item['text'] }}</li>
        @endforeach
    </ul>
</div>
