@extends('layouts.app')

@section('seo')
@include('seo.locations-photographer-in-sharjah')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location-page.css">
@endpush

@php
    $page = [
        'name' => 'Sharjah',
        'hero' => [
            'image' => '2026/10/photographer-sharjah-skyline-waterfront.jpg',
            'eyebrow' => 'SHARJAH · AL MAJAZ · AL QASBA · UNIVERSITY CITY',
            'title' => 'Professional Photographer in Sharjah',
            'text' => 'School and university photography, family sessions, events and product shoots across Sharjah. Next door to our Dubai base, with a crew that knows the emirate well.',
        ],
        'intro' => [
            'image' => '2026/10/sharjah-mosques-aerial-sunset-768x432.webp',
            'alt' => 'Aerial view of Sharjah mosques and city at sunset',
            'eyebrow' => '- Sharjah coverage',
            'title' => "Photography for Sharjah's Schools, Families and Businesses",
            'paragraphs' => [
                'Sharjah sits right beside Dubai, so getting there is rarely the hard part. Traffic on the main roads is. We plan arrival times around it, which is why our crew is usually set up long before the first student walks on stage or the first guest arrives.',
                'A lot of our Sharjah work is educational. The emirate is home to University City and dozens of private schools, and graduation season keeps us busy. We also photograph family portraits by the lagoons, product catalogues for local brands, and conferences at Expo Centre Sharjah. Each type of job needs a different approach, and we brief the photographer for it before the day.',
                'Sharjah has its own standards of public decency, and they apply to photoshoots too. We guide clients on suitable outfits and locations in advance, so nothing has to change on the day. It is a small thing, but it keeps sessions relaxed and on schedule.',
            ],
        ],
        'services' => [
            'eyebrow' => '- Services in Sharjah',
            'title' => 'Photography Services in Sharjah',
            'text' => 'Every service we offer in Dubai is available in Sharjah. Schools, families and local businesses book these most.',
            'items' => [
                ['2026/07/school-photography-5.webp', 'School Photography Services in UAE', '/school-photography-services-in-uae', 'School Photography in Sharjah', 'Graduations, class portraits, sports days and yearbooks for schools and University City campuses.'],
                ['2026/07/Family-sibling-portraits-768x512.webp', 'Family & sibling portraits', '/family-photography-in-uae', 'Family Photography in Sharjah', 'Relaxed family portraits at Al Noor Island, Al Majaz Waterfront or in your home.'],
                ['2026/07/ASF01055-1-1-768x512.webp', 'Multi-Camera Event Recording Services in UAE', '/corporate-event-photography-videography', 'Corporate Event Photography', 'Conferences, exhibitions and award nights at Expo Centre Sharjah and city hotels.'],
                ['2026/07/packaging-768x512.webp', 'Product packaging photography by Dubai Fotographer', '/product-photography-services-in-uae', 'Product Photography in Sharjah', 'Catalogue, packaging and e-commerce images for Sharjah manufacturers and retailers.'],
                ['2026/07/Villas-luxury-homes-768x511.webp', 'Luxury villa real estate photography in the UAE', '/real-estate-photography-videography-services-in-uae', 'Real Estate Photography in Sharjah', 'Apartment, villa and commercial listings across Al Khan, Aljada and Muwaileh.'],
                ['2026/07/Professional-portrait-photography-for-every-individual-business.webp', 'Professional portrait photography in the UAE', '/female-photographers-in-uae', 'Female Photographers in Sharjah', 'Female photographers for school events, family sessions and women-only gatherings.'],
                ['2026/07/wedding-photography-5.webp', 'Wedding Photography in UAE', '/wedding-photography-in-uae', 'Wedding Photography in Sharjah', 'Wedding halls, hotel receptions and intimate family ceremonies across the emirate.'],
                ['2026/08/menu-photography-uae-restaurants-hero-768x1152.webp', 'Grilled salmon with fresh salad and edible flowers, professional restaurant menu photography', '/restaurant-photography-service-in-uae', 'Restaurant &amp; Food Photography', 'Menu and interior photography for Sharjah cafes, restaurants and food brands.'],
            ],
        ],
        'spots' => [
            'eyebrow' => '- Where we shoot',
            'title' => 'Popular Shoot Locations in Sharjah',
            'text' => 'Sharjah mixes waterfronts, gardens and restored heritage streets. These are the spots our clients choose most often.',
            'items' => [
                ['Al Majaz Waterfront', 'Lawns, fountains and lagoon views with the city lights behind. Lovely for families at golden hour.'],
                ['Al Noor Island', 'Gardens, art installations and a famous butterfly house. Calm, shaded and great for children.'],
                ['Al Qasba', 'Canal-side walkways and evening lights. A good fit for couples, brand shoots and casual portraits.'],
                ['Heart of Sharjah', 'Restored coral-stone houses, wind towers and narrow lanes. The emirate’s heritage at its best.'],
                ['Sharjah Corniche', 'Open sea views and wide paths for morning sessions, fitness shoots and relaxed family walks.'],
            ],
        ],
        'permits' => [
            'eyebrow' => '- Permits & travel',
            'title' => 'Permits, Access and Travel in Sharjah',
            'paragraphs' => [
                'Public parks and waterfronts in Sharjah are open to visitors, but professional shoots at some sites, such as Al Noor Island or the heritage area, need permission from the site management. Museums and government buildings have their own rules too. We check what your chosen location needs and arrange the approval with you before the date.',
                'For schools and universities, we work with your events team on access passes, safeguarding rules and image consent. Our photographers follow the school’s policy on photographing students, and we agree on a delivery format that suits your yearbook or website. Read more on our <a href="%%BASE%%/school-photography-services-in-uae">school photography page</a>.',
                'Sharjah is close enough that there is normally no separate travel charge for standard bookings. If one does apply, for a very early start for example, it is shown in your quote before you confirm.',
            ],
            'image' => '2026/10/sharjah-mosque-ferris-wheel-768x1152.webp',
            'alt' => 'White mosque with the Al Qasba ferris wheel behind, Sharjah',
        ],
        'faq' => [
            'title' => 'Photographer in Sharjah: Common Questions',
            'items' => [
                ['Do you photograph school and university graduations in Sharjah?', '<p>Yes. Graduation ceremonies are one of our most common Sharjah bookings. We cover the stage walk, individual portraits, group photos and family moments, and we can add multi-camera video if the school needs a full recording. Book early, because spring graduation dates fill quickly.</p>'],
                ['Are there dress code rules for photoshoots in Sharjah?', '<p>Sharjah has public decency guidelines that apply to everyone, including people being photographed in public places. In practice, that means modest outfits for outdoor shoots. We share simple guidance when you book, and indoor or private locations allow more flexibility.</p>'],
                ['Can you shoot family photos at Al Noor Island or Al Majaz Waterfront?', '<p>Yes. Both are popular with our clients. Some areas need prior approval for professional photography, so tell us your preferred spot when you book and we will confirm what is needed.</p>'],
                ['How long does delivery take?', '<p>Most family and portrait galleries are ready within a few working days. School events with large numbers of students take a little longer, and we agree the exact delivery date with you before the event.</p>'],
                ['Do you charge travel fees for Sharjah?', '<p>Usually not, because Sharjah is right next to our Dubai base. If a travel cost applies to your booking, it appears clearly in your quote before you confirm anything.</p>'],
            ],
        ],
        'quote' => [
            'eyebrow' => '- Book your Sharjah shoot',
            'title' => 'Request a Quote for Your Sharjah Shoot',
            'paragraphs' => [
                'Tell us the date, the location and what you need photographed. We reply quickly with availability and a clear price for your Sharjah shoot.',
                '<strong>Call or WhatsApp:</strong> <a href="tel:+971522946276">+971 52 294 6276</a><br><strong>Email:</strong> <a href="mailto:info@dubaifotographer.com">info@dubaifotographer.com</a>',
                'Looking for another emirate? See all <a href="%%BASE%%/locations/">areas we serve across the UAE</a>.',
            ],
        ],
    ];
@endphp

@section('content')
    @include('partials.location-page')
@endsection
