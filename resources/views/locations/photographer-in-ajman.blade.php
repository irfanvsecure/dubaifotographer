@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-ajman')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location-page.css">
@endpush

@php
    $page = [
        'name' => 'Ajman',
        'hero' => [
            'image' => '2026/10/photographer-ajman-skyline-sunset.jpg',
            'eyebrow' => 'AJMAN · CORNICHE · AL ZORAH · MARINA',
            'title' => 'Professional Photographer in Ajman',
            'text' => 'Family, maternity, newborn and small-business product photography in Ajman. A short drive from Dubai, with the same crew, the same care and fast edited delivery.',
        ],
        'intro' => [
            'image' => '2026/10/ajman-corniche-beach-768x512.webp',
            'alt' => 'People on Ajman Corniche beach during the day',
            'eyebrow' => '- Ajman coverage',
            'title' => 'Friendly Photography for Ajman Families and Businesses',
            'paragraphs' => [
                'Ajman is the smallest emirate, but it has a lot going for it on a shoot day. The beaches are quieter than Dubai’s, the mangroves at Al Zorah are calm and green, and getting from one location to the next rarely takes long.',
                'Many of our Ajman clients are young families. We photograph maternity sessions on the beach, newborns at home and family portraits along the Corniche. Local businesses book us too, mostly for product catalogues, menu photos and social media content that needs to look professional without a big-agency budget.',
                'Home sessions are popular here. Our photographers bring portable lighting and backdrops, so a living room can become a small studio for an afternoon. It is easier for parents with a new baby, and the photos feel more personal.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Ajman',
            'title' => 'Photography Services in Ajman',
            'text' => 'Every service we offer in Dubai is available in Ajman. Families and small businesses book these most.',
            'items' => [
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Ajman', 'Beach, park and at-home family portraits across Ajman.'],
                ['2026/07/Family-maternity-photography-768x525.webp', 'Family maternity photography session in the UAE', '/maternity-photography-in-uae', 'Maternity Photography in Ajman', 'Soft, natural maternity sessions on the beach, at home or in studio.'],
                ['2026/07/Studio-newborn-photography-768x580.webp', 'Studio newborn photography in the UAE', '/newborn-baby-photography-in-uae', 'Newborn Photography in Ajman', 'Gentle at-home newborn sessions with safe, baby-led posing.'],
                ['2026/07/packaging-768x512.webp', 'Product packaging photography by Dubai Fotographer', '/product-photography-services-in-uae', 'Product Photography in Ajman', 'Affordable product, catalogue and social media images for Ajman businesses.'],
                ['2026/07/Professional-portrait-photography-for-every-individual-business.webp', 'Professional portrait photography in the UAE', '/female-photographers-in-uae', 'Female Photographers in Ajman', 'Female photographers for maternity, newborn and private family sessions.'],
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Staff events, launches and business conferences in Ajman’s hotels.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Ajman', 'Apartment and villa listings in Al Zorah, Al Nuaimiya and the city centre.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Ajman', 'Wedding halls, hotel receptions and family ceremonies across the emirate.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Ajman',
            'text' => 'Ajman offers calm beaches, green mangroves and a small heritage quarter. These are our clients’ favourite spots.',
            'items' => [
                ['Ajman Corniche', 'A long, open beachfront with soft evening light. Great for families and maternity sessions.'],
                ['Al Zorah', 'Mangroves, boardwalks and a quiet nature reserve feel. Ideal for natural, relaxed portraits.'],
                ['Ajman Museum area', 'An old fort and traditional architecture for heritage-style family and couple photos.'],
                ['Ajman Marina', 'Boats, water and modern waterfront views. A good fit for lifestyle and brand content.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel in Ajman',
            'paragraphs' => [
                'Public beaches and the Corniche are open to everyone, but some areas, such as the museum grounds, private beach clubs and the Al Zorah reserve, may need permission for professional photography. When you book, we check the rules for your chosen spot and sort out any approval with you in advance.',
                'For newborn and maternity shoots at home, there is nothing to arrange. We simply confirm the room, the light and the timing with you, and keep the session paced around your baby’s feeds and naps. Learn more on our <a href="%%BASE%%/newborn-baby-photography-in-uae">newborn photography page</a>.',
                'Ajman is a short drive from our Dubai base, so standard bookings usually carry no separate travel fee. If one applies, it is shown clearly in your quote before you confirm.',
            ],
            'image' => '2026/10/ajman-beach-corniche-sunset-768x512.webp',
            'alt' => 'Lamp post silhouette at sunset on Ajman Beach Corniche',
        ],
        'faq' => [
            'title' => 'Photographer in Ajman: Common Questions',
            'items' => [
                ['Do you offer newborn photography at home in Ajman?', '<p>Yes. Home sessions are our most popular option for Ajman families. We bring lighting, wraps and backdrops, and we let the baby set the pace. Most newborn sessions take place in the first two weeks after birth.</p>'],
                ['When is the best time for a maternity shoot?', '<p>Most mothers book between 28 and 34 weeks, when the bump is visible and moving around is still comfortable. Beach sessions work best close to sunset.</p>'],
                ['Can you photograph products for my small Ajman business?', '<p>Yes. We shoot clean white-background images for online stores as well as styled lifestyle images for social media. Tell us how many products you have and we will suggest a simple package.</p>'],
                ['Do you charge travel fees for Ajman?', '<p>Usually not, because Ajman is close to our Dubai base. If a travel cost applies, you will see it in your quote before you confirm.</p>'],
                ['Are female photographers available?', '<p>Yes. Female photographers are available for maternity, newborn and family sessions, and for any booking where you prefer one. Just mention it when you request a quote.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Ajman shoot',
            'title' => 'Request a Quote for Your Ajman Shoot',
            'paragraphs' => [
                'Tell us the date, the location and what you would like photographed. We reply quickly with availability and a clear price for your Ajman shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
