<?php

// Body sections of /maternity-photography-in-uae, moved out of resources/views/maternity-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Maternity photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Maternity-photography-services-in-Dubai.avif',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Studio and outdoor maternity photography for mothers across Dubai, Abu Dhabi, and the wider UAE — capturing the glow, grace, and quiet excitement of expecting a baby.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Session type',
                    'name' => 'session_type',
                    'options' => ['Studio', 'Outdoor', 'At home', 'Boudoir'],
                ],
                [
                    'label' => 'Package',
                    'name' => 'package',
                    'options' => ['Maternity only', 'Maternity and newborn'],
                ],
            ],
            'venue_placeholder' => 'e.g. our Dubai studio, beach, desert, home',
            'guests_label' => 'Who is in the photos?',
            'guests_options' => ['Just me', 'Me and my partner', 'With our children', 'Whole family'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '28 to 34 weeks',
                    'text' => 'The ideal time to book',
                ],
                [
                    'title' => 'All 7 Emirates',
                    'text' => 'Studio, outdoor and home sessions',
                ],
                [
                    'title' => 'Since 2014',
                    'text' => 'Licensed and insured studio',
                ],
                [
                    'title' => 'Arabic and English',
                    'text' => 'Bilingual crew',
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
                'Studio maternity',
                'Outdoor golden hour',
                'Desert dunes',
                'Jumeirah Beach',
                'Al Qudra Lakes',
                'Family maternity',
                'Maternity boudoir',
                'Bump to baby',
                'Gowns and drapes',
                'Home sessions',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/Why-choose-Dubai-Fotographer-for-maternity-photography.jpg',
            'heading' => 'Why Choose Dubai Fotographer for Maternity Photography?',
            'paragraphs' => [
                'It was 2014 when we started out. Since then, Dubai Fotographer has become a trusted, fully licensed and insured photography studio, and we work in Dubai, Abu Dhabi, and just about everywhere else in all seven Emirates. The photographers, stylists and editors are one team, under one accountable roof, so your maternity photoshoot gets the same consistent, professional-grade quality from the first chat about planning right up to the day the gallery hits your inbox. Your photos never get handed to some outside editor you’ve never met.',
                'Sure, you need to know your way around a camera. Still, what our reputation really rests on is real client trust, more than technical skill on its own. We’ve done work for a few recognizable brands, and hundreds of families have come to us wanting meaningful, <a href="%%BASE%%/services">professional photography services</a> for the moments that mean something to them. Over time, our maternity photographers have picked up all the little posing, lighting, and comfort tricks that only matter during pregnancy: where to slide a cushion, when to call a water break, which angles go easy on a sore lower back. It’s why the images come out authentic and beautifully executed.',
                'And the practical stuff is covered too. Turnaround times are fast. Packages are transparent, no hidden extras. Our bilingual team will travel to you anywhere in the UAE. Basically, you’re with genuine experts who prioritize your comfort, your story, and your memories, and we don’t do a one-size-fits-all approach, ever.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Maternity photography services for every vision',
            'tabs' => [
                [
                    'icon' => 'camera-retro',
                    'label' => 'Studio maternity photoshoot',
                    'image' => '2026/07/Studio-maternity-photoshoot-683x1024.webp',
                    'alt' => 'Studio maternity photoshoot in Dubai',
                    'heading' => 'Studio maternity photoshoot',
                    'body' => '<p>If you’re due in August, trust us, you want to be indoors. This is a private session in our climate-controlled studio. We’ve got maternity gowns we picked out ourselves, silk drapes, and soft lighting that shows your glow and your growing bump without you needing to pose too much.</p>',
                    'button' => 'Quote my studio shoot',
                ],
                [
                    'icon' => 'map-pin',
                    'label' => 'Outdoor maternity photoshoot',
                    'image' => '2026/07/Outdoor-maternity-photoshoot-1024x683.webp',
                    'alt' => 'Outdoor maternity photoshoot in Dubai',
                    'heading' => 'Outdoor maternity photoshoot',
                    'body' => '<p>We usually shoot these in the golden hour, out at Dubai’s desert dunes, on Jumeirah Beach, or by Al Qudra Lakes. The backdrops are natural and a bit dreamy, and you don’t need much else. A lot of mums tell us these are the pregnancy photos they end up framing.</p>',
                    'button' => 'Quote my outdoor shoot',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Family maternity photography',
                    'image' => '2026/07/Family-maternity-photography-1024x700.webp',
                    'alt' => 'Family maternity photography session in the UAE',
                    'heading' => 'Family maternity photography',
                    'body' => '<p>You can bring your partner and your children along. Kids are usually shy for the first ten minutes and then won’t stop running around, which is fine; some of the best shots come from that. It’s a nice way to keep this chapter of your growing family together in one set of pictures.</p><p>A few book <a href="%%BASE%%/portrait-photography-in-uae">solo portraits</a>, and plenty go for <a href="%%BASE%%/family-photography-in-uae">family maternity photography</a> so the partner and the little ones get in the pictures too.</p>',
                    'button' => 'Quote my family shoot',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Maternity boudoir photography',
                    'image' => '2026/07/Maternity-boudoir-photography-1024x682.webp',
                    'alt' => 'Maternity boudoir photography in Dubai',
                    'heading' => 'Maternity boudoir photography',
                    'body' => '<p>This one is more private. It’s elegant and tasteful, and it’s about feeling good in your body during pregnancy. Mums who’ve done it often say they felt more confident afterwards, and these are usually the portraits they keep for themselves.</p><p>If you’d feel more comfortable with a <a href="%%BASE%%/female-photographers-in-uae">female photographer</a>, say so, and we’ll happily accommodate your preference.</p>',
                    'button' => 'Quote my boudoir shoot',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Maternity & newborn photography',
                    'image' => '2026/07/Maternity-newborn-photography-1024x682.webp',
                    'alt' => 'Maternity and newborn photography in the UAE',
                    'heading' => 'Maternity & newborn photography',
                    'body' => '<p>Lots of parents book this as a pair. We do the bump photos before the birth, then come back for a newborn photoshoot in your baby’s first days at home. You end up with the full story in one style.</p>',
                    'button' => 'Quote my combined package',
                ],
                [
                    'icon' => 'file-alt',
                    'label' => 'Customised photography packages',
                    'image' => '2026/07/Customised-photography-packages-1024x574.webp',
                    'alt' => 'Customised maternity photography packages',
                    'heading' => 'Customised photography packages',
                    'body' => '<p>We’ll put a package together around your budget. You can choose edited images, printed photos, or albums, and we can come to your home anywhere in the UAE.</p>',
                    'button' => 'Quote my package',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Most mothers-to-be book between 28 and 34 weeks. Our calendar fills up quickly — don’t leave it too late.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent maternity sessions',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Studio', 'Outdoor', 'Boudoir'],
            'images' => [
                [
                    'image' => '2026/07/Professional-maternity-photography-for-mothers-across-the-UAE.jpg',
                    'alt' => 'Professional maternity photography for mothers across the UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Outdoor-golden-hour.jpg',
                    'alt' => 'Outdoor golden hour maternity photoshoot in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Studio-portraits.jpg',
                    'alt' => 'Studio maternity portraits in our Dubai studio',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/How-our-maternity-photographers-plan-every-session-e1784097603924.jpg',
                    'alt' => 'Outdoor couple maternity photoshoot in the UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Boudoir.jpg',
                    'alt' => 'Maternity boudoir photography in Dubai',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Studio-maternity-photoshoot-e1784033343911.jpg',
                    'alt' => 'Studio maternity photoshoot in Dubai',
                    'filter' => 0,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Maternity, Newborn & Family Sessions Under One Roof',
            'body' => '<p>The pregnancy journey doesn’t end with the baby bump, and honestly, we don’t either. Once the maternity photography is out of the way, loads of families come straight back to us for <a href="%%BASE%%/newborn-baby-photography-in-uae">newborn photoshoots</a>. Those are all about catching the fleeting first days before they disappear, and they disappear a lot faster than anyone tells you.</p><p>If you like, book a combined newborn and maternity photography package, and we’ll follow the story from bump to baby. Or tack on some <a href="%%BASE%%/family-photography-in-uae">family photography</a> so your partner and children get in on the celebration as well.</p><p>Keeping the same consistent photographer through all these chapters makes a real difference. The photos hold a cohesive style, you’re dealing with familiar faces you already trust, and everything stays smooth and easy while your family carries on growing, one beautiful session at a time.</p>',
            'button' => 'Add a newborn session',
            'photos' => [
                [
                    'image' => '2026/07/Newborn-follow-up.jpg',
                    'label' => 'Newborn follow-up',
                ],
                [
                    'image' => '2026/07/Family-sessionssss.jpg',
                    'label' => 'Family sessions',
                ],
                [
                    'image' => '2026/07/Maternity-newborn-family-sessions-under-one-roof-e1784097655709.jpg',
                    'label' => 'From bump to baby',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Maternity Photography Across the UAE',
            'text' => 'Studio, outdoor, and home maternity photography for mothers across Dubai and all seven Emirates.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Our private studio, desert dunes, Jumeirah Beach and Al Qudra Lakes'],
                ['Abu Dhabi', 'Outdoor and home sessions'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Maternity Photography Process',
            'steps' => [
                '<p>Share your due date, style preferences, and vision. We’ll recommend the ideal timing and package for your maternity photoshoot.</p>',
                '<p>We finalise your location, wardrobe, and props together — studio, outdoor golden-hour, or home session across the UAE.</p>',
                '<p>Relax and be guided through easy, natural poses while our photographers capture your glow, confidence, and the beauty of your pregnancy.</p>',
                '<p>Within days, receive your beautifully edited photos, ready to treasure, share with loved ones, or preserve in a printed album.</p>',
            ],
            'note' => '<p>Prefer a relaxed session at home? Have a look at our <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle sessions</a>.</p>',
            'button' => 'Book your consultation',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'When is the best time to book a maternity photoshoot?',
                    'answer' => '<p>Most mothers-to-be book their maternity photoshoot between 28 and 34 weeks, when the bump is beautifully round but movement and posing are still comfortable.</p>',
                ],
                [
                    'question' => 'Do you offer maternity photography packages that include newborn sessions?',
                    'answer' => '<p>Yes. We offer combined maternity and newborn photography packages, allowing you to document your pregnancy journey and your baby’s first days with one consistent photographer.</p>',
                ],
                [
                    'question' => 'Can we include our partner and other children in the session?',
                    'answer' => '<p>Yes. Our family maternity photography sessions are designed to include your partner, children, or entire family for a heartfelt, complete story.</p>',
                ],
                [
                    'question' => 'Do you provide maternity gowns and props, or should we bring our own?',
                    'answer' => '<p>We offer a curated wardrobe of maternity gowns, silk drapes, and props, though you’re always welcome to bring outfits that reflect your personal style.</p>',
                ],
                [
                    'question' => 'Do you offer outdoor and studio maternity photoshoots?',
                    'answer' => '<p>Yes. Choose a studio maternity photoshoot for privacy and controlled lighting, or an outdoor session at Dubai’s beaches, desert, or lakes.</p>',
                ],
                [
                    'question' => 'Which areas in the UAE do you serve?',
                    'answer' => '<p>We provide maternity photography across Dubai, Abu Dhabi, Sharjah, and the wider UAE, with home service options available depending on location.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Request a maternity photography quote',
            'text' => 'Tell us about your pregnancy and vision and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],
    ],
];
