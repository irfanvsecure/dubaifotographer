{{-- Dark founder quote card (photo + gold frame + quote). Slot = quote text. --}}
@props([
    'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
    'alt' => 'Abdul Rehman, founder of Dubai Fotographer',
    'eyebrow' => '- From our founder',
    'name' => 'Abdul Rehman',
    'role' => 'Founder, Dubai Fotographer · Since 2014',
])
<section {{ $attributes->merge(['class' => 'section founder']) }}>
    <div class="container">
        <figure class="founder-card">
            <div class="founder-photo">
                <img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy">
            </div>
            <div class="founder-body">
                <p class="eyebrow">{{ $eyebrow }}</p>
                <svg class="founder-mark" viewBox="0 0 48 36" aria-hidden="true"><path d="M0 36V22C0 9.6 6.2 2.3 18.6 0l2 4.6C13.5 6.8 10 11 9.6 17H19v19H0zm27 0V22C27 9.6 33.2 2.3 45.6 0l2 4.6C40.5 6.8 37 11 36.6 17H46v19H27z"/></svg>
                <blockquote class="founder-quote">
                    <p>{{ $slot }}</p>
                </blockquote>
                <figcaption class="founder-name">
                    <strong>{{ $name }}</strong>
                    <span>{{ $role }}</span>
                </figcaption>
            </div>
        </figure>
    </div>
</section>
