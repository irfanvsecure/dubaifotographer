<?php

// Body sections of /wedding-photography-in-uae, moved out of resources/views/wedding-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Wedding photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Wedding-photography-services-in-Dubai.png',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Natural, timeless imagery for every celebration — from intimate ceremonies to grand multi-day events across all seven Emirates.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your wedding',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Celebration',
                    'name' => 'wedding_type',
                    'options' => ['Traditional or cultural', 'Luxury wedding', 'Civil ceremony', 'Destination or multi-day'],
                ],
                [
                    'label' => 'Coverage',
                    'name' => 'coverage',
                    'options' => ['Wedding day', 'Engagement or pre-wedding', 'Both'],
                ],
            ],
            'venue_placeholder' => 'Hotel, wedding hall or residence',
            'guests_label' => 'Roughly how many guests?',
            'guests_options' => ['Under 50', '50 to 200', '200 to 500', 'Over 500'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '10+ years',
                    'text' => 'Of wedding photography',
                ],
                [
                    'title' => 'Cultural and religious',
                    'text' => 'Weddings welcomed',
                ],
                [
                    'title' => 'Bilingual',
                    'text' => 'Arabic / English crew',
                ],
                [
                    'title' => 'All 7 Emirates',
                    'text' => 'Covered',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'Whether your ceremony is at a luxury hotel, an outdoor venue, a private residence, or a traditional wedding hall, we travel to your location with full professional equipment across all seven Emirates.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Civil ceremonies',
                'Destination weddings',
                'Luxury weddings',
                'Traditional weddings',
                'Cultural & religious weddings',
                'Multi-day wedding events',
                'Private family celebrations',
                'Engagement photography',
                'Pre-wedding photoshoots',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/Professional-wedding-photography-for-every-celebration-e1784199231831.avif',
            'heading' => 'Professional Wedding Photography for Every Celebration',
            'paragraphs' => [
                'Professional wedding photography helps keep the memories of any celebration alive long after it is over. It captures the feelings, the people, and all the small things that make that day special. Whether a wedding is small and private or a big party, the pictures should capture how it felt and document the important moments carefully.',
                'Here at Dubai Fotographer, we offer wedding photography services everywhere in the UAE. Our goal is to make natural-looking, timeless pictures that tell the complete story of your wedding day. We started in 2014, with Abdul Rehman leading the way, and have worked for many couples across the UAE. We are a fully licensed and insured production company, and we have a crew that speaks both Arabic and English. Also, for brides who like, we have <a href="%%BASE%%/female-photographers-in-uae">female photographers</a> ready.',
                'Since each celebration is unique, we spend time before the event finding out about your schedule, where it will be held, and what is most important to you. This way, we can be ready for key moments and work without problems throughout the day. We capture real interactions, those important little details, and all the big steps, even offering a <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">live photo printing station</a> for guests to take home pictures right away.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Capturing Every Stage of Your Wedding Day',
            'tabs' => [
                [
                    'icon' => 'star',
                    'label' => 'Bridal Preparations',
                    'image' => '2026/07/Bridal-preparations.jpg',
                    'alt' => 'Bridal preparations photographed before a wedding in Dubai',
                    'heading' => 'Bridal Preparations',
                    'body' => '<p>Walk into the bride’s room an hour before the ceremony, and you’ll see why we get there early. Hair’s half done. Someone is ironing a dupatta on the bed. An aunt is on the phone telling the driver to hurry up, and the bride is somehow the calmest person there. That excitement before the ceremony gives us some of the most personal photographs of the whole day.</p><p>Final touches to the wedding attire. A sister fixing the veil. Candid moments with family and the bridal party, the kind nobody remembers happening until they see the photo. That’s what we’re there to catch: the anticipation and emotion that set the tone for the celebration.</p>',
                    'button' => 'Quote my wedding day',
                ],
                [
                    'icon' => 'check-circle',
                    'label' => 'Wedding Ceremony',
                    'image' => '2026/07/Wedding-ceremony057.jpg',
                    'alt' => 'Wedding ceremony photography in the UAE',
                    'heading' => 'Wedding Ceremony',
                    'body' => '<p>The ceremony is at the heart of every wedding. We’re there for the key moments: the exchange of vows, the ring ceremony, the meaningful traditions your families have carried for years, and the genuine reactions of the people watching. A dad wiping his eyes. A best friend grinning. We stay discreet and keep to the side, so the experience unfolds naturally, and nobody is interrupted.</p>',
                    'button' => 'Quote my ceremony',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Couple and Family Portraits',
                    'image' => '2026/07/Couple-family-portraits-e1784186536872.jpg',
                    'alt' => 'Couple and family wedding portraits in Dubai',
                    'heading' => 'Couple and Family Portraits',
                    'body' => '<p>Then the portraits. It’s a chance for timeless photographs of the couple together, and with family members and close friends. Getting thirty relatives into one shot takes a bit of patience. We give gentle direction, crack a joke or two, and keep things relaxed. That’s what makes natural portraits that show genuine relationships and emotions.</p><p>A dedicated <a href="%%BASE%%/couple-photography-in-uae">couple photography session</a> gives you time for a few quiet moments together- ten minutes, twenty if the schedule allows- while we make timeless portraits that reflect your personalities and your relationship.</p>',
                    'button' => 'Quote my portraits',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Reception and Celebrations',
                    'image' => '2026/07/Reception-celebrations-e1784186657991.jpg',
                    'alt' => 'Wedding reception photography in the UAE',
                    'heading' => 'Reception and Celebrations',
                    'body' => '<p>After the formalities give way to celebration, the mood changes completely. We carry on documenting the speeches, guest interactions, first dances, cake cutting, and the atmosphere of the reception. These candid moments complete the story of the wedding day. They keep the energy and joy you shared with family and friends long after the last guest has gone home.</p>',
                    'button' => 'Quote my reception',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Every moment, preserved. Tell us about your wedding for availability and pricing.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Wedding moments',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Traditions', 'Bride', 'Couple and family'],
            'images' => [
                [
                    'image' => '2026/07/Ceremony-traditions.jpg',
                    'alt' => 'Wedding ceremony traditions',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/IMGL9395-1.jpg',
                    'alt' => 'Bride on the wedding stage',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Bridal-preparations-1-e1784188253263.jpg',
                    'alt' => 'Bride getting ready before the ceremony',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Ceremony-traditions499.jpg',
                    'alt' => 'Couple at the wedding venue entrance',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Ceremony-traggditions.jpg',
                    'alt' => 'Couple portrait on the wedding day',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/phototune.ai_1784188907.png',
                    'alt' => 'Bride with her family',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Engagement and Pre-Wedding Photography',
            'body' => '<p>Your wedding story begins long before the ceremony. These sessions celebrate the journey and help couples feel completely comfortable in front of the camera.</p><p>Our engagement photography gives you timeless portraits that capture the excitement leading up to your wedding. We can shoot at a place that means something to you two, out in scenic outdoor settings, or at one of the iconic venues across the UAE. The images work for save-the-date cards, wedding websites, invitations, or simply as personal keepsakes.</p><p>Pre-wedding photoshoots are beautifully planned portraits, shot before the main ceremony day. You get to connect with the camera, and with us, before the wedding itself. Thinking about a flying dress shoot in the desert, or a more cinematic pre-wedding session? We’ll coordinate both as a single production: one team, one plan, one day.</p>',
            'button' => 'Add a pre-wedding shoot',
            'photos' => [
                [
                    'image' => '2026/07/Engagement-photography-1024x682.webp',
                    'label' => 'Engagement',
                ],
                [
                    'image' => '2026/07/Pre-wedding-photoshoots-682x1024.webp',
                    'label' => 'Pre-wedding',
                ],
                [
                    'image' => '2026/07/wedding-photography-5.webp',
                    'label' => 'Couple session',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Wedding Photography Across the UAE',
            'text' => 'We’ve shot small nikahs in a family majlis with twenty guests. We’ve shot ballroom receptions with eight hundred guests. Every celebration is unique, so we adapt our photography to your schedule, your venue and your personal preferences.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Luxury hotels, ballrooms and outdoor venues'],
                ['Abu Dhabi', 'Hotels, wedding halls and private residences'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Planning Your Wedding Photography Session',
            'steps' => [
                '<p>A few weeks out, we sit down with you: schedule first, then the venue, your preferred photography style and any family traditions you’d like included.</p>',
                '<p>We walk through the wedding day timeline together and list the important family members for the family session and group photographs.</p>',
                '<p>We talk about portrait locations and lighting, coordinate with planners and other vendors where required, and confirm your photography priorities.</p>',
                '<p>On the day we stay discreet and capture genuine moments as they unfold, then your photographs are professionally edited and delivered in high resolution.</p>',
            ],
            'note' => '<p>Planning a family shoot as well? See our <a href="%%BASE%%/family-photography-in-uae">family photography</a> service.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'Do you provide wedding photography services across the UAE?',
                    'answer' => '<p>Yes. We provide wedding photography throughout Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p>',
                ],
                [
                    'question' => 'Can you photograph cultural and religious weddings?',
                    'answer' => '<p>Yes. We regularly photograph weddings with different cultural traditions, religious ceremonies, and family customs while respecting the unique requirements of each celebration.</p>',
                ],
                [
                    'question' => 'Do you offer wedding photography packages?',
                    'answer' => '<p>Yes. Our wedding photography packages can be tailored to suit the size of your celebration, the coverage required, and any additional photography services you may need.</p>',
                ],
                [
                    'question' => 'Can we request specific family or group photographs?',
                    'answer' => '<p>Yes. Before your wedding, we discuss any important family groupings or must-have photographs to ensure they are included during the day.</p>',
                ],
                [
                    'question' => 'When will we receive our wedding photographs?',
                    'answer' => '<p>Delivery times vary depending on the size of the wedding, but all selected photographs are professionally edited and delivered in high resolution once post-production has been completed.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your Dream Wedding Photography Today',
            'text' => 'Natural, timeless wedding photography for every celebration anywhere in Dubai and across the UAE. Tell us about your wedding and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],
    ],
];
