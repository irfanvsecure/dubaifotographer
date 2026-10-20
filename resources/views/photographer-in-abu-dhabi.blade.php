@extends('layouts.app')

@section('seo')
@include('seo.photographer-in-abu-dhabi')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location.css">
@endpush

@php
    $page = [
        'name' => 'Abu Dhabi',
        'hero' => [
            'image' => '2026/10/photographer-abu-dhabi-sheikh-zayed-grand-mosque.jpg',
            'eyebrow' => 'ABU DHABI · YAS · SAADIYAT · AL REEM',
            'title' => 'Professional Photographer in Abu Dhabi',
            'text' => 'Corporate events, real estate, weddings and brand shoots across the capital, from Yas Island to the Corniche. A licensed UAE crew with fast, fully edited delivery.',
        ],
        'intro' => [
            'image' => '2026/10/abu-dhabi-skyline-across-the-sea-768x512.webp',
            'alt' => 'Abu Dhabi city skyline across the sea on a clear day',
            'eyebrow' => '- Abu Dhabi coverage',
            'title' => 'A Photography Team That Knows the Capital',
            'paragraphs' => [
                'Abu Dhabi is a short drive from our Dubai base, and our crew works there regularly. We photograph conferences at ADNEC and the big city hotels, villa listings on Saadiyat and Al Reem, product launches around Yas Bay and family sessions along the Corniche. Each of those jobs has taught us something about how the capital works: which venues need paperwork in advance, where the light is softest late in the afternoon, and how long hotel security can take on a busy event day.',
                'That local knowledge matters more than people expect. A smooth shoot is one where the photographer spends the time on pictures, not at the gate. So we plan every Abu Dhabi booking the same way. There is a short call first, then a written shot list, then a delivery date you can rely on.',
                'Dubai Fotographer has been running since 2014 under Abdul Rehman. The team works in Arabic and English, which helps with government clients and family shoots alike. You deal with one person from the first message to the final gallery.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Abu Dhabi',
            'title' => 'Photography Services in Abu Dhabi',
            'text' => 'Every service we offer in Dubai is available in Abu Dhabi. These are the ones clients in the capital book most often.',
            'items' => [
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Conferences, summits and gala dinners at ADNEC, Yas Island and the city’s five-star hotels.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Abu Dhabi', 'Listings and developer launches on Saadiyat, Yas, Al Reem and Al Raha Beach.'],
                ['2026/07/packaging-768x512.webp', 'Product packaging photography by Dubai Fotographer', '/product-photography-services-in-uae', 'Product Photography in Abu Dhabi', 'Clean studio and on-location product images for Abu Dhabi brands and retailers.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Abu Dhabi', 'Ballroom receptions, beach ceremonies and desert venues outside the city.'],
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Abu Dhabi', 'Relaxed sessions on the Corniche, in Umm Al Emarat Park or at home.'],
                ['2026/07/Professional-portrait-photography-for-every-individual-business.webp', 'Professional portrait photography in the UAE', '/female-photographers-in-uae', 'Female Photographers in Abu Dhabi', 'Female photographers for family events, women-only gatherings and private shoots.'],
                ['2026/07/Aerial-drone.webp', 'Aerial drone photography in the UAE', '/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Photography in Abu Dhabi', 'Licensed aerial photography and video wherever flight approval is granted.'],
                ['2026/08/menu-photography-uae-restaurants-hero-768x1152.webp', 'Grilled salmon with fresh salad and edible flowers, professional restaurant menu photography', '/restaurant-photography-service-in-uae', 'Restaurant &amp; Food Photography', 'Menu, interior and chef photography for restaurants and hotel outlets.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Abu Dhabi',
            'text' => 'The capital has some of the best backdrops in the country. These are the places our Abu Dhabi clients ask for most.',
            'items' => [
                ['Abu Dhabi Corniche', 'Kilometres of waterfront with the skyline behind it. Best early in the morning or after four in the afternoon.'],
                ['Yas Island', 'Modern architecture, marina views and the Yas Bay boardwalk. A strong choice for brand and lifestyle shoots.'],
                ['Saadiyat Beach', 'Soft sand and calm water. A favourite for family, couple and maternity sessions at sunset.'],
                ['Louvre Abu Dhabi area', 'Striking geometric architecture in the cultural district. The museum itself has its own photography rules.'],
                ['Qasr Al Watan area', 'Grand white facades and formal gardens. Professional shoots on the palace grounds need prior approval.'],
                ['Mangrove National Park', 'Green channels and quiet boardwalks for natural portraits and calm, unhurried sessions.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel to Abu Dhabi',
            'paragraphs' => [
                'Some Abu Dhabi landmarks need permission before a professional camera can be used. That includes museum and palace grounds, many hotel lobbies and beach clubs, and most government buildings. When you book, we check the rules for your location and arrange the permission for you where it is needed. If a spot cannot be cleared in time, we suggest a nearby alternative so your shoot still goes ahead.',
                'Drone work follows UAE civil aviation rules. Our pilots fly licensed equipment and apply for the approvals each flight needs, so aerial shoots need a little more notice. You can read how this works on our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography page</a>.',
                'Travel from Dubai is planned into every Abu Dhabi booking. Any travel cost is listed clearly in your quote before you confirm, and we agree the arrival time the day before so the crew is set up well before your first guest walks in.',
            ],
            'image' => '2026/10/louvre-abu-dhabi-saadiyat-768x475.webp',
            'alt' => 'Louvre Abu Dhabi dome beside the water on Saadiyat Island',
        ],
        'faq' => [
            'title' => 'Photographer in Abu Dhabi: Common Questions',
            'items' => [
                ['Do you charge extra to shoot in Abu Dhabi?', '<p>Travel from our Dubai base is listed as part of your quote, so you see the full price before you confirm anything. For multi-day events in Abu Dhabi the travel cost is usually spread across the booking. Send us your date, location and type of shoot and we will reply with an itemised quote.</p>'],
                ['Can you get permission to shoot at the Louvre Abu Dhabi or Qasr Al Watan?', '<p>Both sites have their own rules for professional photography, and approval is needed in advance. We handle the request for you and tell you exactly what is allowed, such as which areas can be used and whether tripods or lighting are permitted. Give us as much notice as you can for these locations.</p>'],
                ['How quickly will I receive my photos?', '<p>Most galleries are delivered within a few working days. A 48-hour turnaround is available for events and press needs. For corporate clients who need images during the event, same-day selects can also be arranged.</p>'],
                ['Do you have female photographers available in Abu Dhabi?', '<p>Yes. Female photographers are available for family sessions, women-only events, maternity shoots and any booking where you prefer it. Mention it when you request a quote so we can confirm availability for your date.</p>'],
                ['Which parts of Abu Dhabi do you cover?', '<p>We cover the whole emirate, including the city centre, Yas Island, Saadiyat Island, Al Reem Island, Al Raha and Khalifa City. We also travel to Al Ain and the Al Dhafra region for events, schools and real estate projects.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Abu Dhabi shoot',
            'title' => 'Request a Quote for Your Abu Dhabi Shoot',
            'paragraphs' => [
                'Tell us the date, the location and what you need photographed. We reply quickly with availability and a clear, itemised price for your Abu Dhabi shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
