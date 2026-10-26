<?php

// Body sections of /360-video-booth-experience-for-immersive-event-engagement, moved out of resources/views/360-video-booth-experience-for-immersive-event-engagement.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => '360 video booth services for events across the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/WhatsApp-Image-2026-07-21-at-2.09.28-PM.jpeg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>An interactive experience your guests will remember — and share — at corporate events, weddings, and brand activations.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your booth',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Event type',
                    'name' => 'event_type',
                    'options' => ['Corporate or launch', 'Wedding or private', 'Exhibition', 'Gala dinner'],
                ],
                [
                    'label' => 'What you need',
                    'name' => 'coverage',
                    'options' => ['Booth only', 'Booth and photos', 'Booth and video'],
                ],
            ],
            'venue_placeholder' => 'e.g. hotel, exhibition hall, home',
            'guests_label' => 'Roughly how many guests?',
            'guests_options' => ['Under 100', '100 to 300', '300 to 1,000', 'Over 1,000'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Licensed & insured',
                    'text' => 'Production company',
                ],
                [
                    'title' => 'Arabic and English',
                    'text' => 'Bilingual crew',
                ],
                [
                    'title' => '48-hour',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => 'All 7 Emirates',
                    'text' => 'Covered by our team',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'Whether your event takes place in a luxury hotel, exhibition center, corporate venue, wedding hall, outdoor location, or private residence, our team delivers a complete setup tailored to your venue.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Corporate events',
                'Weddings',
                'Exhibitions',
                'Product launches',
                'Gala dinners',
                'Brand activations',
                'Private celebrations',
                'Instagram Reels',
                'TikTok',
                'YouTube Shorts',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/Create-an-interactive-event-experience-your-guests-will-remembe.png',
            'heading' => 'Create an Interactive Event Experience Your Guests Will Remember',
            'paragraphs' => [
                'A great venue helps. So does a good stage and the right guest list. But that’s not what people talk about the next day. They talk about what they did. What they felt. What they posted.',
                'That’s where we come in. At Dubai Fotographer, we provide professional 360 video booth services across Dubai and the UAE. Event organizers use us. So do brands, businesses, and private clients. The idea is simple: give guests something interactive that keeps them engaged, and get a stream of exciting social media content out of it at the same time.',
                'What kind of event? Pretty much any. <a href="%%BASE%%/corporate-event-photography-videography">Corporate events</a>. <a href="%%BASE%%/wedding-photography-in-uae">Weddings</a>. Exhibitions. <a href="%%BASE%%/product-photography-services-in-uae">Product launch shoots</a>. Gala dinners. Brand activations. Private celebrations.',
                'We’ve been at this since 2014. We’re based in Dubai; we serve the entire UAE, and we’re a fully licensed and insured production company. Our crew speaks both Arabic and English, which makes venue coordination a lot easier. You get to focus on your event. We take care of the experience.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our 360 Video Booth Services',
            'tabs' => [
                [
                    'icon' => 'dot-circle',
                    'label' => 'How the booth works',
                    'image' => '2026/07/How-the-360-degree-booth-experience-works-at-events-across-the-UAE-1024x682.webp',
                    'alt' => 'How the 360 degree booth experience works at events across the UAE',
                    'heading' => 'How the booth works',
                    'body' => '<p>Here’s how it works. A guest steps onto the platform. Our professional setup spins around them and captures dynamic video from every angle. A few seconds later? High-quality content, ready to share instantly. People line up for a second go. Every time.</p><p>With traditional event photography or videography, guests get filmed. With the booth, they become part of the content. Professional camera systems. A rotating platform. Creative video effects layered on top. What comes out is a clip that feels modern and is very, very shareable.</p>',
                    'button' => 'Quote my booth',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Custom branding',
                    'image' => '2026/07/Corporate-brand-activations-1-1024x1024.webp',
                    'alt' => 'Custom branded 360 video booth clips',
                    'heading' => 'Custom branding',
                    'body' => '<p>Every event is different, which is why we offer custom branding designed to match your event theme, company identity, or campaign objectives. This typically includes brand or event logos, custom overlays and graphics, personalized animations, branded intros and outros, and corporate colors or marketing campaign elements applied directly to the final clips.</p><p>For corporate events and product launches, branded content often becomes a valuable marketing asset long after the event itself has ended.</p>',
                    'button' => 'Quote my branded booth',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Setup, operation and support',
                    'image' => '2026/07/phototune.ai_1784624320-1024x512.webp',
                    'alt' => '360 video booth setup and on-site support',
                    'heading' => 'Setup, operation and support',
                    'body' => '<p>Renting a booth is easy. Running one on the night, with a queue of excited guests and a cable that won’t cooperate? Not so much. We don’t just drop off equipment and leave. You get a complete managed solution.</p><p>Equipment transportation. Venue coordination. Complete setup. Professional operation once guests start arriving. Guest guidance, so everyone knows where to stand and what to do. Video processing. Content delivery. And on-site event support the whole time.</p>',
                    'button' => 'Quote my setup',
                ],
                [
                    'icon' => 'mobile-alt',
                    'label' => 'Instant social media content',
                    'image' => '2026/07/phototune.ai_1784624425-1024x512.webp',
                    'alt' => 'Instant social media ready 360 video content',
                    'heading' => 'Instant social media content',
                    'body' => '<p>Today’s guests want content they can post immediately. Our workflow processes videos quickly and delivers them in formats optimized for every major platform, helping guests share their experience in real time while increasing event exposure online.</p><p>Instagram Reels, TikTok, Facebook Stories, Snapchat, YouTube Shorts and LinkedIn.</p>',
                    'button' => 'Quote my booth',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'A unique attraction for every kind of event',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Corporate & launches', 'Galas & weddings', 'Exhibitions'],
            'images' => [
                [
                    'image' => '2026/07/K_AL8110-1-1024x683.jpg',
                    'full' => '2026/07/K_AL8110-scaled.jpg',
                    'alt' => 'Corporate and brand activation event in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/IMG_6208-1-1-e1784623840762.jpg',
                    'alt' => 'Wedding and private celebration in the UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/medium-shot-smiley-reporter-outdoors_23-2149267736.jpg',
                    'alt' => 'Exhibition and trade show coverage',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/K_AL8405-scaled.jpg',
                    'alt' => 'Gala dinner and award night in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/product-launch.jpg',
                    'alt' => 'Product launch and brand reveal',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp',
                    'full' => '2026/07/Professional-coverage-for-corporate-business-live-events.webp',
                    'alt' => 'Multi-Camera Event Recording Services in UAE',
                    'filter' => 0,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Pairing the 360 photo booth with our other event services',
            'body' => '<p>Most clients pair the booth with event photography, live streaming, or multi-camera recording, all handled by the same production team for consistent style and branding.</p><p class="svc-feature-label">Pairs well with:</p><ul><li><a href="%%BASE%%/multi-camera-event-recording">Multi-camera recording</a>: full event coverage at multiple angles alongside the booth experience</li><li><a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">Live streaming services</a>: broadcast the main stage while the booth captures guest-side content</li><li><a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone photography</a>: aerial coverage of venue scale and outdoor event spaces</li><li><a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">Instant printing &amp; commercial video</a>: printed keepsakes alongside polished commercial edits</li></ul>',
            'button' => 'Add services to my quote',
            'photos' => [
                [
                    'image' => '2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp',
                    'label' => 'Multi-camera',
                ],
                [
                    'image' => '2026/06/f414e020ca4581c085cde9f32c3b8059.webp',
                    'label' => 'Drone',
                ],
                [
                    'image' => '2026/07/K_AL8405-scaled.jpg',
                    'label' => 'Event coverage',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => '360 Video Booth Hire Across the UAE',
            'text' => 'We’ve set up in luxury hotels in Dubai, corporate venues in Abu Dhabi, and exhibition halls in Sharjah. Different rooms, different crowds. Same consistent, professional experience every single time.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Luxury hotels, corporate venues and private residences'],
                ['Abu Dhabi', 'Corporate venues and hotels'],
                ['Sharjah', 'Exhibition halls and event venues'],
                ['Other emirates', 'Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'How Booking a 360 Booth Works',
            'steps' => [
                '<p>You tell us your date, venue, guest count and schedule, and we confirm the expected guest throughput during planning.</p>',
                '<p>We assess the venue and prepare your custom branding: logos, overlays, animations and branded intros and outros.</p>',
                '<p>On the day our team handles transport, setup, operation and guest guidance, with a trained operator throughout.</p>',
                '<p>Clips are processed within moments and formatted for Instagram Reels, TikTok and Facebook Stories so guests can post in real time.</p>',
            ],
            'note' => '<p>Want photos of the whole event too? See our <a href="%%BASE%%/corporate-event-photography-videography">corporate event photography</a>, handled by the same team.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'How many guests can use the 360 booth per hour?',
                    'answer' => '<p>This depends on clip length and event flow, but most setups comfortably handle large guest volumes over a multi-hour event. We confirm expected throughput with you during planning based on your guest count and event schedule.</p>',
                ],
                [
                    'question' => 'Is an attendant included with the booth?',
                    'answer' => '<p>Yes. Every booking includes a trained operator who manages setup, guest guidance, and on-site support throughout the event.</p>',
                ],
                [
                    'question' => 'How quickly are branded video clips delivered to guests?',
                    'answer' => '<p>Clips are typically processed and ready to share within moments of being recorded, formatted for platforms like Instagram Reels, TikTok, and Facebook Stories so guests can post in real time. Clips are typically processed and ready to share within moments of being recorded, formatted for platforms like Instagram Reels, TikTok, and Facebook Stories so guests can post in real time.</p>',
                ],
                [
                    'question' => 'Can the 360 booth be used outdoors?',
                    'answer' => '<p>Yes, with appropriate space and surface conditions confirmed in advance. We assess the venue ahead of the event to confirm outdoor setup is suitable for the platform and lighting.</p>',
                ],
                [
                    'question' => 'Can the 360 booth be combined with other event coverage?',
                    'answer' => '<p>Yes. Most clients pair the booth with event photography, live streaming, or multi-camera recording, all handled by the same production team for consistent style and branding.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book Your 360 Video Booth Experience Today',
            'text' => 'Complete setup, operation, and branding — anywhere in Dubai or across the UAE. Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],
    ],
];
