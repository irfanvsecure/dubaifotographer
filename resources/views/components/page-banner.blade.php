{{-- Short title banner on a darkened photo (about, contact, booking, portfolio, services) --}}
@props(['image', 'title'])
<section {{ $attributes->merge(['class' => 'page-banner']) }} style="background-image: url('%%BASE%%/assets/images/{{ $image }}')">
    <div class="page-banner-inner">
        <h1>{{ $title }}</h1>
    </div>
</section>
