{{-- process: numbered steps on a dark band --}}
<section class="section section-dark process">
    <div class="container">
        @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
        <h2 class="title light">{{ $s['heading'] }}</h2>
        <ol class="process-list">
            @foreach ($s['steps'] as $i => $step)
                <li class="process-step">
                    <span class="process-number">0<span data-count="{{ $i + 1 }}">{{ $i + 1 }}</span></span>
                    <div class="process-body">
                        <p class="process-title">{{ $step['title'] }}</p>
                        <p class="process-text">{{ $step['text'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
