<?php

// Body sections of /travel-photography-in-uae, moved out of resources/views/travel-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Travel photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Travel-photography-services-in-Dubai.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Stunning travel photography for every destination in the UAE — golden-hour shots against the Burj Khalifa, candid moments on Palm Jumeirah, and quiet frames across the desert dunes.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your travel shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Who is travelling?',
                    'name' => 'travellers',
                    'options' => ['Solo', 'Couple or honeymoon', 'Family', 'Group of friends'],
                ],
                [
                    'label' => 'Session length',
                    'name' => 'session',
                    'options' => ['One hour', 'Half day', 'Full day'],
                ],
            ],
            'venue_placeholder' => 'e.g. Burj Khalifa, Palm Jumeirah, desert',
            'guests_label' => 'How many locations?',
            'guests_options' => ['1 location', '2 to 3', '4 or more', 'Not sure yet'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Since 2014',
                    'text' => 'Licensed and insured production company',
                ],
                [
                    'title' => 'Arabic and English',
                    'text' => 'Bilingual crew',
                ],
                [
                    'title' => 'Photo and video',
                    'text' => 'One team, one booking',
                ],
                [
                    'title' => '48 hours',
                    'text' => 'Turnaround available',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'Our travel photographers cover Dubai, Abu Dhabi, Sharjah, and the wider UAE — including popular spots like the desert dunes, Palm Jumeirah, and iconic city landmarks across all seven Emirates.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Solo travel',
                'Couples & honeymoons',
                'Family vacations',
                'Destination portraits',
                'Flying dress',
                'Desert dunes',
                'Burj Khalifa',
                'Palm Jumeirah',
                'Sheikh Zayed Mosque',
                'Old Dubai',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Stunning Travel Photography for Every Destination in the UAE',
            'paragraphs' => [
                'Most holiday albums end up looking the same. Two hundred selfies and one blurry shot of the Burj Khalifa taken from a taxi window. A trip to the UAE deserves better than that, and turning it into a story worth keeping starts with the right lens. Our travel photography service captures all of it, with a real eye for detail and authenticity.',
                'Dubai Fotographer is led by Abdul Rehman, and we specialise in portrait travel photography for couples, families and solo explorers. These are people who want more than a phone snapshot. They want images that still feel like memories when they look back at them years later. We’ve been doing this since 2014 as a fully licensed and insured production company, and our crew is bilingual in Arabic and English. Every travel photoshoot is tailored to your itinerary, your personality, and the locations that matter most to you, whether that’s the old souks in Deira or a rooftop bar in Downtown.',
                'We’re a trusted travel photographer across Dubai, Abu Dhabi and beyond. We bring local expertise; we know where the light falls and when the crowds thin out, and we keep the shooting style relaxed and natural. You get to enjoy the moment, and we’ll take care of everything else.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Travel Photography Services',
            'tabs' => [
                [
                    'icon' => 'plane',
                    'label' => 'Solo travel photography',
                    'image' => '2026/07/Solo-travel-photography-1-1024x682.webp',
                    'alt' => 'Solo travel photography in Dubai',
                    'heading' => 'Solo travel photography',
                    'body' => '<p>Travel alone, and you’ll come home with loads of pictures of places and hardly any of yourself. Our travel photography sessions sort that out. We tag along and capture your journey authentically: candid street moments, landmark portraits, and golden-hour shots that tell your personal travel story, with you actually in the frame for once.</p>',
                    'button' => 'Quote my solo shoot',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Couple & honeymoon photoshoots',
                    'image' => '2026/07/Couple-honeymoon-photoshoots-UAE846-1024x682.webp',
                    'alt' => 'Couple and honeymoon photoshoot in the UAE',
                    'heading' => 'Couple & honeymoon photoshoots',
                    'body' => '<p>Celebrate the trip together with a romantic travel photoshoot across Dubai’s skyline, Palm Jumeirah or the desert dunes. You’ll get timeless portraits you’ll treasure long after the trip ends and the holiday tan has faded. See also our dedicated <a href="%%BASE%%/couple-photography-in-uae">couple photography</a> sessions.</p>',
                    'button' => 'Quote my couple shoot',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Family vacation photography',
                    'image' => '2026/07/Family-vacation-photography-1024x682.webp',
                    'alt' => 'Family vacation photography in Dubai',
                    'heading' => 'Family vacation photography',
                    'body' => '<p>Kids hate posing, so we don’t make them. We preserve real, unposed family moments during your UAE holiday, and our relaxed approach to portrait travel photography puts everyone at ease. What you get back are genuine smiles and natural, storybook-style images. It pairs beautifully with our <a href="%%BASE%%/family-photography-in-uae">family photography</a> sessions.</p>',
                    'button' => 'Quote my family shoot',
                ],
                [
                    'icon' => 'map-marker-alt',
                    'label' => 'Destination portrait sessions',
                    'image' => '2026/07/Destination-portrait-sessionsjpg-682x1024.webp',
                    'alt' => 'Destination portrait session at a UAE landmark',
                    'heading' => 'Destination portrait sessions',
                    'body' => '<p>Hire a travel photographer for a dedicated portrait session at iconic UAE locations, from the Sheikh Zayed Grand Mosque to Dubai Marina. We plan it entirely around your vision, where you’d like to go and how you want the photos to feel.</p>',
                    'button' => 'Quote my portrait session',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Flying dress & desert photoshoots',
                    'image' => '2026/07/Flying-dress-photography-youll-treasure-for-yearsjpg-1024x639.webp',
                    'alt' => 'Flying dress photoshoot in the UAE desert',
                    'heading' => 'Flying dress & desert photoshoots',
                    'body' => '<p>Lots of visitors ask for this one, and it’s easy to see why it’s a UAE favourite. Dramatic <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress</a> and desert photoshoots against golden sand and open skies, the dress flying out behind you in the wind. Bold, editorial-style images, great for social media and keepsakes alike.</p>',
                    'button' => 'Quote my desert shoot',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Group & friends photoshoots',
                    'image' => '2026/07/Group-friends-travel-photoshoots-1024x682.webp',
                    'alt' => 'Group and friends travel photoshoot in Dubai',
                    'heading' => 'Group & friends photoshoots',
                    'body' => '<p>Travelling with friends? We do fun, dynamic travel photoshoot sessions that capture your group’s energy and connection at the most photogenic spots in Dubai and Abu Dhabi.</p>',
                    'button' => 'Quote my group shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us your travel dates, destinations, and the type of experience you’d like to capture. We’ll send a personalised quote, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'The UAE’s most photogenic destinations',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Landmarks', 'Desert', 'Portraits'],
            'images' => [
                [
                    'image' => '2026/07/Dubai-skyline-Burj-Khalifa-1024x682.webp',
                    'full' => '2026/07/Dubai-skyline-Burj-Khalifa.jpg',
                    'alt' => 'Dubai skyline and Burj Khalifa travel photography',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Palm-Jumeirah.jpg',
                    'alt' => 'Travel photoshoot on Palm Jumeirah',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Al-Fahidi-the-Creek.jpg',
                    'alt' => 'Old Dubai, Al Fahidi and the Creek',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/DSC02540-1-2.jpg',
                    'alt' => 'Desert dunes travel photography in the UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Sheikh-Zayed-Mosque.jpg',
                    'alt' => 'Sheikh Zayed Mosque, Abu Dhabi',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Solo-travel-photography-1-1024x682.webp',
                    'full' => '2026/07/Solo-travel-photography-1.jpg',
                    'alt' => 'Solo travel photography in Dubai',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Photography, Videography & Memories Under One Roof',
            'body' => '<p>A photo can’t give you back the sound of your kids screaming with laughter as the dune buggy tips over the top of a dune. Video can. Along with our travel photography services, we do professional videography, so every laugh, every candid moment, and every breathtaking UAE backdrop gets saved in more than one format.</p><p>From your travel photoshoot, we can cut a cinematic highlight reel or a few short clips made for social media, and our team takes care of the lot under a single booking. It’s one team with one vision, and a smooth experience from the first shot to the final edit.</p><p>Honeymoons, family vacations, and milestone trips are where this combined approach gets booked the most. Think a 40th birthday, or the first holiday abroad with the grandkids.</p>',
            'button' => 'Add video to my quote',
            'photos' => [
                [
                    'image' => '2026/07/woman-taking-photograph-her-boyfriend-camera-near-sea_23-2147841588.jpg',
                    'label' => 'Highlight reel',
                ],
                [
                    'image' => '2026/07/How-our-travel-photographers-plan-every-session.jpg',
                    'label' => 'Social clips',
                ],
                [
                    'image' => '2026/07/Family-vacation-photography.webp',
                    'label' => 'Family trips',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'The UAE’s Most Photogenic Destinations',
            'text' => 'Local knowledge shapes pretty much everything we do. We know where the best light falls on Palm Jumeirah, and we know the quieter, less crowded angles near Dubai’s most iconic landmarks.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Desert dunes', 'Al Qudra and beyond, with dramatic golden-hour light'],
                ['Dubai skyline', 'Burj Khalifa, Downtown and Dubai Marina'],
                ['Palm Jumeirah', 'Candid and portrait moments'],
                ['Old Dubai', 'Al Fahidi, the Creek and the old souks in Deira'],
                ['Abu Dhabi', 'Sheikh Zayed Grand Mosque'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Approach to Every Travel Photography Session',
            'steps' => [
                '<p>Tell us about your trip, preferred locations, and the style of images you’re after. We tailor every travel photoshoot around your goals, timeline, and travel companions.</p>',
                '<p>Our travel photographer maps out timing, locations, and lighting based on local expertise, ensuring your session runs smoothly and captures the UAE at its most photogenic.</p>',
                '<p>Relax and explore while we work around you. Whether candid or posed, every moment feels natural, unhurried, and true to your personality.</p>',
                '<p>Within days, receive a professionally edited, high-resolution gallery ready to share, print, or treasure — delivered hassle-free from your travel photography session.</p>',
            ],
            'note' => '<p>No confusing tiers, no hidden costs: choose a one-hour landmark session, a half-day multi-location shoot or full-day travel coverage.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1.How do I book a travel photographer in the UAE?',
                    'answer' => '<p>Simply share your travel dates, preferred locations, and the type of session you want. We’ll confirm availability and send a tailored quote — usually within a few hours.</p>',
                ],
                [
                    'question' => '2. How long does a typical travel photoshoot last?',
                    'answer' => '<p>Sessions range from one hour for quick landmark shoots to a full day for multi-location coverage. We’ll help you choose based on your itinerary and goals.</p>',
                ],
                [
                    'question' => '3. Do you shoot across all of the UAE, not just Dubai?',
                    'answer' => '<p>Yes. Our travel photographers cover Dubai, Abu Dhabi, Sharjah, and the wider UAE, including popular spots like the desert dunes, Palm Jumeirah, and iconic city landmarks.</p>',
                ],
                [
                    'question' => '4. How soon will I receive my edited photos?',
                    'answer' => '<p>Most galleries are delivered within a few days, professionally edited and ready to download, share, or print — so your memories stay fresh.</p>',
                ],
                [
                    'question' => '5. Can I include videography with my photoshoot?',
                    'answer' => '<p>Absolutely. We offer combined photography and videography sessions, so you can capture your trip in both stills and motion with one team.</p>',
                ],
                [
                    'question' => '6. What if the weather changes on the day of my shoot?',
                    'answer' => '<p>Our team monitors conditions closely and can adjust timing or locations as needed, ensuring your portrait travel photography session still delivers great results.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book Your Travel Photography Session Today',
            'text' => 'Let’s create something unforgettable — with flexible packages, fast turnaround, and a team that knows the UAE inside out, you’re in trusted hands from start to finish.',
        ]],
    ],
];
