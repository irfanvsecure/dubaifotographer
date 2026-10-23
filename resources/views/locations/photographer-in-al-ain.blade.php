@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-al-ain')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location-page.css">
@endpush

@php
    $page = [
        'name' => 'Al Ain',
        'hero' => [
            'image' => '2026/10/photographer-al-ain-fort.jpg',
            'eyebrow' => 'AL AIN · JEBEL HAFEET · AL AIN OASIS · GREEN MUBAZZARAH',
            'title' => 'Professional Photographer in Al Ain',
            'text' => 'Outdoor family portraits, couple sessions, weddings and heritage shoots in the Garden City. Mountain light, palm groves and old forts, photographed by a licensed UAE crew.',
        ],
        'intro' => [
            'image' => '2026/10/jebel-hafeet-al-ain-sunrise-768x512.webp',
            'alt' => 'Jebel Hafeet mountain at sunrise, Al Ain',
            'eyebrow' => '- Al Ain coverage',
            'title' => 'Photography in the Garden City of the UAE',
            'paragraphs' => [
                'Al Ain looks nothing like the coast. It has date palm oases, mud-brick forts and the rocky slopes of Jebel Hafeet rising over the city. For a photographer, that means warm, natural backdrops you simply cannot find in Dubai or Abu Dhabi.',
                'Most of our Al Ain bookings are outdoors. Families come for relaxed portraits in the oasis shade. Couples choose the mountain road at sunset. Wedding parties want heritage settings for their formal photos. We also cover school events, university ceremonies and corporate gatherings in the city’s hotels.',
                'The drive from Dubai takes around two hours, so every Al Ain shoot is planned in detail. We time the session around the light, check access rules for your chosen spot and agree a backup location in case of heat or wind. That planning is what makes the day feel easy for you.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Al Ain',
            'title' => 'Photography Services in Al Ain',
            'text' => 'Every service we offer in Dubai is available in Al Ain. Outdoor and heritage work is where this city really shines.',
            'items' => [
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Al Ain', 'Relaxed family portraits in the oasis, city parks or at home.'],
                ['2026/07/Couple-honeymoon-photoshoots-UAE846-1-768x512.webp', 'Couple photoshoot in the UAE by Dubai Fotographer', '/couple-photography-in-uae', 'Couple Photography in Al Ain', 'Engagement and anniversary sessions at Jebel Hafeet and Green Mubazzarah.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Al Ain', 'Heritage-style wedding portraits, hotel receptions and family ceremonies.'],
                ['2026/07/Aerial-drone.webp', 'Aerial drone photography in the UAE', '/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Photography in Al Ain', 'Licensed aerial shots of the mountain, oasis and wide desert landscapes.'],
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Conferences, staff events and award nights in Al Ain’s hotels and venues.'],
                ['2026/07/school-photography-5.webp', 'School Photography Services in UAE', '/school-photography-services-in-uae', 'School Photography in Al Ain', 'Graduations, class photos and sports days for schools and universities.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Al Ain', 'Villa and commercial listings across Al Ain’s growing neighbourhoods.'],
                ['2026/07/Stunning-travel-photography-for-every-destination-in-the-UAE-768x512.webp', 'Travel photography at a UAE destination', '/travel-photography-in-uae', 'Travel Photography in Al Ain', 'Visitor and holiday photoshoots at the city’s best-known landmarks.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Al Ain',
            'text' => 'Al Ain’s backdrops are earthy, green and full of history. These are the locations our clients request most.',
            'items' => [
                ['Jebel Hafeet', 'A winding mountain road with sweeping views over the city. Best in the last hour before sunset.'],
                ['Al Ain Oasis', 'Shaded palm groves and old falaj water channels. Cool, calm and perfect for families.'],
                ['Al Jahili Fort', 'A restored mud-brick fort with strong lines and warm colours, ideal for heritage portraits.'],
                ['Green Mubazzarah', 'Grassy slopes and hot springs at the foot of the mountain. Popular with couples and families.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel to Al Ain',
            'paragraphs' => [
                'Heritage sites such as Al Jahili Fort and the Al Ain Oasis are managed by the culture authorities, and professional shoots there may need prior permission. We check the current rules for your location and handle the request with you before the date. Public parks and the mountain viewpoints are usually simpler, but we still confirm them.',
                'Drone flights near the mountain and the city follow UAE civil aviation rules. Our pilots fly licensed equipment and apply for approval for each flight, so please book aerial work with extra notice. See our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography page</a> for details.',
                'Because Al Ain is a longer trip from Dubai, travel is listed as its own line in your quote. You see the full cost before you confirm. For summer shoots we suggest early mornings or late evenings, when the heat is easier for everyone.',
            ],
            'image' => '2026/10/al-ain-mountains-blue-sky-768x511.webp',
            'alt' => 'Rocky mountains under a blue sky near Al Ain',
        ],
        'faq' => [
            'title' => 'Photographer in Al Ain: Common Questions',
            'items' => [
                ['What is the best time of day for an outdoor shoot in Al Ain?', '<p>Early morning and the hour before sunset give the softest light and the most comfortable temperatures. In summer we usually recommend a start around sunrise. In winter, late afternoon sessions on Jebel Hafeet are hard to beat.</p>'],
                ['Can we have our photos taken at Al Jahili Fort or the Al Ain Oasis?', '<p>Yes, both are possible. These heritage sites have their own rules for professional photography, so we check the requirements and arrange permission where it is needed. Tell us your preferred spot when you book.</p>'],
                ['Is there a travel fee for Al Ain?', '<p>Yes. Al Ain is about two hours from our Dubai base, so travel is listed separately in your quote. You will see the full price, including travel, before you confirm anything.</p>'],
                ['Do you photograph weddings in Al Ain?', '<p>Yes. We cover hotel receptions, family ceremonies and heritage-style portraits around the city. Female photographers are available for women-only celebrations.</p>'],
                ['Can you combine a family and couple session on the same day?', '<p>Yes. Many clients book a family session in the morning and a couple session at sunset. We plan the timing and locations so the day flows without rushing.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Al Ain shoot',
            'title' => 'Request a Quote for Your Al Ain Shoot',
            'paragraphs' => [
                'Tell us the date, the location and what you have in mind. We reply quickly with availability and a clear price for your Al Ain shoot, travel included.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
