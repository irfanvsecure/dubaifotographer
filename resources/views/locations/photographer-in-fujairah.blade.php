@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-fujairah')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location.css">
@endpush

@php
    $page = [
        'name' => 'Fujairah',
        'hero' => [
            'image' => '2026/10/photographer-fujairah-coastal-village-boats.jpg',
            'eyebrow' => 'FUJAIRAH · DIBBA · AL BIDYAH · EAST COAST',
            'title' => 'Professional Photographer in Fujairah',
            'text' => 'Beach weddings, resort photography, couple sessions and drone work on the UAE’s east coast. Clear water, rugged mountains and quiet bays, photographed by a licensed crew.',
        ],
        'intro' => [
            'image' => '2026/10/fujairah-sea-aerial-768x531.webp',
            'alt' => 'Aerial view of clear blue sea off the Fujairah coast',
            'eyebrow' => '- Fujairah coverage',
            'title' => 'Photography on the UAE\'s East Coast',
            'paragraphs' => [
                'Fujairah faces the Gulf of Oman, not the Arabian Gulf, and you can see the difference in every photo. The water is clearer, the Hajar Mountains drop almost straight into the sea, and the beaches stay quiet even at weekends.',
                'Couples love it for exactly that reason. We photograph beach weddings and sunrise engagement sessions along the coast, resort campaigns in Dibba and Al Aqah, and aerial footage that shows mountains and sea in a single frame. Visiting families book relaxed holiday shoots too.',
                'The east coast is around two hours from Dubai. One thing to know: on this coast the sun rises over the water, so sunrise sessions are spectacular here in a way they are not in Dubai. We often suggest them, especially in the warmer months.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Fujairah',
            'title' => 'Photography Services in Fujairah',
            'text' => 'Every service we offer in Dubai is available in Fujairah. The east coast is especially popular for these.',
            'items' => [
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Fujairah', 'Beach ceremonies and resort weddings along the Fujairah coast.'],
                ['2026/07/Couple-honeymoon-photoshoots-UAE846-1-768x512.webp', 'Couple photoshoot in the UAE by Dubai Fotographer', '/couple-photography-in-uae', 'Couple Photography in Fujairah', 'Sunrise and sunset sessions on quiet beaches and mountain roads.'],
                ['2026/06/opulent-grand-staircase-lobby-lu.webp', 'Hotel Photography in UAE', '/hotel-photography-service-in-uae', 'Hotel &amp; Resort Photography', 'Rooms, pools and lifestyle campaigns for east coast resorts.'],
                ['2026/07/Aerial-drone.webp', 'Aerial drone photography in the UAE', '/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Photography in Fujairah', 'Licensed aerial shots of bays, mountains and coastal resorts.'],
                ['2026/07/Stunning-travel-photography-for-every-destination-in-the-UAE-768x512.webp', 'Travel photography at a UAE destination', '/travel-photography-in-uae', 'Travel Photography in Fujairah', 'Holiday photoshoots for visitors at Fujairah’s beaches and landmarks.'],
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Fujairah', 'Relaxed family portraits on the beach or at your resort.'],
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Team retreats, off-site meetings and events at coastal hotels.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Fujairah', 'Beachfront villas, apartments and resort residences on the coast.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Fujairah',
            'text' => 'Fujairah mixes old forts, clear water and dramatic mountains. These are the spots our clients ask for most.',
            'items' => [
                ['Fujairah Fort', 'One of the oldest forts in the country, set against the mountains. Strong heritage backdrop.'],
                ['Al Bidyah Mosque', 'The oldest known mosque in the UAE, with simple domed lines and mountain views behind.'],
                ['Dibba coast', 'Quiet bays and mountains meeting the sea. Beautiful for couples and drone work.'],
                ['Snoopy Island area', 'Clear water and a famous rocky islet just off the beach. Lovely at sunrise.'],
                ['East coast beach resorts', 'Private beaches, pools and gardens for weddings, campaigns and holiday shoots.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel to Fujairah',
            'paragraphs' => [
                'Al Bidyah Mosque is an active place of worship, so photography there must be respectful and outside prayer times, with modest dress for everyone in the frame. Fujairah Fort and other heritage sites may require permission for professional shoots. We check the rules for your location and arrange approval in advance.',
                'Resorts on the east coast usually need to approve outside photographers, and some charge a location fee. Drone flights over the coast follow UAE civil aviation rules, and our licensed pilots apply for approval for each flight. See our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography page</a>.',
                'Travel to Fujairah is listed clearly in your quote. For sunrise shoots and weddings, the crew may stay overnight nearby so they are ready on time without a very early drive.',
            ],
            'image' => '2026/07/Drone-Photography-Aerial-Property-Visuals4-1.webp',
            'alt' => 'Aerial drone photography of a property in the UAE',
        ],
        'faq' => [
            'title' => 'Photographer in Fujairah: Common Questions',
            'items' => [
                ['Can we have a beach wedding photographed in Fujairah?', '<p>Yes. We cover beach ceremonies at resorts along the east coast, from getting ready to the reception. We visit or call the venue beforehand to plan timings, light and backup spots in case of wind.</p>'],
                ['Why do you recommend sunrise sessions in Fujairah?', '<p>On the east coast the sun rises over the sea, which gives soft, golden light on calm water. It is also cooler and quieter at that hour, which makes the session more comfortable.</p>'],
                ['Can you photograph at Al Bidyah Mosque?', '<p>Respectful photography is usually possible outside prayer times, with modest dress. We confirm the current rules before your shoot and plan accordingly.</p>'],
                ['Do you charge travel fees for Fujairah?', '<p>Yes. Fujairah is around two hours from Dubai, so travel is listed separately in your quote. For early or multi-day bookings, a crew overnight stay may be included.</p>'],
                ['Can you shoot drone footage of our resort?', '<p>Yes, where flight approval is granted. Our licensed pilots apply for the permissions needed and plan the flight path with your team.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Fujairah shoot',
            'title' => 'Request a Quote for Your Fujairah Shoot',
            'paragraphs' => [
                'Tell us the date, the venue and what you have in mind. We reply quickly with availability and a clear price for your Fujairah shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
