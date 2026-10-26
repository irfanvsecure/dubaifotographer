<?php

// Body sections of /exterior-photography-in-uae, moved out of resources/views/exterior-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Exterior photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/pexels-jdgromov-7662956-scaled.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Facade, aerial, golden hour, and twilight photography for architects, developers, real estate agents, and property owners across the UAE.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your exterior shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Property type',
                    'name' => 'property_type',
                    'options' => ['Commercial tower', 'Villa or residence', 'Development', 'Retail or hotel'],
                ],
                [
                    'label' => 'Coverage',
                    'name' => 'coverage',
                    'options' => ['Daylight', 'Golden hour or twilight', 'Aerial drone', 'Interior and exterior'],
                ],
            ],
            'venue_placeholder' => 'Building name and area',
            'guests_label' => 'Size of the project',
            'guests_options' => ['Single villa or unit', 'One building', 'Several buildings', 'Whole community'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Licensed & insured',
                    'text' => 'Production company',
                ],
                [
                    'title' => 'Bilingual',
                    'text' => 'Arabic / English crew',
                ],
                [
                    'title' => '48-hour',
                    'text' => 'Turnaround available',
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
            'text' => 'We provide exterior photography across Dubai, Abu Dhabi, Sharjah, and all seven Emirates — working with developers, architects, and property owners throughout the UAE with the same production standard at every location.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Commercial towers',
                'Residential complexes',
                'Retail centers',
                'Villas',
                'Construction & contracting',
                'Hospitality',
                'Architecture & design firms',
                'Property development',
                'Corporate & facilities',
                'Golden hour & twilight',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'About Our Team',
            'paragraphs' => [
                'We’ve been photographing the outside of things since 2014. Buildings, <a href="%%BASE%%/construction-site-photography-in-uae">construction sites</a>, new developments, and landmarks across all seven Emirates. Dubai Fotographer is led by our founder, Abdul Rehman, and our exterior photographers bring two things to every job: technical precision and a real understanding of architecture, light, and design.',
                'As a specialized team providing <a href="%%BASE%%/architectural-photography-in-uae">architectural exterior photography</a>, we recognize that each building facade has a story it tells. We document that story accurately, not through assumptions.',
                'We’re a fully licensed and insured production company, and our exterior photography services have covered <a href="%%BASE%%/hotel-photography-service-in-uae">hotels</a>, <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurants</a>, retail stores, and commercial buildings, plus work for brands including Emirates, Etisalat, and RTA.',
                '“Every façade has a moment in the day when it looks exactly as the architect intended — our job is to be there when it does.” – Abdul Rehman',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Exterior photography services for every project type',
            'tabs' => [
                [
                    'icon' => 'building',
                    'label' => 'Exterior Building Photography',
                    'image' => '2026/07/pexels-aboodi-31215836-1024x850.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'heading' => 'Exterior Building Photography',
                    'body' => '<p>Most of what we shoot here is commercial towers, residential complexes and retail developments. We do it with precision, and to be fair, most of our time goes on the façades, the materials and the architectural details, since that’s where a structure really gets its identity.</p>',
                    'button' => 'Quote my building',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Real Estate Exterior Photography',
                    'image' => '2026/07/pexels-jdgromov-4716785-1024x683.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'heading' => 'Real Estate Exterior Photography',
                    'body' => '<p>This one is mostly for agents and developers who want their properties shown in their best light. The photos are there to bring in buyers and investors through the portals, brochures and social media they’re on every day anyway. It pairs naturally with our <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">real estate photography</a> service.</p><p>We shoot villas, apartments and commercial units, and we watch for what buyers really notice: clean lines, inviting entrances, and how the place sits within its surroundings.</p>',
                    'button' => 'Quote my listing',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Twilight & Golden Hour',
                    'image' => '2026/07/pexels-thelazyartist-1446512-1024x726.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'heading' => 'Twilight & Golden Hour',
                    'body' => '<p>If we had to pick a favourite time to shoot, it’d be golden hour or dusk, and clients tend to agree once the gallery lands in their inbox. The low sun brings drama and depth, so a façade that looked a bit plain at lunchtime ends up a striking visual people actually stop scrolling for.</p>',
                    'button' => 'Quote my twilight shoot',
                ],
                [
                    'icon' => 'plane',
                    'label' => 'Aerial & Drone Exteriors',
                    'image' => '2026/07/pexels-marjan-147528816-10483836-1024x683.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'heading' => 'Aerial & Drone Exteriors',
                    'body' => '<p>Some projects you just can’t explain from the ground. Our professional drones get elevated perspectives and a bit of skyline context, which helps a lot for large-scale developments, villas and any property where scale and surroundings matter most. All the flying is done by our fully licensed <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography</a> team.</p>',
                    'button' => 'Quote my aerial shoot',
                ],
                [
                    'icon' => 'hotel',
                    'label' => 'Interior and Exterior Packages',
                    'image' => '2026/07/pexels-aj-ahamad-767001191-34188660-1024x689.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'heading' => 'Interior and Exterior Packages',
                    'body' => '<p>A lot of clients would rather get it all done in one go. We do combined coverage that captures a property’s full character, inside and out, in one coordinated shoot. Our <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a> expertise comes into it as well, and that keeps the visual style consistent across every deliverable.</p>',
                    'button' => 'Quote my package',
                ],
                [
                    'icon' => 'file-alt',
                    'label' => 'Architectural Portfolios',
                    'image' => '2026/07/pexels-nasimgs-6657278-683x1024.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'heading' => 'Architectural Portfolios',
                    'body' => '<p>Photos going into presentations, brochures, or investor materials need to look polished; that’s really what this is about. It works alongside our dedicated <a href="%%BASE%%/architectural-photography-in-uae">architectural photography</a> service whenever you need complete project documentation.</p>',
                    'button' => 'Quote my portfolio',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Every building has a story worth telling. Get availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent exterior work',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Buildings', 'Twilight', 'Residential'],
            'images' => [
                [
                    'image' => '2026/07/pexels-kirandeepsingh-16480058-scaled.jpg',
                    'alt' => 'Exterior Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/pexels-tom-fournier-208942721-27332191-scaled.jpg',
                    'alt' => 'Exterior Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/pexels-thelazyartist-1446512-768x544.webp',
                    'full' => '2026/07/pexels-thelazyartist-1446512-scaled.webp',
                    'alt' => 'Twilight and golden hour exterior photography',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Why-were-the-right-choice-for-your-exterior-photography.jpg',
                    'alt' => 'Why we’re the right choice for your exterior photography',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Exterior-real-estate-photography-for-listings-that-stand-out.png',
                    'alt' => 'Exterior real estate photography for listings that stand out',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/06/exterior-photography-1.webp',
                    'alt' => 'Exterior Photography in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'How Our Exterior Photographers Capture Every Building',
            'body' => '<p>Location scouting tells us the building’s orientation, what the surrounding landscape is like, and where the sunlight hits the facade at different hours throughout the day. Then we come back at the optimal time. For one building, that’s early morning. For another, it’s golden hour. A few look their best at twilight.</p><p>Our exterior photographers carry professional-grade equipment, tilt-shift lenses, and drones for <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">aerial photography</a>. In exterior architectural photography, we’re mainly looking at lines, symmetry and materials, because that’s what reflects the true design intent behind the structure.</p><p class="svc-feature-label">Where your exterior photography works:</p><ul><li>Architectural portfolios: award submissions, publications, and design practice websites</li><li>Real estate portals &amp; listings: Property Finder, Bayut, Zillow</li><li>Marketing campaigns, brochures &amp; ads</li><li>Investor presentations &amp; reports</li><li>Social media property content</li></ul>',
            'button' => 'Plan my shoot',
            'photos' => [
                [
                    'image' => '2026/07/Architectural-portfolios.jpg',
                    'label' => 'Architectural portfolios',
                ],
                [
                    'image' => '2026/07/uae-marketing-campaigns-photography.jpg',
                    'label' => 'Marketing campaigns',
                ],
                [
                    'image' => '2026/07/Presentations-reports-e1784029522413.jpg',
                    'label' => 'Investor materials',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Exterior Photography for Every Sector',
            'text' => 'Our exterior photography supports a wide range of sectors across the UAE, each with its own visual requirements and marketing goals.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Commercial skyscrapers, residential complexes and retail centers'],
                ['Abu Dhabi', 'Developments, villas and landmarks'],
                ['Sharjah', 'Residential and commercial buildings'],
                ['Northern emirates', 'Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our exterior photography process',
            'steps' => [
                '<p>Consultation &amp; scouting: we discuss your goals and study the building’s orientation, surroundings, and how light moves across its façade to identify the best shooting approach.</p>',
                '<p>Shoot planning &amp; timing: we schedule the shoot around optimal lighting conditions — golden hour, twilight, or daylight — to best highlight the structure’s design and character.</p>',
                '<p>Professional photography: using tilt-shift lenses, professional-grade equipment, and drones for aerial angles, we capture every perspective with precision, detail, and intention.</p>',
                '<p>Editing &amp; delivery: colour, contrast, and composition fine-tuned in post-production — high-resolution images delivered ready for listings, portfolios, or marketing campaigns.</p>',
            ],
            'note' => '<p>Clients usually want the inside done too. Add <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a> to round out the visual narrative.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'What is exterior photography and why is it important?',
                    'answer' => '<p>Exterior photography captures a building’s façade, structure, and surroundings to highlight its design, scale, and character — essential for marketing, listings, and architectural portfolios.</p>',
                ],
                [
                    'question' => 'Do you offer exterior real estate photography for individual listings?',
                    'answer' => '<p>Yes. We provide exterior real estate photography for villas, apartments, and commercial units, helping agents and developers create listings that attract genuine buyer interest.</p>',
                ],
                [
                    'question' => 'Can you photograph both the interior and exterior of a property?',
                    'answer' => '<p>Yes. We offer combined interior and exterior photography packages for clients who want complete coverage of a property in a single, coordinated shoot.</p>',
                ],
                [
                    'question' => 'What time of day is best for exterior building photography?',
                    'answer' => '<p>It depends on the building’s orientation and design. We often recommend golden hour or twilight, as natural light adds depth, warmth, and visual impact — confirmed during our planning and scouting stage.</p>',
                ],
                [
                    'question' => 'Do you provide aerial or drone photography for large properties?',
                    'answer' => '<p>Yes. We use professional drones to capture elevated perspectives, ideal for large developments, villas, and properties where scale and context matter most.</p>',
                ],
                [
                    'question' => 'Which areas in the UAE do you cover?',
                    'answer' => '<p>We provide exterior photography across Dubai, Abu Dhabi, Sharjah, and all seven Emirates, working with developers, architects, and property owners throughout the region.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your exterior photography session today',
            'text' => 'Façade, aerial, golden hour, and twilight photography for properties anywhere in Dubai and across the UAE. Tell us about your property and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],
    ],
];
