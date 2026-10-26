<?php

// Body sections of /car-photography-in-uae, moved out of resources/views/car-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Car photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Car-photography-servicesin-Dubai.png',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Professional automotive photography for dealerships, luxury brands, collectors, and private owners — exterior, interior, studio, and 360° coverage across all seven Emirates.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your car shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Type of shoot',
                    'name' => 'shoot_type',
                    'options' => ['Hero shots', 'Dealer inventory', '360° photography', 'Studio shoot'],
                ],
                [
                    'label' => 'Where',
                    'name' => 'location',
                    'options' => ['Our studio', 'Dealership or showroom', 'Outdoor location', 'Private garage'],
                ],
            ],
            'venue_placeholder' => 'e.g. dealership, showroom, outdoor location',
            'guests_label' => 'How many vehicles?',
            'guests_options' => ['1 vehicle', '2 to 5', '6 to 20', 'Over 20'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Licensed and insured',
                    'text' => 'Production company',
                ],
                [
                    'title' => 'Arabic and English',
                    'text' => 'Bilingual crew',
                ],
                [
                    'title' => '48 hours',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => 'Since 2014',
                    'text' => 'All seven Emirates covered',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'We provide car photography throughout Dubai and all seven Emirates — at dealerships, showrooms, private collections, outdoor locations, or in our controlled studio environment, with the same standard of production quality regardless of location.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Luxury & prestige cars',
                'Sports cars',
                'Classic & vintage models',
                'Collector vehicles',
                'Electric vehicles',
                'Motorcycles',
                'Commercial fleets',
                'Dealer inventory',
                '360° photography',
                'Studio photography',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Why Choose Dubai Fotographer for Car Photography?',
            'paragraphs' => [
                'We’ve been photographing cars around the UAE since 2014, from dusty old 4x4s to supercars that arrive on the back of a truck so they don’t pick up a scratch. In that time, Dubai Fotographer has worked with automotive businesses, dealerships, luxury brands, collectors, and private clients, and every one of them got professional car photography tailored to their vehicles and their commercial objectives. We plan each project carefully, because the final images have to show the car accurately, no flattering tricks, while still keeping a consistent visual standard from the first shot to the last.',
                'Here at Dubai Fotographer, we provide car photography services across Dubai and the UAE. Our clients are dealerships, manufacturers, collectors, automotive brands, and private owners who’ve finally got the car they saved for and want proper photos of it. We plan every photoshoot around what the imagery is actually for. Location, lighting, style, and the character of the vehicle all come into play. A 1980s Land Cruiser parked in the dunes needs a completely different approach from a brand-new supercar under the lights in DIFC. Getting that right is how the final photographs show the car at its best.',
                'Maybe it’s a single vehicle. Maybe it’s an entire dealership inventory that needs shooting before the weekend rush. Or it’s a large-scale marketing campaign that calls for <a href="%%BASE%%/multi-camera-event-recording">multi-camera photography</a> on the day. Whatever you need, we adapt our approach to suit it. Technical precision, creative composition, and professional post-production all go into the work, and the automotive photography you get back is ready for sales, advertising, editorial publications, and long-term brand assets.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Car Photography Services',
            'tabs' => [
                [
                    'icon' => 'star',
                    'label' => 'Professional car photography',
                    'image' => '2026/05/car-photography-1-1024x576.webp',
                    'alt' => 'Car Photography in UAE',
                    'heading' => 'Professional car photography',
                    'body' => '<p>High-quality images showcasing a vehicle’s design, exterior styling, interior features, and key details — suitable for advertising, websites, campaigns, and editorial publications.</p><p>Ever tried selling your car on dubizzle? It looks amazing in the parking lot, then you snap a photo, and it suddenly looks five years older. Buyers scrolling through listings can’t walk around it, so the pictures have to do that job for them. Professional car photography shows each one with clarity and consistency, and the imagery works just as well in advertising and <a href="%%BASE%%/product-photography-services-in-uae">product photography</a> campaigns as it does on sales listings, in editorial features, on websites, and across social media.</p>',
                    'button' => 'Quote my car shoot',
                ],
                [
                    'icon' => 'building',
                    'label' => 'Vehicle photography for dealerships',
                    'image' => '2026/05/car-photography-2-1024x576.webp',
                    'alt' => 'Car Photography in UAE',
                    'heading' => 'Vehicle photography for dealerships',
                    'body' => '<p>Clean, accurate inventory imagery for websites, online marketplaces, and printed materials — consistent visual standards across every vehicle in the collection.</p><p>Automotive photography making every vehicle in the inventory easy to compare and browse online — same setup, same lighting, same standard throughout.</p>',
                    'button' => 'Quote my inventory',
                ],
                [
                    'icon' => 'dot-circle',
                    'label' => '360° car photography',
                    'image' => '2026/05/car-photography-3-1024x580.webp',
                    'alt' => '360° car photography in Dubai',
                    'heading' => '360° car photography',
                    'body' => '<p>Multi-angle interactive viewing for dealerships and automotive brands — giving buyers a more complete understanding of a vehicle before arranging a physical viewing.</p><p>Sometimes it’s one individual vehicle. Sometimes it’s a complete automotive collection, with <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360° photography</a> added for online listings. We tailor our approach to automotive photography to each project either way.</p>',
                    'button' => 'Quote my 360° shoot',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Automotive studio photography',
                    'image' => '2026/05/Car-Photography-1024x682.webp',
                    'alt' => 'Automotive studio photography in Dubai',
                    'heading' => 'Automotive studio photography',
                    'body' => '<p>Controlled lighting and distraction-free backgrounds placing full attention on the vehicle — ideal for commercial advertising, product launches, and catalogue photography.</p><p>Every vehicle deserves visuals that reflect its design, condition, and unique character. From dramatic <a href="%%BASE%%/exterior-photography-in-uae">exterior angles</a> to carefully composed <a href="%%BASE%%/interior-photographer-in-uae">interior photographs</a>, every image contributes to a consistent visual collection.</p>',
                    'button' => 'Quote my studio shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent car photography',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Vehicles', 'Studio', 'Marketing'],
            'images' => [
                [
                    'image' => '2026/05/car-photography-1-1024x576.webp',
                    'full' => '2026/05/car-photography-1.webp',
                    'alt' => 'Car Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/05/car-photography-2-1024x576.webp',
                    'full' => '2026/05/car-photography-2.webp',
                    'alt' => 'Car Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/05/car-photography-3-1024x580.webp',
                    'full' => '2026/05/car-photography-3.webp',
                    'alt' => '360° car photography in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/05/Car-Photography-1024x682.webp',
                    'full' => '2026/05/Car-Photography.jpg',
                    'alt' => 'Automotive studio photography in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/man-working-tablet-office_23-2149307827-e1784626300242.jpg',
                    'alt' => 'Advertising and campaign imagery for automotive brands',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/senior-man-car-showroom-choosing-car_1303-18965-e1784625953983.jpg',
                    'alt' => 'Vehicle photography in a car showroom',
                    'filter' => 0,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Car photography tailored to your business objectives',
            'body' => '<p>Before any shoot, we take time to understand exactly how your images will be used. This shapes every decision around location, lighting, background, and styling.</p><p>Dealerships get clean, consistent imagery. Brands and agencies get bolder, dramatic, campaign-ready visuals. Collectors get photography capturing the craftsmanship of rare and classic cars — every detail, finish, and feature documented for archival, insurance, or private sale purposes. Manufacturers get photography reflecting the quality and precision of the build, for product documentation, press materials, and technical marketing.</p><p class="svc-feature-label">Built for every industry in the UAE:</p><ul><li>Dealership websites and marketplaces</li><li>Advertising and campaign imagery</li><li>Editorial, magazine and press</li><li>Social media reels and feed content</li><li>Brochures, print and digital</li></ul>',
            'button' => 'Tell us how you will use the photos',
            'photos' => [
                [
                    'image' => '2026/07/Dealership-websites-marketplaces.jpg',
                    'label' => 'Dealership websites',
                ],
                [
                    'image' => '2026/07/social-media-1.jpg',
                    'label' => 'Social media',
                ],
                [
                    'image' => '2026/07/broche-e1784626402654.jpg',
                    'label' => 'Brochures',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Car Photography Across the UAE',
            'text' => 'Studio or your location: we travel to dealerships, private garages, or outdoor locations across the UAE.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Dealerships, showrooms, DIFC and our studio'],
                ['Desert', 'Outdoor shoots in the dunes'],
                ['Abu Dhabi and the northern emirates', 'Dealerships, private collections and outdoor locations'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Car Photography Process',
            'steps' => [
                '<p>We discuss your goals, preferred style, and which features you want the imagery to highlight.</p>',
                '<p>Location or studio is planned in advance, and the vehicle is cleaned, positioned, and checked for reflections before the first frame.</p>',
                '<p>Exterior, interior, and detail photographs captured with careful attention to composition, lighting, and perspective throughout.</p>',
                '<p>Selected images professionally edited for consistency and delivered in high resolution, ready for immediate use across all platforms.</p>',
            ],
            'note' => '<p>Every session is planned before the shoot begins — nothing about automotive photography should be improvised on the day.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1. How much does portrait photography cost in the UAE?Do you provide car photography across the UAE?',
                    'answer' => '<p>Yes. We provide car photography services throughout Dubai and all seven Emirates for businesses, dealerships, collectors, and private vehicle owners.</p>',
                ],
                [
                    'question' => '2. Can you photograph vehicles at our location?',
                    'answer' => '<p>Yes. We can photograph vehicles at dealerships, showrooms, private collections, commercial premises, outdoor locations, or other suitable venues depending on your requirements.</p>',
                ],
                [
                    'question' => '3. Do you offer studio car photography?',
                    'answer' => '<p>Yes. We offer car photography studio sessions where controlled lighting and backgrounds create clean, professional images for advertising, catalogues, and marketing campaigns.</p>',
                ],
                [
                    'question' => '4. Can you photograph multiple vehicles for dealerships?',
                    'answer' => '<p>Yes. We regularly work with dealerships and automotive businesses to produce consistent photography for individual vehicles or complete inventories across all seven Emirates.</p>',
                ],
                [
                    'question' => '5. Where can the final photographs be used?',
                    'answer' => '<p>The images are suitable for dealership websites, online marketplaces, brochures, advertising campaigns, social media, editorial publications, presentations, and other marketing materials.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book Your Car Photoshoot Today',
            'text' => 'Automotive photography for dealerships, brands, collectors, and private owners anywhere in Dubai and across the UAE. Tell us about your project and we’ll get back to you with availability and pricing.',
        ]],
    ],
];
