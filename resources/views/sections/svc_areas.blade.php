{{-- svc_areas: text beside a two-column table --}}
<section class="svc-section">
    <div class="svc-container svc-areas">
        <div class="svc-areas-copy">
            <h2 class="svc-title">{{ $s['heading'] }}</h2>
            <p class="svc-text">{{ $s['text'] }}</p>
        </div>
        <div class="svc-table">
            <div class="svc-table-row svc-table-head"><span>{{ $s['columns'][0] }}</span><span>{{ $s['columns'][1] }}</span></div>
            @foreach ($s['rows'] as [$left, $right])
                <div class="svc-table-row"><span>{{ $left }}</span><span>{{ $right }}</span></div>
            @endforeach
        </div>
    </div>
</section>
