<?php

// Body sections of /female-photographers-in-uae, moved out of resources/views/female-photographers-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Female photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/05/dubai-fotographer-female-photography-team.webp',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Experienced female photographers and videographers for weddings, private celebrations, portraits, corporate events, and women-only occasions across the UAE.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Request a female photographer',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Occasion',
                    'name' => 'occasion',
                    'options' => ['Wedding or bridal', 'Private celebration', 'Corporate event', 'Portrait or maternity'],
                ],
                [
                    'label' => 'Coverage',
                    'name' => 'coverage',
                    'options' => ['Photo and video', 'Photo only', 'Video only'],
                ],
            ],
            'venue_placeholder' => 'e.g. hotel, venue or private home',
            'guests_label' => 'Roughly how many guests?',
            'guests_options' => ['Just me or family', 'Under 50', '50 to 200', 'Over 200'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Female team',
                    'text' => 'Photographers and videographers',
                ],
                [
                    'title' => 'Since 2014',
                    'text' => 'Licensed and insured',
                ],
                [
                    'title' => 'All 7',
                    'text' => 'Emirates covered',
                ],
                [
                    'title' => 'Bilingual',
                    'text' => 'Arabic and English crew',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'From female photographers in Dubai to assignments in Abu Dhabi, Sharjah, and across every Emirate, we travel to hotels, venues, private residences, and event spaces throughout the UAE.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Weddings',
                'Bridal preparation',
                'Henna nights',
                'Engagements',
                'Baby showers',
                'Maternity',
                'Portraits',
                'Women-only events',
                'Graduations',
                'Corporate events',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Professional Female Photographers Across the UAE',
            'paragraphs' => [
                'Ask clients here what they want from a photographer, and quite a few won’t even mention the camera first. Finding the right female photographer in the UAE tends to be about comfort, privacy, and cultural considerations, with technical skill coming after. You see that most at <a href="%%BASE%%/wedding-photography-in-uae">weddings</a>, private celebrations, <a href="%%BASE%%/portrait-photography-in-uae">portraits,</a> and women-only events.',
                'That’s why Dubai Fotographer has experienced female photographers and videographers on the team. They’ve got the technical expertise you’d expect from anyone who works with us, and they offer the same professional photography services, but they’re also really good at putting every client at ease, pretty much from hello.',
                'We got started in 2014, and Abdul Rehman has run the company from day one. Since then, our team has worked with individuals, families, businesses and organisations all over the UAE, as a fully licensed and insured production company.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Female Photographers for Every Occasion',
            'tabs' => [
                [
                    'icon' => 'star',
                    'label' => 'Female Wedding Photography',
                    'image' => '2026/06/female-photographer-photographing-wedding-1024x572.webp',
                    'alt' => 'Female Photographers in UAE',
                    'heading' => 'Female Wedding Photography',
                    'body' => '<p>From bridal preparations and family portraits to ceremony and reception, with full respect for your traditions and privacy.</p><p>Multicultural and Muslim weddings covered with full respect for traditions, privacy, and cultural requirements.</p>',
                    'button' => 'Quote my wedding',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Maternity & Bridal Preparation',
                    'image' => '2026/05/female-photographer-dubai-private-shoot-1024x572.webp',
                    'alt' => 'Female photographer with client in Dubai studio',
                    'heading' => 'Maternity & Bridal Preparation',
                    'body' => '<p>Think about pregnancy sessions, or a bride getting ready, or the henna preparations the night before. There are wardrobe changes, there’s close physical proximity, and there are moments most clients would just rather keep in a female-only setting. Our all-female photography team has done plenty of <a href="%%BASE%%/maternity-photography-in-uae">maternity sessions</a>, and the main thing we’ve learned is patience and discretion. We go at the client’s comfort level, not the pace of a shot list.</p><p>Bridal preparation gets the same treatment from us. Sometimes it’s a quiet private session for expecting mothers at home. Other times it’s henna and getting-ready coverage before a large wedding, with aunties, cousins and a makeup artist all squeezed into one room.</p>',
                    'button' => 'Quote my session',
                ],
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Fashion, Beauty & Content Creation',
                    'image' => '2026/05/Female-Photographers-3-1024x737.webp',
                    'alt' => 'Female Photographers in UAE',
                    'heading' => 'Fashion, Beauty & Content Creation',
                    'body' => '<p>These days a lot of brands, stylists, and individual creators ask for a female photography team, and quite often privacy has nothing to do with it. The reason is the shoot itself.</p><p>Our female crew does a lot of <a href="%%BASE%%/fashion-photography-in-uae">fashion shoots</a>, for personal portfolios, brand campaigns, <a href="%%BASE%%/influencer-photography-in-uae">influencer content,</a> and editorial-style projects around Dubai and Abu Dhabi. On set, they work hand in hand with the stylists and MUAs, so nobody’s waiting around for anybody else.</p>',
                    'button' => 'Quote my shoot',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Family & Private Events',
                    'image' => '2026/07/DSC00283-2-1024x683.webp',
                    'alt' => 'Professional event photography by Dubai Fotographer',
                    'heading' => 'Family & Private Events',
                    'body' => '<p>Engagements, baby showers, birthdays, and graduations covered naturally, without unnecessary interruption.</p><p>One week it might be a small, intimate private gathering at someone’s home, and the next it’s one of those large <a href="%%BASE%%/corporate-event-photography-videography">corporate events</a> in a hotel ballroom.</p>',
                    'button' => 'Quote my celebration',
                ],
                [
                    'icon' => 'microphone',
                    'label' => 'Corporate & Community Events',
                    'image' => '2026/07/IMGL5601-1-1024x682.webp',
                    'alt' => 'Product launch and brand activation photography in Dubai',
                    'heading' => 'Corporate & Community Events',
                    'body' => '<p>Conferences, educational programmes, healthcare initiatives, and government functions covered with full professionalism.</p>',
                    'button' => 'Quote my event',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Portrait Photography',
                    'image' => '2026/07/Untitled-design-768x768.webp',
                    'alt' => 'Dubai Fotographer portfolio – commercial photography sample',
                    'heading' => 'Portrait Photography',
                    'body' => '<p>Professional profiles, personal milestones, and personal brand sessions tailored to your preferred style.</p>',
                    'button' => 'Quote my portrait',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your event and we’ll match you with the right professional, usually getting back to you within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Female photography for every setting',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Weddings & portraits', 'Events'],
            'images' => [
                [
                    'image' => '2026/07/INSTA-1-1.jpg',
                    'alt' => 'Wedding and bridal photography by a female photographer',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Couple-family-portraits-e1784186536872.jpg',
                    'alt' => 'Family portraits by a female photographer',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/06/female-photographer-photographing-wedding-1024x572.webp',
                    'full' => '2026/06/female-photographer-photographing-wedding.webp',
                    'alt' => 'Female Photographers in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/ASF01055-1-1024x683.jpg',
                    'full' => '2026/07/ASF01055-1.jpg',
                    'alt' => 'Corporate event photography in the UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/IMGL8825-1.jpg',
                    'alt' => 'Event photography in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/IMGL5601-1-1024x682.webp',
                    'full' => '2026/07/IMGL5601-1.jpg',
                    'alt' => 'Product launch and brand activation photography in Dubai',
                    'filter' => 1,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Female Videography & Women-Only Events',
            'body' => '<p>We have experienced female videographers who cover weddings, corporate events, interviews, private celebrations, and other occasions where clients prefer a woman to manage the video production.</p><p>Our female photographers regularly cover women-only events, private celebrations, bridal gatherings, and cultural occasions where privacy and discretion are important. Photography and videography come from the same team, so there’s no chasing two vendors or paying two invoices.</p><p class="svc-feature-label">Female videographers cover:</p><ul><li>Event highlights</li><li>Social media content</li><li>Personal keepsakes</li></ul>',
            'button' => 'Add video to my quote',
            'photos' => [
                [
                    'image' => '2026/07/women-wearing-hijab-having-good-time_23-2149255320-1-1024x654.webp',
                    'label' => 'Female videography',
                ],
                [
                    'image' => '2026/07/Gemini_Generated_Image_jvkfrxjvkfrxjvkf.png',
                    'label' => 'Women-only events',
                ],
                [
                    'image' => '2026/07/ChatGPT-Image-Jul-6-2026-04_48_23-PM.png',
                    'label' => 'One team',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Female Photographers Across the UAE',
            'text' => 'We work in Dubai, Abu Dhabi, and the other Emirates, and we’ll pair you up with the female photographer who suits your project.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Hotels, venues, private residences and event spaces'],
                ['Abu Dhabi', 'Weddings, corporate events and private sessions'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Approach to Every Assignment',
            'steps' => [
                '<p>Let us know you prefer a female photographer when you enquire, and we assign a professional whose experience matches your event.</p>',
                '<p>We discuss your event type, venue, any cultural or privacy considerations, and which moments matter most before the shoot.</p>',
                '<p>Our photographers work closely with clients and organisers throughout the event, capturing genuine moments without disrupting the experience.</p>',
                '<p>Every selected image is professionally edited for colour, lighting, and consistency, delivered in high resolution for digital and print use.</p>',
            ],
            'note' => '<p>“The best photographs happen when the person in front of the camera feels completely at ease — that’s what the right photographer makes possible.”</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1.Can I specifically request a female photographer?',
                    'answer' => '<p>Yes. If you prefer a female photographer, simply let us know when making your enquiry. We’ll assign an experienced professional whose expertise matches your event and photography requirements.</p>',
                ],
                [
                    'question' => '2. Do you provide female videographer services?',
                    'answer' => '<p>Yes. We have experienced female videographers who cover weddings, corporate events, interviews, private celebrations, and other occasions where clients prefer a woman to manage the video production.</p>',
                ],
                [
                    'question' => '3. Do you photograph women-only events?',
                    'answer' => '<p>Yes. Our female photographers regularly cover women-only events, private celebrations, bridal gatherings, and cultural occasions where privacy and discretion are important. We work closely with organisers to ensure coverage respects the nature of the event.</p>',
                ],
                [
                    'question' => '4. Do you provide services outside Dubai?',
                    'answer' => '<p>Yes. Our team works throughout the UAE, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, for both photography and videography assignments.</p>',
                ],
                [
                    'question' => '5. What types of events do your female photographers cover?',
                    'answer' => '<p>Our female photographers cover weddings, engagement parties, family celebrations, portraits, graduation ceremonies, corporate events, conferences, educational programmes, healthcare events, community initiatives, and many other private and public occasions.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book a female photographer or videographer today',
            'text' => 'Experienced, discreet, and culturally sensitive coverage anywhere in Dubai and across the UAE. Tell us about your event and we’ll match you with the right professional.',
        ]],
    ],
];
