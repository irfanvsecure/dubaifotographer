<?php

// Body sections of /family-photography-in-uae, moved out of resources/views/family-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Family photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Family-photography-services-in-Dubai.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Timeless family portraits celebrating genuine emotion, lasting connection, and unforgettable memories — for every family, every occasion, and every setting across the UAE.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your family shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Session type',
                    'name' => 'session_type',
                    'options' => ['Classic family', 'Festive', 'Beach', 'Maternity', 'Outdoor'],
                ],
                [
                    'label' => 'Setting',
                    'name' => 'setting',
                    'options' => ['Studio', 'Beach or outdoor', 'At home'],
                ],
            ],
            'venue_placeholder' => 'e.g. studio, beach, park or your home',
            'guests_label' => 'How many people in the photos?',
            'guests_options' => ['2 to 3', '4 to 6', '7 to 10', 'More than 10'],
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
                    'title' => 'Studio, beach',
                    'text' => '& outdoor sessions',
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
            'text' => 'Whether you are in Dubai, Abu Dhabi, or Sharjah, we tailor each photoshoot to reflect your family’s personality, style, and vision — with studio sessions in Dubai and on-location sessions available across all seven Emirates.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Gender reveals',
                'Birthdays',
                'Ramadan iftar',
                'UAE National Day',
                'Christmas portraits',
                'Eid family sessions',
                'Anniversaries',
                'Family reunions',
                'Newborn arrivals',
                'Beach golden hours',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Why Families Across the UAE Choose Us',
            'paragraphs' => [
                'Every family has its own story, and our family photography is about preserving those important moments. We do it with style, in a real way, and with a bit of creativity. We work with people all over the UAE, and our goal is to make family portraits that last. Ones that truly show off honest feelings, strong connections, and memories you will not forget.',
                'We’ve been doing this since 2014. Over that time, we’ve tried to mix technical skill with genuine warmth, so every family photoshoot feels relaxed, not rushed and not overly staged with everyone grinning on command.',
                'It does not matter if you are looking for a big family <a href="%%BASE%%/portrait-photography-in-uae">portrait shoot</a> or maybe a smaller, more personal <a href="%%BASE%%/couple-photography-in-uae">couple photography</a> session. We make sure each photoshoot fits your specific personality, your style, and the important relationships in your life.',
                'Each session comes with thoughtful planning and flexible packages, and the turnaround is fast. Your memories deserve to be delivered, not left sitting on a hard drive while you wait.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Family photography services for every setting',
            'tabs' => [
                [
                    'icon' => 'users',
                    'label' => 'Family photoshoots',
                    'image' => '2026/07/Family-photography-services-in-Dubaivd-682x1024.webp',
                    'alt' => 'Family photography services in Dubai',
                    'heading' => 'Family photoshoots',
                    'body' => '<p>These sessions are relaxed and natural, and mostly we just let your family get on with being a family. Mum sorting out somebody’s hair, grandad pulling silly faces at the baby, the kids squabbling over who gets to sit next to whom. That everyday connection between parents, kids and grandparents is really what we’re there for. We’ll style it around your family’s personality and your preferred location, even if that turns out to be your own sofa at home.</p>',
                    'button' => 'Quote my family shoot',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Festive family photography',
                    'image' => '2026/07/festive-1024x681.webp',
                    'alt' => 'Festive family photography in Dubai',
                    'heading' => 'Festive family photography',
                    'body' => '<p>Plenty of families book us every year around Christmas, Eid or National Day, and for a few of them it’s turned into a bit of a tradition. We go with warm tones and cosy styling. The photos tend to end up on holiday cards, or framed as yearly family keepsakes, and it’s quite something seeing them lined up and noticing how much the kids have grown.</p>',
                    'button' => 'Quote my festive shoot',
                ],
                [
                    'icon' => 'map-marker-alt',
                    'label' => 'Beach family photoshoots',
                    'image' => '2026/07/beach786-e1784268281121-1024x590.webp',
                    'alt' => 'Beach family photoshoot in Dubai',
                    'heading' => 'Beach family photoshoots',
                    'body' => '<p>We shoot these at golden hour along Dubai’s coastline, once the sun has dropped and the sand isn’t scorching anymore. The light goes soft, the kids make a run for the water the second they’re out of the car, and someone always ends up splashed. Those playful, candid moments, with iconic waterfront backdrops behind them, are the ones the whole family will love looking at later.</p>',
                    'button' => 'Quote my beach shoot',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Family maternity photography',
                    'image' => '2026/07/meternity3889-684x1024.webp',
                    'alt' => 'Family maternity photography in Dubai',
                    'heading' => 'Family maternity photography',
                    'body' => '<p>It’s nice to have something to remember this stage by before your newest arrival comes along. This is a gentle, intimate session that celebrates your growing family. There’s the maternity glow, of course, but there are also little moments with your partner and with the big brother or sister-to-be, who usually can’t keep their hands off the bump. If you’d like a session that’s just about you, take a look at our dedicated maternity sessions as well.</p>',
                    'button' => 'Quote my maternity shoot',
                ],
                [
                    'icon' => 'map-pin',
                    'label' => 'Outdoor family photography',
                    'image' => '2026/07/outdouor.webp',
                    'alt' => 'Outdoor family photography in Dubai',
                    'heading' => 'Outdoor family photography',
                    'body' => '<p>Some families just don’t feel like themselves in a studio setting, and honestly that’s fair enough. We’ll go out to the desert, a park, or one of the iconic Dubai landmarks and use it as the backdrop. The portraits end up candid and a little adventurous, full of movement and authentic emotion, mainly because nobody’s being told to sit still.</p>',
                    'button' => 'Quote my outdoor shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your family and preferred setting and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent family sessions',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Beach', 'Outdoor', 'Milestones'],
            'images' => [
                [
                    'image' => '2026/07/Family-photography-services-in-Dubai5.jpg',
                    'alt' => 'Family running along the beach during a family photoshoot',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/beach786-e1784268281121-1024x590.webp',
                    'full' => '2026/07/beach786-e1784268281121.webp',
                    'alt' => 'Beach family photoshoot in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/why-choose-us-2360.jpg',
                    'alt' => 'Outdoor family photography by the water',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/outdouor.webp',
                    'alt' => 'Outdoor family photography in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/festive-1024x681.webp',
                    'full' => '2026/07/festive.webp',
                    'alt' => 'Festive family photography in Dubai',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/meternity3889-684x1024.webp',
                    'alt' => 'Family maternity photography in Dubai',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Family Photography Packages Built Around Your Family’s Size and Needs',
            'body' => '<p>Families come in all shapes. Some are just mum, dad, and a baby. Some have four kids, a dog, and a nanny holding the snacks. One package for all of them would be silly, so our family photography services are flexible. We work them out based on your group size and how long you’d like the session to go on.</p><p>If you’re a couple with one child, a short family studio photography sitting is normally the way to go. A bigger household with several kids, or one of those larger extended groups with three generations in it, usually needs longer. We tend to take them outdoors where there’s room to move, so the natural interaction happens on its own and nobody feels rushed.</p><p class="svc-feature-label">Add-ons you can pick:</p><ul><li>Additional locations</li><li>Extra edited images</li><li>Printed keepsakes</li></ul>',
            'button' => 'Build my package',
            'photos' => [
                [
                    'image' => '2026/07/photographer-working-with-family-studio_392895-365.jpg',
                    'label' => 'Studio sitting',
                ],
                [
                    'image' => '2026/07/Family-photography-services-in-Dubaivd.jpg',
                    'label' => 'Small families',
                ],
                [
                    'image' => '2026/07/Family-photography-services-in-Dubai.jpg',
                    'label' => 'Beach and outdoor',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Family Photography Across the UAE',
            'text' => 'Knowing UAE locations inside out helps a lot. We know where the best light falls at each of the beach family photoshoot spots and more or less what time to show up, and we know how a studio setup performs across different seasons.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Studio sessions, golden hour on the coastline, parks and landmarks'],
                ['Desert', 'Golden-hour shoots out past the city'],
                ['Abu Dhabi and Sharjah', 'On-location sessions at your chosen spot'],
                ['Northern emirates', 'Ajman, Ras Al Khaimah, Umm Al Quwain, Fujairah and Al Ain'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Booking your family photoshoot, step by step',
            'steps' => [
                '<p>Consultation and booking: share your vision, preferred location, and session type. We help you choose the ideal date, style, and package for your family.</p>',
                '<p>Planning your session: we guide you with outfit recommendations, location suggestions, and simple preparation tips so everyone feels comfortable and ready on the day.</p>',
                '<p>Your photoshoot: a relaxed, professionally guided session capturing genuine smiles, natural interactions, and timeless family portraits in your chosen setting.</p>',
                '<p>Editing and delivery: carefully edited photographs delivered as a beautifully curated high-resolution gallery, ready for downloading, printing, and sharing.</p>',
            ],
            'note' => '<p>Planning something smaller? Take a look at our <a href="%%BASE%%/couple-photography-in-uae">couple photography</a> and <a href="%%BASE%%/portrait-photography-in-uae">portrait photography</a> sessions.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'How long does a family photoshoot usually take?',
                    'answer' => '<p>Most family photoshoot sessions run between 1 and 2 hours, depending on family size, location, and whether outfit changes are included. We keep pacing flexible for younger children.</p>',
                ],
                [
                    'question' => 'What should we wear for our family photography session?',
                    'answer' => '<p>Coordinated, non-matching outfits work best. Think complementary colours — soft neutrals or pastels — rather than identical outfits, which tend to look overly staged in photographs.</p>',
                ],
                [
                    'question' => 'Do you offer both indoor and outdoor family photography?',
                    'answer' => '<p>Yes. We provide family studio photography for weather-proof, controlled sessions, as well as outdoor options including beach family photoshoots and desert locations across the UAE.</p>',
                ],
                [
                    'question' => 'Can we include grandparents or extended family in the session?',
                    'answer' => '<p>Yes. Multi-generational and extended family photography sessions are welcome — just let us know in advance so we can plan group logistics accordingly.</p>',
                ],
                [
                    'question' => 'What happens if the weather doesn\'t cooperate on shoot day?',
                    'answer' => '<p>For outdoor sessions, we can reschedule at no extra cost or move to an indoor family studio photography setup, so your session is never lost to the weather.</p>',
                ],
                [
                    'question' => 'How soon will we receive our edited photos?',
                    'answer' => '<p>Edited, high-resolution images are typically delivered within 2–3 weeks via a private online gallery, though turnaround may vary during peak seasons.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your family photography session today',
            'text' => 'Natural, timeless family portraits for every family, every occasion, and every setting across Dubai and the UAE.',
        ]],
    ],
];
