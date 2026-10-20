{{-- Page hero: background image (path under assets/images), eyebrow, h1, intro text (slot), two buttons --}}
@props(['image', 'title', 'eyebrow' => 'Dubai · Abu Dhabi · All UAE', 'book' => 'Book a session', 'phone' => '+971 52 294 6276'])
<section {{ $attributes->merge(['class' => 'page-hero']) }} style="background-image: url('%%BASE%%/assets/images/{{ $image }}')">
    <div class="page-hero-inner">
        <div class="page-hero-content">
            <p class="page-hero-eyebrow">{{ $eyebrow }}</p>
            <h1>{{ $title }}</h1>
            <div class="page-hero-text">
                <p>{{ $slot }}</p>
            </div>
            <x-cta-buttons :book="$book" :phone="$phone" />
        </div>
    </div>
</section>
