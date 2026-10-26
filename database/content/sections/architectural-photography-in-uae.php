<?php

// Body sections of /architectural-photography-in-uae, moved out of resources/views/architectural-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Architectural photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Architectural-photography-services-in-Dubai.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Precise, refined photography for architects, developers, interior designers, and property owners — exteriors, interiors, and fine art architectural imagery.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your building',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Building type',
                    'name' => 'building_type',
                    'options' => ['Commercial or office', 'Residential or villa', 'Hotel or hospitality', 'Public or retail'],
                ],
                [
                    'label' => 'What to shoot',
                    'name' => 'coverage',
                    'options' => ['Exteriors and interiors', 'Exteriors only', 'Interiors only', 'Fine art'],
                ],
            ],
            'venue_placeholder' => 'e.g. project name or location',
            'guests_label' => 'Size of the project?',
            'guests_options' => ['Single villa or unit', 'One building', 'Several buildings', 'Large development'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '10+ years',
                    'text' => 'Of architectural photography',
                ],
                [
                    'title' => 'All 7',
                    'text' => 'Emirates covered',
                ],
                [
                    'title' => '4 approaches',
                    'text' => 'Exteriors, interiors, property, fine art',
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
            'text' => 'Whether your project is a commercial tower in downtown Dubai, a residential development in Abu Dhabi, or a hospitality project in Ras Al Khaimah, we deliver the same level of planning, precision, and production quality regardless of location.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Commercial offices',
                'Hotels & hospitality',
                'Interior designers',
                'Property developers',
                'Architects',
                'Government buildings',
                'Educational institutions',
                'Retail developments',
                'Award submissions',
                'Fine art',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/Professional-Architectural-Photography-forModern-Developments.jpg',
            'heading' => 'Professional Architectural Photography for Modern Developments',
            'paragraphs' => [
                'A building can take years to design and build. Photographing it properly shouldn’t be an afterthought. Professional architectural photography records a building’s design, craftsmanship, and character, accurately and in detail.',
                'At Dubai Fotographer, we provide architectural photography across Dubai and the UAE. We create high-quality imagery for architects, developers, <a href="%%BASE%%/interior-photographer-in-uae">interior designers</a>, <a href="%%BASE%%/construction-site-photography-in-uae">construction companies</a>, and property owners.',
                'We started in 2014, and Abdul Rehman has led the company since then. Over the years, we’ve worked on projects of all different scales, from single villas to large developments. We’re a fully licensed and insured production company, and our crew is bilingual in Arabic and English. Nothing gets left to chance. We plan every assignment carefully, so the final images show the completed project accurately and stay true to its original design intent.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Architectural Photography Services',
            'tabs' => [
                [
                    'icon' => 'building',
                    'label' => 'Building Photography',
                    'image' => '2026/07/Building-photography​-1024x683.webp',
                    'alt' => 'Building photography of exteriors and façades in the UAE',
                    'heading' => 'Building Photography',
                    'body' => '<p>Ask an architect what they want from photos of their building, and they’ll usually say the same thing: “Make it look like it does.” Fair enough. We shoot commercial, residential, hospitality, and public buildings, and we keep coming back to proportion, structure, and design. Each frame is carefully composed so nothing gets distorted, and the little details that define the architecture actually show up instead of disappearing into a wide shot.</p>',
                    'button' => 'Quote my building',
                ],
                [
                    'icon' => 'hotel',
                    'label' => 'Interior Architecture Photography',
                    'image' => '2026/07/Interior-Architecture-photography-1024x768.webp',
                    'alt' => 'Interior architecture photography in the UAE',
                    'heading' => 'Interior Architecture Photography',
                    'body' => '<p>Walk into a good lobby, and you feel it before you’ve looked at anything specific. We try to get that onto camera. Our interior photography looks at the design, the layout, the lighting, and the atmosphere of the space, so whoever’s looking at the photos can visualise standing there before they arrive.</p>',
                    'button' => 'Quote my interiors',
                ],
                [
                    'icon' => 'map-pin',
                    'label' => 'Commercial & Residential Property',
                    'image' => '2026/07/Commercial-Residential-Property-Photography-1024x681.webp',
                    'alt' => 'Commercial and residential property photography in the UAE',
                    'heading' => 'Commercial & Residential Property',
                    'body' => '<p>One day it’s an office building, the next a private residence, then maybe retail spaces or a mixed-use development with all of those under one roof. We change how we shoot depending on the scale, the layout, and the design of the property. The pictures need to work for marketing, and they also need to hold up for documentation purposes, so we keep both in mind.</p>',
                    'button' => 'Quote my property',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Fine Art Architectural Photography',
                    'image' => '2026/07/Fine-Art-Architectural-Photography-2-1024x678.webp',
                    'alt' => 'Fine art architectural photography in the UAE',
                    'heading' => 'Fine Art Architectural Photography',
                    'body' => '<p>Some clients want something a bit more like art. For those projects, we slow right down and look at form, geometry, light and texture, and make distinctive images that wouldn’t look out of place on a gallery wall. They tend to go into editorial features, exhibitions, publications, and architectural portfolios, where visual ambition counts for as much as technical accuracy.</p>',
                    'button' => 'Quote my fine art shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your building and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Visuals that strengthen your brand across every platform',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Marketing', 'Editorial', 'Fine art'],
            'images' => [
                [
                    'image' => '2026/07/Marketing-developer-presentations.jpg',
                    'alt' => 'Architectural photography for marketing and developer presentations',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Practice-company-sites.jpg',
                    'alt' => 'Architectural photography for practice and company websites',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/High-quality-documentation-built-for-architectural-publications.jpg',
                    'alt' => 'Architectural photography for portfolios and award submissions',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Publications.jpg',
                    'alt' => 'Architectural photography for editorial and press',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Fine-art.jpg',
                    'alt' => 'Fine art architectural photography for exhibitions and prints',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Fine-Art-Architectural-Photography--682x1024.webp',
                    'full' => '2026/07/Fine-Art-Architectural-Photography-.webp',
                    'alt' => 'Architectural Photography in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Design, Light & Perspective in Architectural Photography',
            'body' => '<p>Anybody can stand across the road and take a picture of a finished building. That isn’t really architectural photography, though; it’s just documenting. What we’re trying to do is show the thinking behind the place. Why the windows are that tall, why the architect chose stone here and glass over there, how the proportions feel when you walk up to the entrance.</p><p>Light is a huge part of it. We’ve seen a white facade look completely dull at midday and then turn warm and full of shadow an hour before sunset. So before we shoot, we spend time on perspective, on composition, and especially on timing.</p><p class="svc-feature-label">Where the photos get used:</p><ul><li>Portfolios and award submissions</li><li>Marketing and developer presentations</li><li>Company websites and <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">property photography</a></li><li>Editorial features and publications</li><li>Exhibitions and prints</li></ul>',
            'button' => 'Plan my shoot',
            'photos' => [
                [
                    'image' => '2026/07/dDesign-Light-Perspective-in-Architectural-Photography-399-1024x681.webp',
                    'label' => 'Light',
                ],
                [
                    'image' => '2026/07/Showcasing-Architectural-Design-with-Purpose-1024x683.webp',
                    'label' => 'Detail',
                ],
                [
                    'image' => '2026/07/Architectural-photography-services-in-Dubai.jpg',
                    'label' => 'Perspective',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Architectural Photography Across the UAE',
            'text' => 'We regularly work in hotels, offices, retail spaces, and other operational properties while minimising disruption to daily activities.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Commercial towers in downtown Dubai'],
                ['Abu Dhabi', 'Residential developments'],
                ['Ras Al Khaimah', 'Hospitality projects'],
                ['Other emirates', 'Sharjah, Ajman, Fujairah and Umm Al Quwain'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'How We Plan & Run Every Architectural Shoot',
            'steps' => [
                '<p>We look at the architecture, check out the surrounding environment, and ask what the images are going to be used for.</p>',
                '<p>We review the building’s design, identify defining architectural features, and determine shooting times, viewpoints, and lighting conditions for a consistent set of images.</p>',
                '<p>Methodical coverage of both the overall structure and finer design details — attention to composition, symmetry, natural light, and the surrounding environment throughout.</p>',
                '<p>Every selected image professionally edited for natural colours, balanced exposure, and a polished, consistent finish across the full collection.</p>',
            ],
            'note' => '<p>Some developments are big enough that the view from above really helps sell them. For those, we bring in <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography</a> to show how the building relates to its site and surroundings.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'Do you photograph both interiors and exteriors?',
                    'answer' => '<p>Yes. We photograph complete architectural projects, including exterior façades, interior spaces, architectural details, and surrounding environments.</p>',
                ],
                [
                    'question' => 'Do you provide architectural photography across the UAE?',
                    'answer' => '<p>Yes. We regularly photograph projects throughout Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p>',
                ],
                [
                    'question' => 'When is the best time to photograph a building?',
                    'answer' => '<p>It depends on the building’s orientation and available light. We schedule shoots at the time of day that best showcases the architecture, which we determine during the planning stage after reviewing the project.</p>',
                ],
                [
                    'question' => 'Can you photograph occupied buildings?',
                    'answer' => '<p>Yes. We regularly work in hotels, offices, retail spaces, and other operational properties while minimising disruption to daily activities.</p>',
                ],
                [
                    'question' => 'Where can the photographs be used?',
                    'answer' => '<p>The images are suitable for websites, project portfolios, marketing materials, presentations, editorial publications, and award submissions.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your architectural photography project today',
            'text' => 'Precision photography for architects, developers, and designers anywhere across the UAE. Send us the project and its location, and we’ll come back with availability and a quote.',
        ]],
    ],
];
