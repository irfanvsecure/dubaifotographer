{{-- svc_facts: quick facts under the hero --}}
<section class="svc-facts">
    <div class="svc-facts-inner">
        @foreach ($s['items'] as $item)
            <div class="svc-fact">
                <p class="svc-fact-title">{{ $item['title'] }}</p>
                <p class="svc-fact-text">{{ $item['text'] }}</p>
            </div>
        @endforeach
    </div>
</section>
