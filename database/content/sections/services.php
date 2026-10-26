<?php

// Services overview body sections, moved out of resources/views/services.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'services',
    'sections' => [
        ['banner', 'page_banner', [
            'image' => '2026/04/instant-print-photobooth-for-events-1.webp',
        ]],

        ['trust', 'trust_strip', [
            'items' => [
                ['icon' => 'check-circle', 'text' => 'Since 2014'],
                ['icon' => 'star', 'text' => '5.0 average client rating'],
                ['icon' => 'check-circle', 'text' => 'Licensed & insured'],
                ['icon' => 'map-marker-alt', 'text' => 'All 7 Emirates'],
            ],
        ]],

        ['intro', 'services_intro', [
            'eyebrow' => '- What we do',
            'heading' => 'Commercial Photography and Videography Services Across UAE',
            'body' => '<p>High-quality visual content plays an important role in how businesses, brands, and individuals present themselves today. At Dubai Fotographer, we provide professional photography and videography services across Dubai and the UAE for commercial brands, corporate companies, hospitality businesses, events, eCommerce stores, and personal projects. Our goal is to create visuals that not only look professional but also help clients improve branding, engagement, marketing performance, and customer trust.</p>
<p>Since 2014, our team has worked with businesses and individuals across Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, delivering visual content tailored for modern digital platforms, advertising campaigns, websites, social media, and commercial marketing.</p>
<p>As a trusted creative production team in the UAE, we combine photography, videography, editing, drone production, and commercial visual storytelling under one workflow to deliver consistent and impactful results. Abdul Rehman leads the studio. The core crew has been working together long enough that shoots run without friction. That experience compounds. Faster setup, fewer mistakes on set, cleaner files in the edit, and turnaround times that hold under pressure.</p>',
            'card_label' => 'Plan your shoot',
            'facts' => [
                ['number' => '7', 'text' => 'Emirates covered'],
                ['number' => '5.0', 'text' => 'average client rating'],
                ['number' => '2014', 'text' => 'serving clients since'],
            ],
            'whatsapp_text' => 'Prefer WhatsApp? Message us',
        ]],

        ['all-services', 'services_grid', [
            'eyebrow' => '- Our services',
            'heading' => 'Explore Our Full Photography and Videography',
            'text' => 'Explore our full photography and videography services capturing every moment with creativity, precision, and emotion to beautifully preserve your special memories and tell your unique story. The list below covers events, drone and property, commercial and product work, portraits and photo booths. Each card opens the service page with what is included and how to book. We are based in Business Bay, Dubai Design District, and we shoot in the studio or on location across Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah and Umm Al Quwain. If you are not sure which service fits, send the date and the venue and we will recommend a crew and a quote. Event jobs can combine a stills photographer with a multi-camera video crew, a live stream or a print booth. Property and hospitality jobs can add drone stills where a GCAA permit is in place. Product, food, fashion and portrait work can be booked in the studio or at your location. Open a card below for what that service includes, then send the date if you want a quote for that crew.',
            'cards' => [
                [
                    'title' => 'Events & Live Coverage',
                    'image' => '2026/04/corporate-event-photography.webp',
                    'alt' => 'Corporate event photography in Dubai',
                    'links' => [
                        ['text' => 'Event Photography', 'link' => '/corporate-event-photography-videography'],
                        ['text' => 'Multi-Camera Event', 'link' => '/multi-camera-event-recording'],
                        ['text' => 'Live Streaming', 'link' => '/professional-live-streaming-services-across-dubai-and-the-uae'],
                        ['text' => '360° Videography', 'link' => '/360-video-booth-experience-for-immersive-event-engagement'],
                        ['text' => 'Live Photography', 'link' => '/live-printing-photo-booth-for-instant-guest-keepsakes'],
                    ],
                ],
                [
                    'title' => 'Aerial, Property & Hospitality',
                    'image' => '2026/04/Drone-Photography-Dubai-Desert.jpeg',
                    'alt' => 'Drone photography over the Dubai desert',
                    'links' => [
                        ['text' => 'Drone Videography', 'link' => '/cinematic-drone-photography-videography-uae-compliant-licensed'],
                        ['text' => 'Real Estate Photography', 'link' => '/real-estate-photography-videography-services-in-uae'],
                        ['text' => 'Hotel Photography', 'link' => '/hotel-photography-service-in-uae'],
                    ],
                ],
                [
                    'title' => 'Commercial & Product',
                    'image' => '2026/05/Product-Photography.jpg',
                    'alt' => 'Product photography for brands in the UAE',
                    'links' => [
                        ['text' => 'Product Photography', 'link' => '/product-photography-services-in-uae'],
                        ['text' => 'Food Photography', 'link' => '/luxury-food-photography-for-restaurants-hotels-and-brands'],
                        ['text' => 'Jewelry Photography', 'link' => '/jewelry-photography-services-in-uae'],
                        ['text' => 'Car Photography', 'link' => '/car-photography-in-uae'],
                    ],
                ],
                [
                    'title' => 'Fashion & Lifestyle',
                    'image' => '2026/05/Fashion-Photography.jpg',
                    'alt' => 'Fashion photography shoot in the UAE',
                    'links' => [
                        ['text' => 'Fashion Photography', 'link' => '/fashion-photography-in-uae'],
                        ['text' => 'Influencer Photography', 'link' => '/influencer-photography-in-uae'],
                        ['text' => 'Travel Photographer', 'link' => '/travel-photography-in-uae'],
                    ],
                ],
                [
                    'title' => 'Weddings, Family & Portraits',
                    'image' => '2026/05/photographer-married.jpg',
                    'alt' => 'Wedding photography in the UAE',
                    'links' => [
                        ['text' => 'Wedding Photography', 'link' => '/wedding-photography-in-uae'],
                        ['text' => 'Family Photography', 'link' => '/family-photography-in-uae'],
                        ['text' => 'Maternity Photography', 'link' => '/maternity-photography-in-uae'],
                        ['text' => 'Female Photographers', 'link' => '/female-photographers-in-uae'],
                    ],
                ],
                [
                    'title' => 'Schools & Sports',
                    'image' => '2026/05/School-Photography-services.jpg',
                    'alt' => 'School photography services in the UAE',
                    'links' => [
                        ['text' => 'School Photography', 'link' => '/school-photography-services-in-uae'],
                        ['text' => 'Sports Photography', 'link' => '/sports-photography-services-in-uae'],
                    ],
                ],
            ],
            'book_text' => 'Not sure which service fits your project? Tell us what you need and we will recommend the right setup.',
        ]],

        ['booking', 'session_booking', [
            'eyebrow' => '- Request a booking',
            'heading' => 'Tell us about your shoot',
            'text' => 'Share the service, date and time you have in mind and our team will confirm availability.',
            'checks' => [
                'Photography and video under one team',
                'Licensed & insured, since 2014',
                'Studio or on location in all 7 Emirates',
            ],
            'form_text' => 'Please confirm that you would like to request the following appointment:',
        ]],

        ['reviews', 'reviews', [
            '_class' => 'reviews-tight',
        ]],

        ['cta', 'cta', [
            '_class' => 'svo-cta',
            'eyebrow' => "- Let's create something",
            'heading' => 'Book your shoot anywhere in the UAE',
            'text' => 'Dubai, Abu Dhabi, Sharjah and every other Emirate, in the studio or on location.',
        ]],
    ],
];
