{{-- svc_steps: numbered steps --}}
<section class="svc-section svc-grey">
    <div class="svc-container">
        <h2 class="svc-title">{{ $s['heading'] }}</h2>
        <ol class="svc-steps">
            @foreach ($s['steps'] as $i => $step)
                <li><span class="svc-step-number">{{ $i + 1 }}</span>{!! $step !!}</li>
            @endforeach
        </ol>
        <div class="svc-steps-foot">
            @if (! empty($s['note'])){!! $s['note'] !!}@endif
            <a class="svc-btn svc-btn-dark" href="#quote">{{ $s['button'] }}</a>
        </div>
    </div>
</section>
