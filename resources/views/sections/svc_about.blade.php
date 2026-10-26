{{-- svc_about: photo beside paragraphs --}}
<section class="svc-section">
    <div class="svc-container svc-about">
        <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/{{ $s['image'] }}')">

            @if (! empty($s['founder_caption']))<p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>@endif
        </div>
        <div class="svc-about-copy">
            <h2 class="svc-title">{{ $s['heading'] }}</h2>
            @foreach ($s['paragraphs'] as $paragraph)
                <div class="svc-text">{!! $paragraph !!}</div>
            @endforeach
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-dark" href="{{ $whatsapp }}" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </div>
</section>
