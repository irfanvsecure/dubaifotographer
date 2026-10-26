{{-- svc_feature: dark band, text beside labelled photos --}}
<section class="svc-section svc-dark">
    <div class="svc-container svc-feature">
        <div class="svc-feature-copy">
            <h2 class="svc-title">{{ $s['heading'] }}</h2>
            <div class="svc-feature-text">{!! $s['body'] !!}</div>
            <a class="svc-btn svc-btn-gold" href="#quote">{{ $s['button'] }}</a>
        </div>
        <div class="svc-feature-photos">
            @foreach ($s['photos'] as $photo)
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/{{ $photo['image'] }}')"><span>{{ $photo['label'] }}</span></div>
            @endforeach
        </div>
    </div>
</section>
