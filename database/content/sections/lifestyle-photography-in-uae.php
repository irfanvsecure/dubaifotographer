<?php

// Body sections of /lifestyle-photography-in-uae, moved out of resources/views/lifestyle-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Lifestyle photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Lifestyle-photography-services-in-D.png',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Natural, story-driven imagery for brands, campaigns, and marketing channels — product, brand, portrait, and luxury lifestyle photography.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Shoot type',
                    'name' => 'shoot_type',
                    'options' => ['Products in context', 'Brand campaign', 'Lifestyle portraits', 'Luxury lifestyle'],
                ],
                [
                    'label' => 'Models and location',
                    'name' => 'support',
                    'options' => ['Need both', 'Models only', 'Location only', 'We have both'],
                ],
            ],
            'venue_placeholder' => 'e.g. your office, home or a location idea',
            'guests_label' => 'Where will the images be used?',
            'guests_options' => ['Website', 'Social media', 'Advertising campaign', 'Several channels'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '10+ years',
                    'text' => 'Of brand photography',
                ],
                [
                    'title' => 'All 7',
                    'text' => 'Emirates covered',
                ],
                [
                    'title' => '5.0',
                    'text' => 'Average client rating',
                ],
                [
                    'title' => 'Licensed & insured',
                    'text' => 'Production company since 2014',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'We photograph on location or at venues that best suit the creative direction of each project, travelling across the UAE with full production equipment so location doesn’t limit the quality of the final imagery.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Corporate brands',
                'Healthcare',
                'Retail & e-commerce',
                'Real estate',
                'Restaurants & cafés',
                'Hospitality',
                'Beauty & skincare',
                'Fashion & apparel',
                'Social media content',
                'Editorial',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/Photography-Lifestyle-Photography-That-Reflects-Your-Brand-Identity.jpg',
            'heading' => 'Lifestyle Photography That Reflects Your Brand Identity',
            'paragraphs' => [
                'Stick a product on a white background and people know what it looks like. They still have no idea whether it belongs in their life. Professional lifestyle photography fixes that. A cup of karak going cold next to a laptop while someone answers one last email. A handbag thrown onto the passenger seat on the way to a meeting in Business Bay. Photographs like that feel natural and relatable.',
                'We’ve been at it since 2014, with Abdul Rehman leading the company from the start. Over the years, we’ve worked with businesses across a wide range of industries as a fully licensed and insured production company. Every project is tailored to the products, people, and environments that best represent your brand, which makes it ideal for <a href="%%BASE%%/fashion-photography-in-uae">fashion campaigns</a> and seasonal collections.',
                'We handle the whole creative process ourselves. Picking the locations. Planning the styling. Directing the talent, which sometimes means getting a nervous model to stop staring at the lens. Then refining the final images until they’re right.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Lifestyle Photography Services',
            'tabs' => [
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Lifestyle Product Photography',
                    'image' => '2026/07/lifestyle.jpg',
                    'alt' => 'Lifestyle product photography in the UAE',
                    'heading' => 'Lifestyle Product Photography',
                    'body' => '<p>Honestly, a jar of face cream on white tells you it’s a jar. That’s it. Put it next to a toothbrush with the lid off and suddenly you can picture your own bathroom. That’s lifestyle product photography: products in realistic environments, so customers see what they’re for and how they get used. Cosmetics, home décor, technology, food, consumer goods- we’ve shot them all like this. It looks authentic. The product still wins every time.</p>',
                    'button' => 'Quote my product shoot',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Brand Lifestyle Photography',
                    'image' => '2026/07/bussiness-phottographyjpg.jpg',
                    'alt' => 'Brand lifestyle photography in the UAE',
                    'heading' => 'Brand Lifestyle Photography',
                    'body' => '<p>People, locations, and carefully selected styling, mixed together until the photos start saying something about your company’s personality and values. Not just “here’s what we sell.” Clients use these on websites, in campaigns, and on social media. We’ve even had a few end up in annual reports, which made the finance team very happy.</p>',
                    'button' => 'Quote my campaign',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Lifestyle Portrait Photography',
                    'image' => '2026/07/Lifestyle-portrait-photography-e1784201722815.jpg',
                    'alt' => 'Lifestyle portrait photography in the UAE',
                    'heading' => 'Lifestyle Portrait Photography',
                    'body' => '<p>Most people would rather do anything than stand in front of a grey backdrop. Fair. So this is the relaxed alternative to traditional studio portraits. We shoot individuals somewhere that feels natural and relevant to their work or personality: their own kitchen, their own site, their own messy desk. Approachable, still professional, and true to the individual.</p>',
                    'button' => 'Quote my portrait',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Luxury Lifestyle Photography',
                    'image' => '2026/07/Luxury-lifestyle-photography-1024x682.webp',
                    'alt' => 'Luxury lifestyle photography in the UAE',
                    'heading' => 'Luxury Lifestyle Photography',
                    'body' => '<p>Different pace altogether. Carefully selected locations, refined styling, thoughtful composition. We do this for premium products, hospitality brands, real estate developments, and exclusive experiences, where even a cushion in the wrong spot gets noticed.</p>',
                    'button' => 'Quote my luxury shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your brand and campaign. We’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Visuals that strengthen your brand across every platform',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Campaigns', 'Fashion & beauty', 'Hospitality'],
            'images' => [
                [
                    'image' => '2026/07/Website-campaign-imagery.png',
                    'alt' => 'Website and campaign lifestyle imagery',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/phototune.ai_1784203088-e1784203371848.png',
                    'alt' => 'Lifestyle social media content',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Fashion-editorial.jpg',
                    'alt' => 'Fashion and editorial lifestyle photography',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/phototune.ai_1784203732.png',
                    'alt' => 'Beauty and skincare lifestyle photography',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Luxury-hospitality-lifestyle-photography916.jpg',
                    'alt' => 'Luxury and hospitality lifestyle photography',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Luxury-lifestyle-photographyjj-1024x682.webp',
                    'full' => '2026/07/Luxury-lifestyle-photographyjj.webp',
                    'alt' => 'Lifestyle Photography in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Professional Lifestyle Photography for Brands & Businesses',
            'body' => '<p>Last-minute confession from behind the camera: the photos brands end up loving are rarely the “perfect” ones. They’re the slightly messy ones. A half-eaten manakish on the counter. A dog walking right through the frame. Somebody laughing at something we didn’t catch. That stuff is why strong lifestyle photography is built around authenticity.</p><p>We don’t bother with overly staged compositions, but the photographs still keep the quality and consistency anyone would expect from <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a>.</p><p class="svc-feature-label">We know where the images are going before we shoot:</p><ul><li>Website</li><li>Advertising</li><li><a href="%%BASE%%/influencer-photography-in-uae">Social media</a> content</li><li>Printed materials</li><li>Editorial use</li></ul>',
            'button' => 'Plan my shoot',
            'photos' => [
                [
                    'image' => '2026/07/reflect-how-a-product-service-or-brand-naturally-fits-into-its-intended-setting-1024x683.webp',
                    'label' => 'Real settings',
                ],
                [
                    'image' => '2026/07/Luxury-hospitality-lifestyle-photography916.jpg',
                    'label' => 'Refined styling',
                ],
                [
                    'image' => '2026/07/Lifestyle-photography-services-in-D.png',
                    'label' => 'Natural moments',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Lifestyle Photography Across the UAE',
            'text' => 'We provide lifestyle photography across all seven Emirates, on location or at venues that best suit the creative direction of the project.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'On location, at your venue or in a real home or office setting'],
                ['Abu Dhabi', 'Brand, hospitality and real estate shoots'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'How We Plan & Run Every Lifestyle Shoot',
            'steps' => [
                '<p>We discuss your brand, campaign objectives, intended audience, and how the images will be used.</p>',
                '<p>We plan locations, styling, props, and models where required.</p>',
                '<p>On the day, our team creates natural interactions and well-balanced compositions while adapting to the environment and available light.</p>',
                '<p>Every selected image is professionally edited for consistency in colour, tone, and presentation before final delivery in high resolution.</p>',
            ],
            'note' => '<p>“Lifestyle photography works when it stops looking like photography — when it feels like the brand simply lives that way.”</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'What is lifestyle photography?',
                    'answer' => '<p>Lifestyle photography creates natural, story-driven images that place people or products in realistic environments. Unlike traditional studio photography, it focuses on showing how a product, service, or brand fits into everyday life while maintaining a professional commercial standard.</p>',
                ],
                [
                    'question' => 'What types of businesses use lifestyle photography?',
                    'answer' => '<p>Lifestyle photography is suitable for a wide range of industries, including fashion, beauty, hospitality, food and beverage, real estate, retail, healthcare, and corporate businesses. It’s commonly used for websites, advertising campaigns, social media, brochures, and other marketing materials.</p>',
                ],
                [
                    'question' => 'Do you provide lifestyle photography outside Dubai?',
                    'answer' => '<p>Yes. We provide lifestyle photography across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain. We photograph on location or at venues that best suit the creative direction of the project.</p>',
                ],
                [
                    'question' => 'Can you arrange models and shoot locations?',
                    'answer' => '<p>Yes. Depending on your project requirements, we can assist with sourcing suitable locations, coordinating models, and planning styling elements to ensure the final imagery aligns with your brand and campaign objectives.</p>',
                ],
                [
                    'question' => 'Where can lifestyle photography be used?',
                    'answer' => '<p>Lifestyle photographs can be used across company websites, social media platforms, advertising campaigns, brochures, editorial publications, product packaging, presentations, and other marketing materials.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your lifestyle photography project today',
            'text' => 'Natural, story-driven imagery for brands anywhere in Dubai and across the UAE. Tell us about your brand and campaign, and we’ll come back with availability and pricing.',
        ]],
    ],
];
