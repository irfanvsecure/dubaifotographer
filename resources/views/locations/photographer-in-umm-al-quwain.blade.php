@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-umm-al-quwain')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location.css">
@endpush

@php
    $page = [
        'name' => 'Umm Al Quwain',
        'hero' => [
            'image' => '2026/10/photographer-umm-al-quwain-fort.jpg',
            'eyebrow' => 'UMM AL QUWAIN · LAGOON · OLD TOWN · CORNICHE',
            'title' => 'Professional Photographer in Umm Al Quwain',
            'text' => 'Outdoor family portraits, couple sessions and lifestyle shoots in Umm Al Quwain. Quiet lagoons, mangroves and an old town full of character, about an hour from Dubai.',
        ],
        'intro' => [
            'image' => '2026/10/umm-al-quwain-beach-boat-768x512.webp',
            'alt' => 'Blue boat on Umm Al Quwain beach',
            'eyebrow' => '- Umm Al Quwain coverage',
            'title' => 'Calm, Natural Photography in Umm Al Quwain',
            'paragraphs' => [
                'Umm Al Quwain is the quietest of the seven emirates, and that is its charm. There are no crowds at the beach, the lagoon is still in the early morning, and the old town feels a world away from the towers of Dubai.',
                'We mostly photograph families, couples and lifestyle content here. Parents like the calm beaches for children. Couples choose the mangroves for soft, natural portraits. Small brands use the old town’s textured walls and the waterfront for social media campaigns that look different from the usual city shots.',
                'The drive takes about an hour from Dubai. Because the area is so peaceful, sessions here tend to feel relaxed and unhurried, and that comes through in the photos.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Umm Al Quwain',
            'title' => 'Photography Services in Umm Al Quwain',
            'text' => 'Every service we offer in Dubai is available in Umm Al Quwain. Outdoor and lifestyle sessions suit it best.',
            'items' => [
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Umm Al Quwain', 'Relaxed outdoor family portraits on quiet beaches and by the lagoon.'],
                ['2026/07/Couple-honeymoon-photoshoots-UAE846-1-768x512.webp', 'Couple photoshoot in the UAE by Dubai Fotographer', '/couple-photography-in-uae', 'Couple Photography in Umm Al Quwain', 'Engagement and anniversary sessions among the mangroves at sunset.'],
                ['2026/07/Luxury-lifestyle-photography-768x512.webp', 'Lifestyle Photography in UAE', '/lifestyle-photography-in-uae', 'Lifestyle Photography in Umm Al Quwain', 'Natural lifestyle and social media content in calm coastal settings.'],
                ['2026/07/Family-maternity-photography-768x525.webp', 'Family maternity photography session in the UAE', '/maternity-photography-in-uae', 'Maternity Photography in Umm Al Quwain', 'Soft beach and lagoon maternity sessions away from the crowds.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Umm Al Quwain', 'Family weddings, hall receptions and outdoor portraits across the emirate.'],
                ['2026/07/Aerial-drone.webp', 'Aerial drone photography in the UAE', '/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Photography in Umm Al Quwain', 'Licensed aerial shots of the lagoon, islands and coastline.'],
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Company events, staff days and small conferences in UAQ.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Umm Al Quwain', 'Villas, plots and waterfront developments across the emirate.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Umm Al Quwain',
            'text' => 'Umm Al Quwain is all about water, greenery and history. These are the spots our clients like best.',
            'items' => [
                ['UAQ mangroves and lagoon', 'Still water and green mangroves. Peaceful and natural, best in the early morning.'],
                ['UAQ Old Town and Fort', 'Restored fort walls, old houses and quiet lanes. Full of texture for heritage portraits.'],
                ['Umm Al Quwain Corniche', 'An open waterfront path with sea views and soft evening light for families.'],
                ['UAQ beaches', 'Wide, quiet beaches with few people around. Ideal for children and maternity sessions.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel to Umm Al Quwain',
            'paragraphs' => [
                'Public beaches and the Corniche are generally open for photography, but the fort and museum area, protected mangrove zones and private beach clubs may need permission for professional shoots. We check the rules for your chosen location and arrange any approval with you before the date.',
                'Drone flights over the lagoon and coast follow UAE civil aviation rules. Our licensed pilots apply for approval for each flight, so please allow extra notice for aerial work. See our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography page</a> for details.',
                'Any travel cost for Umm Al Quwain is listed clearly in your quote. We also suggest the best time of day for your location, as the lagoon and beaches look their best early in the morning or close to sunset.',
            ],
            'image' => '2026/10/umm-al-quwain-fort-palm-trees-768x512.webp',
            'alt' => 'White heritage building with palm trees at Umm Al Quwain Fort',
        ],
        'faq' => [
            'title' => 'Photographer in Umm Al Quwain: Common Questions',
            'items' => [
                ['Where are the best places for family photos in Umm Al Quwain?', '<p>The beaches and the Corniche are easy for children and give soft evening light. The mangroves and lagoon offer a greener, calmer look. We help you choose based on the style you want and your children’s ages.</p>'],
                ['Can we have a couple shoot in the mangroves?', '<p>Yes. The mangroves and lagoon are one of our favourite couple locations in the UAE. Some protected areas may need permission, so we confirm access before your date.</p>'],
                ['Do you charge travel fees for Umm Al Quwain?', '<p>Umm Al Quwain is about an hour from our Dubai base. Any travel cost is listed clearly in your quote before you confirm.</p>'],
                ['Can you create social media content for my brand in UAQ?', '<p>Yes. The old town and waterfront make great backdrops for lifestyle and product content. We plan a simple shot list with you so you get a set of images ready for your channels.</p>'],
                ['How long does delivery take?', '<p>Most family, couple and lifestyle galleries are delivered within a few working days. Faster delivery can be arranged if you need images for a specific date.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Umm Al Quwain shoot',
            'title' => 'Request a Quote for Your Umm Al Quwain Shoot',
            'paragraphs' => [
                'Tell us the date, the location and what you would like photographed. We reply quickly with availability and a clear price for your Umm Al Quwain shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
