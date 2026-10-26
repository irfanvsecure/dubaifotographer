<?php

// Body sections of /influencer-photography-in-uae, moved out of resources/views/influencer-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Brand &amp; influencer photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/IMG_8728-1-1-e1784536387476.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Professional photography that turns your online presence into something unforgettable — for content creators, entrepreneurs, and businesses.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'What do you need?',
                    'name' => 'shoot_type',
                    'options' => ['Branding photoshoot', 'Influencer content', 'Personal branding', 'Brand photography'],
                ],
                [
                    'label' => 'Package',
                    'name' => 'package',
                    'options' => ['Single session', 'Multi-look', 'Full day', 'Monthly retainer'],
                ],
            ],
            'venue_placeholder' => 'e.g. Downtown rooftop, DIFC, our studio',
            'guests_label' => 'How many looks?',
            'guests_options' => ['1', '2 to 3', '4 or more', 'Not sure yet'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '48-hour',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => '1 to 3 hours',
                    'text' => 'Typical session length',
                ],
                [
                    'title' => 'Since 2014',
                    'text' => 'Licensed and insured',
                ],
                [
                    'title' => 'All 7 Emirates',
                    'text' => 'Studio and location shoots',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'From Dubai’s iconic skyline to studios and lifestyle locations across the Emirates — we shoot wherever your brand story takes us.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Branding photoshoots',
                'Influencer content',
                'Personal branding',
                'Social media',
                'Fashion & beauty',
                'Food & beverage',
                'Fitness & wellness',
                'E-commerce & retail',
                'Travel & hospitality',
                'Tech & startups',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/DSC02540-1-1.jpg',
            'heading' => 'Why Choose Us to Capture Your Brand?',
            'paragraphs' => [
                'Now and then, a client walks in after a bad shoot somewhere else, and you can see it on their face. There’s a folder of photos on their laptop they’ll never post. Choosing the right photographer really can make or break your brand’s visual presence, and we don’t treat that lightly at all. We’re experienced influencer and brand photographers in the UAE, and our <a href="%%BASE%%/services">photography services</a> put creative vision together with some proper strategic planning, so the content genuinely performs instead of looking good for a day and then vanishing.',
                'That’s the reason for all our questions before a shoot. What’s your niche? Who’s your audience, actually? Where do you want to be in a few months? Once we know, every image fits into the bigger brand story. Either way, it’s your style that leads, because a one-size-fits-all approach doesn’t really suit anyone.',
                'Mostly, people come back for the reliable turnaround times, the professional editing, and a collaborative process that keeps them comfortable and confident on camera, even if they tend to freeze up once a lens is on them. Whether you’re an influencer, entrepreneur, or growing business, we’ll make visuals that build trust, boost engagement, and truly represent who you are.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our influencer and brand photography services',
            'tabs' => [
                [
                    'icon' => 'star',
                    'label' => 'Branding photoshoot',
                    'image' => '2026/07/Branding-photoshoot-1024x683.webp',
                    'alt' => 'Branding photoshoot in Dubai',
                    'heading' => 'Branding photoshoot',
                    'body' => '<p>This is a branding photoshoot built around you: your identity, your personality, the story behind what you do. It’s a good fit for entrepreneurs, businesses, and creators who want a professional visual presence online that people actually remember.</p>',
                    'button' => 'Quote my branding shoot',
                ],
                [
                    'icon' => 'instagram',
                    'label' => 'Influencer photography',
                    'image' => '2026/07/IMG_94671-2-1024x683.webp',
                    'alt' => 'Photoshoot example from Dubai Fotographer portfolio',
                    'heading' => 'Influencer photography',
                    'body' => '<p>Our influencer photography is meant to look like your real life, just on a good day. We focus on your lifestyle, your aesthetic, and your personality, and the result is authentic, scroll-stopping content that resonates with your audience and makes your personal brand stronger.</p><p>One client wanted a polished <a href="%%BASE%%/fashion-photography-in-uae">fashion photoshoot</a> to sort out her visual identity before a big launch.</p>',
                    'button' => 'Quote my influencer shoot',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Personal branding photography',
                    'image' => '2026/07/Personal-branding-photography-682x1024.webp',
                    'alt' => 'Personal branding photography in Dubai',
                    'heading' => 'Personal branding photography',
                    'body' => '<p>Clients hire people they trust. Our personal branding photography shows off your expertise and your personality, so entrepreneurs and professionals can build trust and credibility, and end up with a polished online presence people recognise straight away.</p>',
                    'button' => 'Quote my personal branding',
                ],
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Brand photography',
                    'image' => '2026/07/Brand-photography-1024x683.webp',
                    'alt' => 'Brand photography in Dubai',
                    'heading' => 'Brand photography',
                    'body' => '<p>Brand photography is about the bigger picture. We shoot your products, your workspace, and the story behind them, and plan it so the visuals all hang together. That cohesive look strengthens brand recognition and helps you connect authentically with your target audience.</p>',
                    'button' => 'Quote my brand shoot',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Photoshoot for social media',
                    'image' => '2026/07/social-media-1024x682.webp',
                    'alt' => 'Photoshoot for social media in Dubai',
                    'heading' => 'Photoshoot for social media',
                    'body' => '<p>Sometimes you just need fresh posts. This is a dedicated photoshoot for social media content, shaped around your niche and what each platform needs. You get versatile, engaging images that keep your feed fresh and consistent for weeks.</p>',
                    'button' => 'Quote my social shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Ready to create content that connects? Tell us about your brand and we’ll get back to you with availability and pricing.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent brand and influencer shoots',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Portraits', 'Lifestyle', 'Brand'],
            'images' => [
                [
                    'image' => '2026/07/p1-1.jpg',
                    'alt' => 'Professional influencer photography in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/How-our-photographers-plan-every-social-media-shoot.jpg',
                    'alt' => 'Social media photoshoot planned by our photographers',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/IMGL0257-1-1-683x1024.webp',
                    'full' => '2026/07/IMGL0257-1-1.jpg',
                    'alt' => 'Influencer portrait photography in the UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Branding-photoshoot-1024x683.webp',
                    'full' => '2026/07/Branding-photoshoot.jpg',
                    'alt' => 'Branding photoshoot in Dubai',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/IMG_94671-2-1024x683.webp',
                    'full' => '2026/07/IMG_94671-2.webp',
                    'alt' => 'Photoshoot example from Dubai Fotographer portfolio',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Brand-photography-1024x683.webp',
                    'full' => '2026/07/Brand-photography.webp',
                    'alt' => 'Brand photography in Dubai',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Social Media Photography Packages Built Around Your Needs',
            'body' => '<p>No two brands are the same, so it’d be a bit silly to sell them all the same package. That’s why our social media photography packages are flexible and built to fit your goals, your budget, and how much content you actually need.</p><p>If you just want a quick content refresh, a single-session shoot will do the job. If you’re after more, our larger packages come with multiple looks, a few different locations, outfit changes, and <a href="%%BASE%%/portrait-photography-in-uae">professional portrait sessions</a>, so you end up with a complete, versatile content library. You also get a curated mix of portraits, lifestyle shots, <a href="%%BASE%%/beauty-photography-in-uae">beauty shots,</a> and detail photography, all optimized for Instagram, TikTok, LinkedIn and wherever else you post.</p><p class="svc-feature-label">Choose the package that fits your goals:</p><ul><li>Single session</li><li>Multi-look package</li><li>Full day shoot</li><li>Monthly retainer or quarterly content plan</li><li>Custom package</li></ul>',
            'button' => 'Quote my package',
            'photos' => [
                [
                    'image' => '2026/07/Social-media-photography-package6371.webp',
                    'label' => 'Multi-look package',
                ],
                [
                    'image' => '2026/07/social-media.webp',
                    'label' => 'Social content',
                ],
                [
                    'image' => '2026/07/Personal-branding-photography-682x1024.webp',
                    'label' => 'Portraits',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Brand Photography Across the UAE',
            'text' => 'Keen on iconic Dubai locations? We’ll take you up to the Frame, down to the Marina, or for a wander through the old souks. Prefer something simple? There’s a tailored studio setup for that.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Downtown rooftops, DIFC, Dubai Marina, the Frame, Al Fahidi and the beach'],
                ['Abu Dhabi', 'Studios and lifestyle locations'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our approach to brand photography',
            'steps' => [
                '<p>We start by understanding your brand, goals, and content needs — discussing your style, target audience, and vision to plan a shoot that truly represents you.</p>',
                '<p>Our team scouts the perfect locations, creates shot lists, and plans lighting and styling details, ensuring every element aligns with your brand’s aesthetic and message.</p>',
                '<p>On shoot day, our photographers guide you through natural poses and authentic moments, capturing versatile content across multiple looks, settings, and platform-ready formats.</p>',
                '<p>We professionally edit every image for a polished, consistent look, then deliver your final gallery quickly — ready to elevate your social media presence immediately.</p>',
            ],
            'note' => '<p>Want something different? Ask about laid-back <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle content</a> or <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress photography</a> in the desert.</p>',
            'button' => 'Book a consultation',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1.What is included in a branding photoshoot?',
                    'answer' => '<p>A branding photoshoot typically includes a pre-shoot consultation, location or studio setup, multiple outfit changes, professional posing guidance, and a curated set of edited, high-resolution images tailored to your brand identity.</p>',
                ],
                [
                    'question' => '2. How much does a social media photography package cost?',
                    'answer' => '<p>Pricing depends on session length, number of locations, and deliverables. We offer flexible packages to suit influencers, startups, and established brands — contact us for a custom quote based on your needs.</p>',
                ],
                [
                    'question' => '3. Do you offer photography services for influencers only, or businesses too?',
                    'answer' => '<p>We work with both. Our services are designed for influencers building a personal brand as well as businesses and entrepreneurs looking for professional brand photography and consistent social media content.</p>',
                ],
                [
                    'question' => '4. How long does a typical shoot take?',
                    'answer' => '<p>Most sessions run between 1-3 hours, depending on the number of looks, locations, and content types required. Larger packages with multiple setups may take longer.</p>',
                ],
                [
                    'question' => '5. Where do you shoot in the UAE?',
                    'answer' => '<p>We shoot across Dubai and beyond, including iconic city backdrops, studios, and lifestyle locations, chosen to match your brand’s aesthetic and content goals.</p>',
                ],
                [
                    'question' => '6. How soon will I receive my edited photos?',
                    'answer' => '<p>Turnaround time varies by package, but most clients receive their professionally edited gallery within 3-7 business days after the shoot.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your brand photography session today',
            'text' => 'Professional brand and influencer photography anywhere in Dubai and across the UAE.',
        ]],
    ],
];
