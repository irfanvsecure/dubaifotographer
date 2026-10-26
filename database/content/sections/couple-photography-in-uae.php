<?php

// Body sections of /couple-photography-in-uae, moved out of resources/views/couple-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Couple photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/IMGL9434-1-1.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Every love story deserves more than a snapshot — it deserves to be told beautifully. Real moments, expertly captured, that you’ll treasure for a lifetime.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your couple shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Session type',
                    'name' => 'session_type',
                    'options' => ['Desert', 'Beach', 'Studio', 'Boudoir', 'Portraits', 'Wedding'],
                ],
                [
                    'label' => 'Occasion',
                    'name' => 'occasion',
                    'options' => ['Just us', 'Engagement', 'Anniversary', 'Holiday in the UAE'],
                ],
            ],
            'venue_placeholder' => 'e.g. Al Qudra, a beach, our Business Bay studio',
            'guests_label' => 'How many locations?',
            'guests_options' => ['One location', 'Two locations', 'Desert and beach', 'Not sure yet'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Licensed',
                    'text' => '& insured studio',
                ],
                [
                    'title' => 'Studio',
                    'text' => '& home visits',
                ],
                [
                    'title' => '48-hour',
                    'text' => 'turnaround on select sessions',
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
            'text' => 'We shoot in-studio at our Business Bay base or on location anywhere from Dubai to Abu Dhabi, Sharjah, and beyond — with select sessions offering 48-hour turnaround.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Desert dunes',
                'Beach sunsets',
                'Studio portraits',
                'Boudoir',
                'Engagement shoots',
                'Anniversaries',
                'Wedding couples',
                'Flying dress',
                'Travel sessions',
                'Dubai skyline',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Capture Your Love Story with a Couple Photoshoot',
            'paragraphs' => [
                'Most couples have hundreds of pictures together, and nearly all of them are selfies held at arm’s length, with someone’s thumb creeping into the corner. Every love story deserves more than a snapshot. It deserves to be told beautifully, by someone who’s actually watching. Our couple photoshoot sessions across the UAE are really about the small things. The quiet glances. The laughter when one of you trips over a dune.',
                'You pick the place. Some couples go for golden desert dunes, some want the glittering Dubai skyline all lit up at night, and loads just want a relaxed beachfront sunset with their sandals in their hands. Our couple photography team takes care of the creative direction and brings the technical skill to every frame, so you get timeless <a href="%%BASE%%/portrait-photography-in-uae">portraits</a> back that actually show your bond.',
                'We’ve been photographing couples across the UAE since 2014, and somewhere along the way we stopped counting proposals. Dubai Fotographer is led by our founder, Abdul Rehman, with a fully licensed, insured production team behind him. Every session is shot by our own experienced photographers, not freelancers we’ve found the night before, and they know UAE locations, lighting, and permits inside out.',
                'From the first consultation to final delivery, one accountable team looks after your entire experience. That means consistent quality, real expertise, and no guesswork about who’s turning up or when your photos are coming.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our couple photography services',
            'tabs' => [
                [
                    'icon' => 'map-pin',
                    'label' => 'Desert couple photoshoot',
                    'image' => '2026/07/Desert-couple-photoshoot-683x1024.webp',
                    'alt' => 'Desert couple photoshoot in Dubai',
                    'heading' => 'Desert couple photoshoot',
                    'body' => '<p>Head out to Al Qudra at about five in the evening, and it’s obvious why we keep going back. The golden dunes start to glow, the sky usually does something a bit dramatic, and that soft evening light handles half the work for us. Our desert couple photoshoot sessions are romance against Dubai’s most iconic natural backdrop, and honestly you hardly need to pose at all.</p>',
                    'button' => 'Quote my desert shoot',
                ],
                [
                    'icon' => 'map-marker-alt',
                    'label' => 'Beach couple photography',
                    'image' => '2026/07/Beach-couple-photography-1024x682.webp',
                    'alt' => 'Beach couple photography in Dubai',
                    'heading' => 'Beach couple photography',
                    'body' => '<p>Now and then a couple wants a sunrise stroll before anybody else turns up. Most of them would rather wait for the sunset silhouettes, though. Either way, our beach couple photography sessions along Dubai’s coastline turn out warm, breezy, and effortlessly romantic images you’ll cherish, and you’ll be tipping sand out of your shoes for days afterwards.</p>',
                    'button' => 'Quote my beach shoot',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Couple studio photography',
                    'image' => '2026/07/Couple-studio-photography-684x1024.webp',
                    'alt' => 'Couple studio photography in Dubai',
                    'heading' => 'Couple studio photography',
                    'body' => '<p>If the idea of wind whipping your hair around doesn’t appeal, that’s fair enough. Couple studio photography means controlled lighting and a polished finish, elegant backdrops and a proper professional setup. You get timeless portraits, and the weather and the elements don’t get a say.</p>',
                    'button' => 'Quote my studio shoot',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Couples boudoir photography',
                    'image' => '2026/07/Couples-boudoir-photography-1024x682.webp',
                    'alt' => 'Couples boudoir photography in Dubai',
                    'heading' => 'Couples boudoir photography',
                    'body' => '<p>This is the more intimate one. Tasteful and beautifully lit, we set our couples boudoir photography sessions up so they feel comfortable and private for both of you, genuinely romantic instead of awkward. Whatever you’re happy with is what we do, simple as that.</p>',
                    'button' => 'Quote my boudoir session',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Couple portrait photography',
                    'image' => '2026/07/Couple-portrait-photography-682x1024.webp',
                    'alt' => 'Couple portrait photography in Dubai',
                    'heading' => 'Couple portrait photography',
                    'body' => '<p>The good old classic. Our couple portrait photography is refined and all about connection and detail: how your hands fit together, the way you look at each other when you think nobody’s watching. Those timeless images usually end up framed on a wall, tucked into albums or saved as anniversary keepsakes.</p>',
                    'button' => 'Quote my portraits',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Wedding couple photography',
                    'image' => '2026/06/wedding-photographer-couple-1024x572.webp',
                    'alt' => 'Wedding couple photography in Dubai',
                    'heading' => 'Wedding couple photography',
                    'body' => '<p>The big day, or the quiet bits after it. Our wedding couple photography catches the emotion, the elegance, and every joyful detail of your Dubai celebration, down to the heels somebody kicked off on the dance floor around midnight.</p>',
                    'button' => 'Quote my wedding shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us a little about your session, your preferred location, and your ideal date, and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent couple sessions',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Beach and desert', 'Outdoor', 'Indoor'],
            'images' => [
                [
                    'image' => '2026/07/Beach-coastline.jpg',
                    'alt' => 'Couple photoshoot on the beach and coastline',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Desert-golden-dunes-683x1024.webp',
                    'full' => '2026/07/Desert-golden-dunes.webp',
                    'alt' => 'Golden desert dunes in the UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Corniche-heritage-e1784535742150.jpg',
                    'alt' => 'Couple photoshoot among heritage buildings',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/05/couple-photography-2.webp',
                    'alt' => 'Outdoor couple photography session',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Studio4.jpg',
                    'alt' => 'Couple studio photography in Dubai',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Workspace.jpg',
                    'alt' => 'Relaxed indoor couple photography session',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Couple Photography Packages Built Around Your Occasion',
            'body' => '<p>Think about a couple three months in versus a couple who’ve just booked their wedding venue. They want completely different things from a shoot, and that’s kind of the whole point. No two couples are after the same session, so we built our couple photoshoot packages to bend around your occasion, your timeline, and your budget, not the other way round.</p><p class="svc-feature-label">Popular choices:</p><ul><li>A relaxed one-hour outdoor shoot if you’re newly dating</li><li><a href="%%BASE%%/wedding-photography-in-uae">Wedding couple photography</a> with multiple locations and outfit changes</li><li><a href="%%BASE%%/travel-photography-in-uae">Travel photography sessions</a> for couples on holiday in the UAE</li><li>Couple studio photography for anniversaries</li></ul><p>Every package comes with professional editing and a curated gallery at the end.</p>',
            'button' => 'Build my package',
            'photos' => [
                [
                    'image' => '2026/05/couple-photography-1.webp',
                    'label' => 'Newly dating',
                ],
                [
                    'image' => '2026/07/IMGL9434-1-1-683x1024.webp',
                    'label' => 'Wedding couples',
                ],
                [
                    'image' => '2026/05/couple-photography-3-e1784535101480.webp',
                    'label' => 'Anniversaries',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Desert and beach couple photoshoots across the UAE',
            'text' => 'The UAE offers some of the world’s most stunning backdrops for romantic photography, making it an ideal destination for unforgettable couple sessions.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Beach and coastline', 'Sunrise strolls to sunset silhouettes along Dubai’s coastline'],
                ['Desert and golden dunes', 'Al Qudra and beyond'],
                ['Studio', 'Our Business Bay base'],
                ['City', 'The Dubai skyline and landmarks'],
                ['Abu Dhabi', 'Corniche and heritage'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'The couple photoshoot experience, step by step',
            'steps' => [
                '<p>Consultation and booking: share your ideas, preferred style, and location. We’ll discuss your vision, recommend the perfect setting, and schedule your couple photoshoot at your convenience.</p>',
                '<p>Planning and location scouting: our team helps you choose outfits, timing, and locations while providing practical tips to ensure a relaxed, enjoyable, and well-organised photography experience.</p>',
                '<p>Photography session: your couple’s photographer captures genuine emotions, natural interactions, and beautifully composed portraits in a comfortable environment with professional guidance throughout.</p>',
                '<p>Editing and photo delivery: we carefully retouch every selected image, enhancing colours and details before delivering a high-quality online gallery filled with timeless memories you’ll cherish for years.</p>',
            ],
            'note' => '<p>Want something dramatic? Ask about a <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress photography session</a> against the UAE’s iconic landscapes.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1.How much does a couple photoshoot in Dubai cost?',
                    'answer' => '<p>A branding photoshoot typically includes a pre-shoot consultation, location or studio setup, multiple outfit changes, professional posing guidance, and a curated set of edited, high-resolution images tailored to your brand identity.</p>',
                ],
                [
                    'question' => '2. What is the best time of day for couple photography?',
                    'answer' => '<p>Pricing depends on session length, number of locations, and deliverables. We offer flexible packages to suit influencers, startups, and established brands — contact us for a custom quote based on your needs.</p>',
                ],
                [
                    'question' => '3. How long does a typical couple photoshoot take?',
                    'answer' => '<p>We work with both. Our services are designed for influencers building a personal brand as well as businesses and entrepreneurs looking for professional brand photography and consistent social media content.</p>',
                ],
                [
                    'question' => '4. Can we combine multiple locations in one session?',
                    'answer' => '<p>Most sessions run between 1-3 hours, depending on the number of looks, locations, and content types required. Larger packages with multiple setups may take longer.</p>',
                ],
                [
                    'question' => '5. Do we need permission to shoot at certain locations?',
                    'answer' => '<p>We shoot across Dubai and beyond, including iconic city backdrops, studios, and lifestyle locations, chosen to match your brand’s aesthetic and content goals.</p>',
                ],
                [
                    'question' => '6. How soon will we receive our edited photos?',
                    'answer' => '<p>Turnaround time varies by package, but most clients receive their professionally edited gallery within 3-7 business days after the shoot.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Let’s design a couple photoshoot that feels completely, authentically you',
            'text' => 'Whether you’re picturing a golden desert couple photoshoot, a breezy beach couple photography session, or a polished studio portrait — our team is ready to bring your vision to life anywhere across the UAE.',
        ]],
    ],
];
