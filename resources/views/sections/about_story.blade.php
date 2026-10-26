{{-- about_story: story text beside a video (about.css) --}}
<section class="section about">
    <div class="container">
        <div class="about-row">
            <div class="about-text">
                @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
                <h2 class="title">{{ $s['heading'] }}</h2>
                <div class="text">
                    @foreach ($s['paragraphs'] as $paragraph)
                        <p>{!! $paragraph !!}</p>
                    @endforeach
                </div>
                <div class="about-buttons buttons">
                    <a class="btn" href="{{ \App\Support\Sections\SectionTypes::href($s['button']['link']) }}">{{ $s['button']['text'] }} @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline" href="tel:%20+971522946276">+971 52 2946276 @include('partials.icon', ['name' => 'phone-alt'])</a>
                </div>
            </div>
            <div class="about-video">
                <video src="%%BASE%%/assets/images/{{ $s['video'] }}" autoplay controls controlslist="nodownload" playsinline></video>
                @if (! empty($s['badge_number']) || ! empty($s['badge_text']))
                    <p class="about-badge"><strong>{{ $s['badge_number'] ?? '' }}</strong> {{ $s['badge_text'] ?? '' }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
