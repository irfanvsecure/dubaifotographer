<?php

// Body sections of /portrait-photography-in-uae, moved out of resources/views/portrait-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Portrait photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Portrait-photography-services-in-Dubai.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Professional portrait photography for individuals, families, and businesses — corporate headshots, beach sessions, family portraits, and fashion portraits across all seven Emirates.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your portraits',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Portrait type',
                    'name' => 'portrait_type',
                    'options' => ['Business headshot', 'Corporate team', 'Family', 'Fashion', 'Beach', 'Close-up'],
                ],
                [
                    'label' => 'Setting',
                    'name' => 'setting',
                    'options' => ['Dubai studio', 'Your office', 'Beach or outdoor'],
                ],
            ],
            'venue_placeholder' => 'e.g. our Dubai studio, your office, a beach',
            'guests_label' => 'How many people?',
            'guests_options' => ['Just me', '2 to 5', '6 to 20', 'More than 20'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Licensed',
                    'text' => '& insured production company',
                ],
                [
                    'title' => 'Bilingual',
                    'text' => 'Arabic / English crew',
                ],
                [
                    'title' => '48-hour',
                    'text' => 'turnaround available',
                ],
                [
                    'title' => 'All 7',
                    'text' => 'Emirates covered',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'We offer on-location portrait photography throughout the UAE, including offices, outdoor landmarks, and beach settings across all seven Emirates, in addition to sessions at our Dubai studio.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Business headshots',
                'Corporate portraits',
                'Team portraits',
                'Family portraits',
                'Fashion portraits',
                'Beach sessions',
                'Close-up headshots',
                'LinkedIn profiles',
                'Model portfolios',
                'Press & editorial',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Professional Portrait Photography for Every Individual & Business',
            'paragraphs' => [
                'People make up their minds about you fast, often before you’ve said a word. That’s why first impressions matter, and a well-crafted portrait can say more than words ever could.',
                'Maybe you need a polished <a href="%%BASE%%/corporate-event-photography-videography">corporate headshot</a> for LinkedIn. Maybe it’s a striking business profile for your company website, or a warm <a href="%%BASE%%/family-photography-in-uae">family keepsake</a> to hang in the hallway. Whatever it is, our portrait photography studio brings technical skill and genuine care to every session across the UAE.',
                'Abdul Rehman leads the company. Since 2014, we’ve worked with individuals, families and businesses in all seven Emirates, as a fully licensed and insured production company with a bilingual Arabic and English crew.',
                'Our approach to professional portrait photography is fairly simple. Thoughtful lighting, relaxed direction, and a good eye for detail, so every client feels comfortable in front of the camera, even the ones who swear they’re “not photogenic.” We shoot in the studio, outdoors, and down by the beach, and we tailor each image to reflect your personality, your brand, or your story.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Portrait Photography Services',
            'tabs' => [
                [
                    'icon' => 'star',
                    'label' => 'Business portraits',
                    'image' => '2026/07/DSC001721-1-1024x683.webp',
                    'alt' => 'Recent photography work by Dubai Fotographer',
                    'heading' => 'Business portraits',
                    'body' => '<p>People look at your LinkedIn photo a lot more than you’d guess, usually right before deciding whether to reply. Our business portraits are polished, but they still look like you on a good day, and they come across with confidence and credibility. You can use them on LinkedIn profiles, corporate websites, and whatever personal branding materials you’ve got going.</p>',
                    'button' => 'Quote my headshot',
                ],
                [
                    'icon' => 'building',
                    'label' => 'Corporate portraits',
                    'image' => '2026/07/DSC00283-2-1-1024x683.webp',
                    'alt' => 'Corporate portrait photography in Dubai',
                    'heading' => 'Corporate portraits',
                    'body' => '<p>You can always tell when half a team got proper studio headshots and the other half sent in a cropped wedding photo. We sort that out. Consistent, professional headshots and team portraits for companies of all sizes, so everyone matches and the brand identity stays the same across departments and offices, even if one of those offices is in Abu Dhabi and the other’s in Dubai.</p>',
                    'button' => 'Quote my team portraits',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Family portraits',
                    'image' => '2026/05/Family-Photography-1024x682.webp',
                    'alt' => 'Family portrait photography in Dubai',
                    'heading' => 'Family portraits',
                    'body' => '<p>These are the warm, natural ones, where we’re mostly just catching the genuine connection between you and your loved ones while you get on with things. Families tend to keep them as keepsakes, put them up as home décor, or book one for milestone celebrations like a big birthday or a new baby.</p>',
                    'button' => 'Quote my family portrait',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Fashion portraits',
                    'image' => '2026/07/MANI9728-1-1-683x1024.webp',
                    'alt' => 'Recent photoshoot by Dubai Fotographer in the UAE',
                    'heading' => 'Fashion portraits',
                    'body' => '<p>Here’s where we have some fun with creative styling and expert lighting. The images come out editorial-quality, which is what models, influencers, and anyone putting together a standout portfolio really need.</p>',
                    'button' => 'Quote my fashion shoot',
                ],
                [
                    'icon' => 'map-marker-alt',
                    'label' => 'Beach portraits',
                    'image' => '2026/07/Beach-portrait-photography-682x1024.webp',
                    'alt' => 'Beach portrait photography in Dubai',
                    'heading' => 'Beach portraits',
                    'body' => '<p>There’s not much that beats natural light down by the water around sunset. We use scenic UAE coastal backdrops for relaxed, timeless outdoor portraits, and they work just as nicely for individuals as they do for couples and families.</p>',
                    'button' => 'Quote my beach session',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Close-up sessions',
                    'image' => '2026/07/Close-up-portrait-sessions-684x1024.webp',
                    'alt' => 'Close-up portrait session in Dubai',
                    'heading' => 'Close-up sessions',
                    'body' => '<p>These get up close. They’re detailed, expressive headshots that pick up character and emotion, the little things in a face. Ideal for personal branding, acting portfolios, or fine art prints you’d actually want hanging on a wall.</p>',
                    'button' => 'Quote my close-up session',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent portrait sessions',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Studio', 'Outdoor', 'Fashion'],
            'images' => [
                [
                    'image' => '2026/07/why-choose-us-1-e1784629764145.jpg',
                    'alt' => 'Studio portrait with professional lighting in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Indoor-studio-photographydfgjhdg3674.jpg',
                    'alt' => 'Indoor studio portrait photography in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Desert-golden-dunes-683x1024.webp',
                    'full' => '2026/07/Desert-golden-dunes.webp',
                    'alt' => 'Golden desert dunes in the UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/v-1-1.jpg',
                    'alt' => 'Outdoor portrait for personal brand content',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/IMG_8724-1-2-683x1024.webp',
                    'full' => '2026/07/IMG_8724-1-2.webp',
                    'alt' => 'Model portfolio portrait in Dubai',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/p4-2.jpg',
                    'alt' => 'Editorial fashion portrait in Dubai',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Corporate and Business Portrait Photography for Professionals',
            'body' => '<p>Here in the UAE, a recruiter or a new client will quite often look at your photo before they’ve read a single line of your CV. In a market as competitive as this one, a strong professional image matters as much as your resume. That’s what our corporate portrait photography services are for. We shoot executives, entrepreneurs, and whole teams who want to make a lasting impression, online and off.</p><p>Come to us for a studio session, or we’ll do it on location and haul the equipment over to your office if that’s easier. Group sessions get the same care as individual headshots, so the whole team ends up looking unified and polished.</p><p class="svc-feature-label">Portraits for every platform:</p><ul><li>LinkedIn and professional profiles</li><li>Press and editorial</li><li>Social media and personal brand content</li><li>Model portfolios</li><li>Family keepsakes and home décor</li></ul>',
            'button' => 'Quote my team portraits',
            'photos' => [
                [
                    'image' => '2026/07/Corporate-and-Business-Portrait-Photography-for-Professionals-.jpg',
                    'label' => 'Executives',
                ],
                [
                    'image' => '2026/07/LinkedIn-professional-profiles.jpg',
                    'label' => 'LinkedIn headshots',
                ],
                [
                    'image' => '2026/07/Indoor-studio-photography-720x1024.webp',
                    'label' => 'Studio or your office',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Indoor & Outdoor Portrait Photography Across the UAE',
            'text' => 'Choosing between a studio and an outdoor setting comes down to the look and feeling you want your images to convey.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Our Dubai studio, and offices from DIFC to Dubai Internet City'],
                ['Old Dubai', 'Fashion shoots in the alleyways of Al Fahidi'],
                ['Beach and outdoor', 'Golden hour on the coastline and outdoor landmarks'],
                ['Abu Dhabi, Sharjah and beyond', 'Office and on-location team portraits'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Portrait Photography Process',
            'steps' => [
                '<p>Consultation and planning: we discuss your goals, preferred style, location, wardrobe, and intended use to create a personalised session tailored to your needs.</p>',
                '<p>Professional photoshoot: our photographers guide you through posing, expressions, and lighting while capturing natural, high-quality portraits in the studio or at your chosen location.</p>',
                '<p>Selection and retouching: selected photographs are professionally edited to enhance colour, lighting, and detail while maintaining a natural and authentic appearance.</p>',
                '<p>Final delivery: professionally edited, high-resolution portraits delivered in a timely manner, ready for business profiles, social media, websites, or printing.</p>',
            ],
            'note' => '<p>Planning a styled shoot? See our <a href="%%BASE%%/fashion-photography-in-uae">fashion photography</a> page.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1. How much does portrait photography cost in the UAE?',
                    'answer' => '<p>Pricing depends on session type, location, and package. Our packages are designed to suit individuals, families, and businesses at different budgets, with custom quotes available for corporate and group sessions.</p>',
                ],
                [
                    'question' => '2. Do you offer both studio and outdoor portrait photography?',
                    'answer' => '<p>Yes. We provide indoor sessions at our fully equipped studio as well as outdoor sessions across the UAE, including popular beach locations for a more natural, scenic look.</p>',
                ],
                [
                    'question' => '3. How long does a typical portrait photoshoot take?',
                    'answer' => '<p>Most sessions run between 30 minutes and 2 hours, depending on whether it’s a single headshot, a family portrait, or a corporate portrait photography session involving multiple team members.</p>',
                ],
                [
                    'question' => '4. When will I receive my edited photos?',
                    'answer' => '<p>Edited, high-resolution images are typically delivered within a few business days through an online gallery, with faster turnaround available on select packages.</p>',
                ],
                [
                    'question' => '5. Can you photograph large teams for corporate portraits?',
                    'answer' => '<p>Absolutely. Our corporate portrait photographer team regularly handles group sessions for businesses across the UAE, ensuring consistent lighting, styling, and branding across every individual portrait.</p>',
                ],
                [
                    'question' => '6. Do you travel across the UAE for on-location shoots?',
                    'answer' => '<p>Yes, we offer on-location portrait photography throughout the UAE, including offices, outdoor landmarks, and beach settings, in addition to sessions at our Dubai studio.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your portrait photography session today',
            'text' => 'Studio, beach, and on-location portrait photography for individuals, families, and businesses anywhere in Dubai and across the UAE.',
        ]],
    ],
];
