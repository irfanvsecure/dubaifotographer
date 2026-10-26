<?php

// Body sections of /hotel-photography-service-in-uae, moved out of resources/views/hotel-photography-service-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Hotel photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Hotel-photography-2.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Professional photography for hotels, resorts, boutique properties, and hospitality brands — rooms, interiors, lifestyle, and dining, all under one team.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your hotel shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Property type',
                    'name' => 'property_type',
                    'options' => ['City hotel', 'Resort or beachfront', 'Boutique hotel', 'Serviced apartments'],
                ],
                [
                    'label' => 'What to shoot',
                    'name' => 'shoot_focus',
                    'options' => ['Rooms and suites', 'Interiors and dining', 'Lifestyle scenes', 'Full property'],
                ],
            ],
            'venue_placeholder' => 'Hotel name and area',
            'guests_label' => 'How many room types?',
            'guests_options' => ['1 to 2', '3 to 5', '6 or more', 'Not sure yet'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '10+ years',
                    'text' => 'Of hospitality photography',
                ],
                [
                    'title' => 'All 7',
                    'text' => 'Emirates covered',
                ],
                [
                    'title' => '48-hour',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => 'Licensed & insured',
                    'text' => 'Arabic and English crew',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'Our production teams travel to your property with full studio-grade lighting and camera equipment, maintaining the same production standard regardless of Emirate.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => ['Guest rooms', 'Suites', 'Lobbies', 'Restaurants', 'Spas', 'Pools', 'Conference rooms', 'Fitness centres', 'Resorts', 'Serviced apartments'],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'About Our Team',
            'paragraphs' => [
                'We’re Dubai Fotographer. Hotels, resorts, and hospitality brands across the UAE come to us because every property has its own character, and they want that to come through in their professional visual content and help their marketing efforts.',
                'We’ve been at it since 2014, with Abdul Rehman running the company the whole time. In those years we’ve worked with plenty of businesses around the UAE. We’re fully licensed and insured as a production company, and the crew is bilingual in Arabic and English, which helps a lot when you’re working with hotel staff on a busy day.',
                'Boutique hotels, luxury resorts, serviced apartments, bigger hospitality groups- we shoot for all of them. Nothing is left to chance on the day; each shoot is carefully planned. We’ll cover the welcoming <a href="%%BASE%%/interior-photographer-in-uae">interiors</a>, the striking <a href="%%BASE%%/exterior-photography-in-uae">hotel exteriors</a>, and everything in between, and keep a consistent visual style so the photos match on your websites, booking platforms, marketing campaigns, and every other promotional channel you use.',
                '“A guest books a feeling before they book a room — that feeling comes from your photography.” — Abdul Rehman',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Hotel Photography Services',
            'tabs' => [
                [
                    'icon' => 'hotel',
                    'label' => 'Hotel Room Photography',
                    'image' => '2026/07/Hotel-photography-3-1024x1024.webp',
                    'alt' => 'Hotel room photography in Dubai',
                    'heading' => 'Hotel Room Photography',
                    'body' => '<p>Rooms, suites, villas, and serviced apartments shot for comfort, detail, and accurate representation.</p><p>Standard rooms, suites, and villas photographed for consistency across every room type.</p>',
                    'button' => 'Quote my rooms',
                ],
                [
                    'icon' => 'building',
                    'label' => 'Hotel Interior Photography',
                    'image' => '2026/07/Hotel-interior-photography-1024x682.webp',
                    'alt' => 'Hotel interior photography in the UAE',
                    'heading' => 'Hotel Interior Photography',
                    'body' => '<p>Lobbies, restaurants, spas, conference rooms, and fitness centres, all with consistent visual style.</p><p>Professional hotel photography gives potential visitors an accurate representation of your property. They can check out the <a href="%%BASE%%/architectural-photography-in-uae">architecture</a>, peek into the guest rooms, see the public spaces, the amenities, and the dining areas, all from their phone.</p>',
                    'button' => 'Quote my interiors',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Hotel Lifestyle Photography',
                    'image' => '2026/07/Hotel-lifestyle-photography-1024x1024.webp',
                    'alt' => 'Hotel lifestyle photography in Dubai',
                    'heading' => 'Hotel Lifestyle Photography',
                    'body' => '<p>Authentic guest interactions and styled scenes for websites, campaigns, and social media content.</p><p>Who are you trying to bring in? Business travellers who care about a good desk and fast Wi-Fi? Leisure guests looking for the pool and the breakfast spread? Luxury tourists who want the suite with the view? The answer changes how we shoot, because the photos should reflect the experience your hotel actually offers.</p>',
                    'button' => 'Quote my lifestyle shoot',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Luxury Hotel Photography',
                    'image' => '2026/07/Gemini_Generated_Image_v4f1i3v4f1i3v4f1-1024x559.webp',
                    'alt' => 'Luxury hotel photography in the UAE',
                    'heading' => 'Luxury Hotel Photography',
                    'body' => '<p>Architecture, high-end interiors, and exclusive amenities for five-star and luxury hospitality brands.</p><p>On the day, every image is carefully composed and professionally lit. Afterwards, it’s edited so your property looks natural, not overdone, and the style stays consistent across your website, your booking platforms, and all your promotional materials.</p>',
                    'button' => 'Quote my luxury property',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Before guests compare prices or read reviews, they browse the images.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Every hospitality property type',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Rooms', 'Spaces', 'Lifestyle'],
            'images' => [
                [
                    'image' => '2026/07/Guest-rooms-suites.jpg',
                    'alt' => 'Guest rooms and suites photography',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Hotel-photography-3-768x768.webp',
                    'full' => '2026/07/Hotel-photography-3.webp',
                    'alt' => 'Hotel room photography in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Hospitality-photography-that-reflects-your-propertys-identity11.jpg',
                    'alt' => 'Hospitality photography that reflects your property’s identity',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Gemini_Generated_Image_v4f1i3v4f1i3v4f1-768x419.webp',
                    'full' => '2026/07/Gemini_Generated_Image_v4f1i3v4f1i3v4f1.webp',
                    'alt' => 'Luxury hotel photography in the UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/women-wearing-hijab-having-good-time_23-2149255320-1-1024x654.webp',
                    'full' => '2026/07/women-wearing-hijab-having-good-time_23-2149255320-1.jpg',
                    'alt' => 'Guests enjoying the property',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/06/female-photographer-influencer-shoot-dubai-1024x571.webp',
                    'full' => '2026/06/female-photographer-influencer-shoot-dubai.webp',
                    'alt' => 'Female Photographers in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'More than rooms — a complete visual library',
            'body' => '<p>Everything sits with one production team. Photography and videography, <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone</a> shots, <a href="%%BASE%%/luxury-food-photography-for-restaurants-hotels-and-brands">food and beverage photography</a>– all of it. When it all runs through one studio, the visual style matches, the colour grading matches, and scheduling is a lot simpler.</p><p class="svc-feature-label">One production team covers:</p><ul><li>Dining &amp; F&amp;B: restaurant interiors and food photography combined for full visual consistency</li><li>Spas &amp; wellness: calm, luxury wellness spaces</li><li>Pools &amp; facilities: outdoor amenities &amp; views</li><li>Lifestyle scenes: guests enjoying the property</li></ul>',
            'button' => 'Add these to my quote',
            'photos' => [
                [
                    'image' => '2026/07/Pools-facilities.jpg',
                    'label' => 'Pools & facilities',
                ],
                [
                    'image' => '2026/07/Spas-wellness-e1783340454600.jpg',
                    'label' => 'Spas & wellness',
                ],
                [
                    'image' => '2026/07/Lifestyle-scenes.jpg',
                    'label' => 'Lifestyle scenes',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Every hospitality property type, across the UAE',
            'text' => 'Full-property coverage including accommodation, recreational facilities, dining venues, and surrounding environments — with drone coverage available for larger resort properties.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'City hotels, beachfront and resort properties, boutique hotels'],
                ['Abu Dhabi', 'Hotels, resorts and serviced apartments'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'How We Plan & Run Every Hotel Photoshoot',
            'steps' => [
                '<p>First we talk: we need to understand your property and know where these images are going.</p>',
                '<p>We list the areas to be photographed and build a schedule around your hotel to minimise disruption to guests.</p>',
                '<p>During the shoot, each space gets shot when the lighting conditions are at their best.</p>',
                '<p>We pick the strongest frames, edit colour, lighting and perspective, and hand them over ready for websites, booking platforms, brochures and social media.</p>',
            ],
            'note' => '<p>Hotel dining outlets are often paired with our <a href="%%BASE%%/luxury-food-photography-for-restaurants-hotels-and-brands">food photography</a> for full visual consistency.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'Do you provide hotel photography outside Dubai?',
                    'answer' => '<p>Yes. We provide hotel photography across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p>',
                ],
                [
                    'question' => 'Can you photograph hotels while they are operating?',
                    'answer' => '<p>Yes. Many hotels remain open during photography sessions. We work with your team to schedule the shoot around guest activity and hotel operations, minimising disruption while capturing each area at its best.</p>',
                ],
                [
                    'question' => 'Do you offer drone photography for hotels?',
                    'answer' => '<p>Yes. For suitable properties and where regulations permit, we include professional drone photography and videography to showcase hotel exteriors, landscaped grounds, beachfront locations, and surrounding attractions from above.</p>',
                ],
                [
                    'question' => 'How long does a hotel photography shoot take?',
                    'answer' => '<p>Smaller boutique hotels may be completed within a day, while larger resorts or luxury properties often require multiple sessions to cover guest rooms, facilities, and lifestyle photography.</p>',
                ],
                [
                    'question' => 'Where can the final hotel photographs be used?',
                    'answer' => '<p>Your photographs can be used across your hotel website, Booking.com, Expedia, social media, digital advertising, brochures, press releases, and other marketing materials in high-resolution digital and print formats.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your hotel photography session today',
            'text' => 'Professional hospitality photography anywhere in Dubai, Abu Dhabi, or across the UAE. Tell us about your property and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],
    ],
];
