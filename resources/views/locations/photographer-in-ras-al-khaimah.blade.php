@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-ras-al-khaimah')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location-page.css">
@endpush

@php
    $page = [
        'name' => 'Ras Al Khaimah',
        'hero' => [
            'image' => '2026/10/photographer-ras-al-khaimah-jebel-jais-road.jpg',
            'eyebrow' => 'RAS AL KHAIMAH · JEBEL JAIS · AL MARJAN ISLAND',
            'title' => 'Professional Photographer in Ras Al Khaimah',
            'text' => 'Resort weddings, hotel photography, drone work and travel shoots in Ras Al Khaimah. Mountains, beaches and desert in one emirate, captured by a licensed UAE crew.',
        ],
        'intro' => [
            'image' => '2026/10/ras-al-khaimah-skyline-waterfront-768x332.webp',
            'alt' => 'Ras Al Khaimah skyline across the water',
            'eyebrow' => '- Ras Al Khaimah coverage',
            'title' => 'Mountains, Beaches and Resorts in One Emirate',
            'paragraphs' => [
                'Ras Al Khaimah gives photographers more variety than almost anywhere in the country. In the morning you can be on the highest mountain road in the UAE. By the afternoon you can be on a quiet beach, and by sunset in red desert dunes.',
                'That range is why RAK has become a favourite for destination weddings and resort marketing. We photograph beach ceremonies at Al Marjan Island, room and amenity shoots for hotels, aerial footage of resorts and coastline, and holiday sessions for visiting families and couples.',
                'The drive from Dubai is roughly an hour, sometimes a little more. For weddings and full-day hotel shoots, our crew often travels the day before to scout the location and test the light. It costs us a little more time, and it saves you a lot of stress.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Ras Al Khaimah',
            'title' => 'Photography Services in Ras Al Khaimah',
            'text' => 'Every service we offer in Dubai is available in Ras Al Khaimah. Resorts, couples and visitors book these most.',
            'items' => [
                ['2026/06/opulent-grand-staircase-lobby-lu.webp', 'Hotel Photography in UAE', '/hotel-photography-service-in-uae', 'Hotel &amp; Resort Photography', 'Rooms, pools, restaurants and lifestyle images for RAK resorts and hotels.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Ras Al Khaimah', 'Beach ceremonies, resort receptions and destination weddings.'],
                ['2026/07/Aerial-drone.webp', 'Aerial drone photography in the UAE', '/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Photography in Ras Al Khaimah', 'Licensed aerial shots of resorts, coastline, mountains and desert.'],
                ['2026/07/Stunning-travel-photography-for-every-destination-in-the-UAE-768x512.webp', 'Travel photography at a UAE destination', '/travel-photography-in-uae', 'Travel Photography in Ras Al Khaimah', 'Holiday photoshoots for visitors at RAK’s beaches and landmarks.'],
                ['2026/07/Couple-honeymoon-photoshoots-UAE846-1-768x512.webp', 'Couple photoshoot in the UAE by Dubai Fotographer', '/couple-photography-in-uae', 'Couple Photography in Ras Al Khaimah', 'Honeymoon, engagement and anniversary sessions at sunset.'],
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Ras Al Khaimah', 'Relaxed family portraits on the beach or at your resort.'],
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Off-site retreats, conferences and team events at RAK resorts.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Ras Al Khaimah', 'Waterfront villas, apartments and new developments across the emirate.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Ras Al Khaimah',
            'text' => 'From the mountains to the sea, Ras Al Khaimah has a backdrop for every kind of shoot. These are the ones we use most.',
            'items' => [
                ['Jebel Jais', 'Dramatic mountain views and winding roads. Cooler air and spectacular light at sunrise and sunset.'],
                ['Al Marjan Island', 'Man-made islands lined with resorts and soft beaches. The go-to spot for beach weddings.'],
                ['Dhayah Fort', 'A hilltop fort above palm groves, with wide views and a strong sense of history.'],
                ['RAK Mangroves', 'Calm green waterways for natural portraits and peaceful couple sessions.'],
                ['Beach resorts', 'Private beaches, pools and gardens that make polished settings for weddings and marketing.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel to Ras Al Khaimah',
            'paragraphs' => [
                'Most resorts in Ras Al Khaimah allow photography for their own guests, but outside photographers often need the hotel’s approval, and some charge a location fee. We contact the resort with you in advance so there are no surprises on the day. Heritage sites such as Dhayah Fort may also have their own rules.',
                'Drone flights over resorts, mountains and the coast follow UAE civil aviation rules. Our pilots fly licensed equipment and apply for approval for each flight. Aerial shoots therefore need a little more notice. Read more on our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography page</a>.',
                'Travel to Ras Al Khaimah is listed clearly in your quote. For weddings and multi-day hotel projects we can include an overnight stay for the crew, so they are fresh and ready for an early start.',
            ],
            'image' => '2026/10/jebel-jais-aerial-winding-road-768x432.webp',
            'alt' => 'Aerial view of the winding mountain road on Jebel Jais, Ras Al Khaimah',
        ],
        'faq' => [
            'title' => 'Photographer in Ras Al Khaimah: Common Questions',
            'items' => [
                ['Do you photograph destination weddings in Ras Al Khaimah?', '<p>Yes. We cover beach ceremonies, resort receptions and getting-ready moments, and we can add drone footage and video. We usually visit the venue beforehand to plan the best spots and timings.</p>'],
                ['Can you shoot marketing photos for our RAK resort?', '<p>Yes. We photograph rooms, pools, restaurants, spa areas and lifestyle scenes with models or guests. We plan the shot list with your marketing team so the images work for your website, booking platforms and social media.</p>'],
                ['Is drone photography allowed at Jebel Jais?', '<p>Drone use is controlled across the UAE, and some areas around Jebel Jais have restrictions. We apply for the required approval for each flight and only fly where it is permitted.</p>'],
                ['Do you charge for travel to Ras Al Khaimah?', '<p>Travel is listed as a separate line in your quote, so you know the full price before confirming. For long or early shoots, an overnight stay for the crew may also be included.</p>'],
                ['Can we book a holiday photoshoot while staying in RAK?', '<p>Yes. Visitors often book a short session at their resort or on a nearby beach. Tell us where you are staying and we will suggest the best time and location.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Ras Al Khaimah shoot',
            'title' => 'Request a Quote for Your Ras Al Khaimah Shoot',
            'paragraphs' => [
                'Tell us the date, the venue and what you need photographed. We reply quickly with availability and a clear price for your Ras Al Khaimah shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
