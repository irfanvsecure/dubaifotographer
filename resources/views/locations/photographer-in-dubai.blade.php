@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-dubai')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location-page.css">
@endpush

@php
    $page = [
        'name' => 'Dubai',
        'hero' => [
            'image' => '2026/07/Dubai-skyline-Burj-Khalifa.jpg',
            'eyebrow' => 'DUBAI · BUSINESS BAY · DUBAI MARINA',
            'title' => 'Professional Photographer in Dubai',
            'text' => 'Corporate events, real estate, weddings, products and portraits in Dubai. Our home city since 2014, covered by a licensed crew from our Business Bay base.',
        ],
        'intro' => [
            'image' => '2026/06/female-photographer-dubai-studio-768x429.webp',
            'alt' => 'Female photographer holding a camera in a Dubai photography studio',
            'eyebrow' => '- Dubai coverage',
            'title' => 'Our Home City, From Studio to Skyline',
            'paragraphs' => [
                'Dubai is where we are based and where we shoot most often. Our team works from Business Bay, so the towers of Downtown, the conference halls and the hotels along Sheikh Zayed Road are all part of our everyday work.',
                'The city asks a lot of a photographer. One week it is a product launch in a ballroom, the next a villa listing on the Palm or a family session in the desert at sunset. We bring the right crew and equipment for each job, and we plan the shot list with you before the day.',
                'Dubai venues also have their own rules on access, timing and permits. We know what hotels, malls and event halls usually ask for, and we sort it out with you early so your shoot day runs to plan.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Dubai',
            'title' => 'Photography Services in Dubai',
            'text' => 'Every service we offer is available in Dubai. Companies, developers, couples and families book these most.',
            'items' => [
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography in Dubai', 'Conferences, exhibitions, gala dinners and product launches, with video on request.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Dubai', 'Apartments, villas and new developments for agents, owners and developers.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Dubai', 'Hotel ballrooms, beach ceremonies and receptions, from getting ready to the last dance.'],
                ['2026/07/packaging-768x512.webp', 'Product packaging photography by Dubai Fotographer', '/product-photography-services-in-uae', 'Product Photography in Dubai', 'Catalogue, packaging and e-commerce images for Dubai brands and retailers.'],
                ['2026/06/opulent-grand-staircase-lobby-lu.webp', 'Hotel Photography in UAE', '/hotel-photography-service-in-uae', 'Hotel &amp; Resort Photography', 'Rooms, restaurants, pools and lifestyle images for Dubai hotels.'],
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Dubai', 'Relaxed family portraits at home, on the beach or in the desert.'],
                ['2026/07/Aerial-drone.webp', 'Aerial drone photography in the UAE', '/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Photography in Dubai', 'Licensed aerial shots of properties, events and construction projects.'],
                ['2026/07/Professional-portrait-photography-for-every-individual-business.webp', 'Professional portrait photography in the UAE', '/female-photographers-in-uae', 'Female Photographers in Dubai', 'Female photographers for family sessions, maternity shoots and women-only events.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Dubai',
            'text' => 'From glass towers to old souks and open dunes, Dubai has a backdrop for every kind of shoot. These are the ones clients ask for most.',
            'items' => [
                ['Downtown Dubai', 'Burj Khalifa and the fountains make the classic Dubai backdrop, especially at blue hour.'],
                ['Dubai Marina & JBR', 'Waterfront promenades and towers for lifestyle, couple and fashion shoots.'],
                ['Palm Jumeirah', 'Beachfront villas, resorts and skyline views, popular for real estate and hotel work.'],
                ['Al Fahidi & Dubai Creek', 'Wind towers, narrow lanes and abra boats for a traditional, heritage look.'],
                ['Dubai desert', 'Golden dunes for couples, family portraits and fashion, best in the last hours of daylight.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & access',
            'title' => 'Permits and Access for Shoots in Dubai',
            'paragraphs' => [
                'Hotels, malls and event venues in Dubai often need to approve an outside photographer first, and some charge a location fee. Commercial shoots in public places may also need a permit. We check what your location requires and contact the venue with you in advance, so there are no surprises on the day.',
                'Drone flights in Dubai follow UAE civil aviation rules, and many parts of the city are restricted. Our pilots fly licensed equipment and apply for approval for each flight, so aerial shoots need a little more notice. Read more on our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography page</a>.',
                'Any travel or venue cost is listed clearly in your quote, so you know the full price before you confirm.',
            ],
            'image' => '2026/07/Palm-Jumeirah.jpg',
            'alt' => 'Couple taking a photo in front of Atlantis The Palm, Dubai',
        ],
        'faq' => [
            'title' => 'Photographer in Dubai: Common Questions',
            'items' => [
                ['Where in Dubai are you based?', '<p>We are based in Business Bay, near Dubai Design District. We shoot at our clients’ locations across the whole city, as well as in a studio setup when the job needs one.</p>'],
                ['Can you cover a corporate event in Dubai with both photo and video?', '<p>Yes. We cover conferences, exhibitions, gala dinners and product launches with photographers and video crew, and we can record with several cameras for larger events.</p>'],
                ['Do I need a permit for a photoshoot in Dubai?', '<p>It depends on the location and the type of shoot. Hotels, malls and venues have their own rules, and commercial shoots in public places may need a permit. Tell us the location and we will check what it needs.</p>'],
                ['Can you fly a drone at my Dubai location?', '<p>Drone use is controlled across the UAE and many areas of Dubai are restricted. We apply for the required approval for each flight and only fly where it is permitted.</p>'],
                ['How do I get a price for a shoot in Dubai?', '<p>Send us the date, the location and what you need photographed or filmed. We reply the same day with crew availability and a written quote.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Dubai shoot',
            'title' => 'Request a Quote for Your Dubai Shoot',
            'paragraphs' => [
                'Tell us the date, the venue and what you need photographed. We reply quickly with availability and a clear price for your Dubai shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
