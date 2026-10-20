{{-- FAQ accordion. items: [question, answer]; the first answer starts open. dark=false for the light variant --}}
@props(['items', 'eyebrow' => '- FAQ', 'title' => 'Common questions', 'dark' => true])
<section {{ $attributes->merge(['class' => 'section faq '.($dark ? 'section-black' : 'faq-light')]) }}>
    <div class="container">
        <div class="faq-box">
            <p class="eyebrow center">{{ $eyebrow }}</p>
            <h2 class="faq-title">{{ $title }}</h2>
            <div class="faq-list">
                @foreach ($items as $i => [$question, $answer])
                    <details @if ($i === 0) open @endif>
                        <summary>
                            <h3>{{ $question }}</h3>
                            <span class="faq-icon">
                                @include('partials.icon', ['name' => 'window-minimize', 'class' => 'faq-opened'])
                                @include('partials.icon', ['name' => 'plus', 'class' => 'faq-closed'])
                            </span>
                        </summary>
                        <div class="faq-answer">{!! $answer !!}</div>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
