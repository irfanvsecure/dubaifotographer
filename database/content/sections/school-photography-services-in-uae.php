<?php

// Body sections of /school-photography-services-in-uae, moved out of resources/views/school-photography-services-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'School photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/05/dubai-fotographer-female-photography-team.webp',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Professional school photography for private schools, international schools, nurseries, and colleges — student portraits, graduation ceremonies, campus imagery, and ongoing event coverage across the UAE.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your school',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Institution',
                    'name' => 'institution',
                    'options' => ['Private school', 'International school', 'Nursery', 'College or university'],
                ],
                [
                    'label' => 'What do you need?',
                    'name' => 'service',
                    'options' => ['Student portraits', 'Graduation or event', 'Campus photography', 'Full academic year'],
                ],
            ],
            'venue_placeholder' => 'School name and emirate',
            'guests_label' => 'Roughly how many students?',
            'guests_options' => ['Under 100', '100 to 500', '500 to 1,000', 'Over 1,000'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '48h',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => 'Bilingual',
                    'text' => 'Arabic / English crew',
                ],
                [
                    'title' => 'Timetable-friendly',
                    'text' => 'Scheduling',
                ],
                [
                    'title' => 'All 7 Emirates',
                    'text' => 'Covered',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'We provide school photography across Dubai and all seven Emirates for educational institutions of every size. Whether your institution is based in the heart of Dubai or elsewhere across the Emirates, our team travels to your campus with full professional equipment, working efficiently within your timetable.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Student portraits',
                'Graduation ceremonies',
                'Annual days',
                'Performances',
                'Sports days',
                'Classroom activities',
                'Campus life',
                'National day',
                'Science fairs',
                'Art exhibitions',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Professional School Photography for Educational Institutions',
            'paragraphs' => [
                'Ask the marketing person at just about any school how their photos are looking, and you’ll usually get a small sigh. The prospectus pictures are five years old, maybe more, and half the kids in them left long ago. Professional school photography is how you sort that out. It captures the people, the achievements, and the everyday experiences that make an educational institution feel like itself. We do individual <a href="%%BASE%%/portrait-photography-in-uae">student portraits</a>, graduation ceremonies, <a href="%%BASE%%/exterior-photography-in-uae">campus photography</a>, classroom activities, and all the school events that fill up the calendar.',
                'Abdul Rehman runs Dubai Fotographer, and since 2014 we’ve done school photography services for schools, nurseries, colleges and educational institutions across the UAE. We’re fully licensed and insured as a production company, and our crew speaks Arabic and English, which makes life easier with teachers, the front office and the odd worried parent. Every session gets planned around the school’s schedule. Classes carry on with hardly any disruption, and we still get the key people, facilities and events photographed efficiently, usually well before the last bell rings.',
                'Properly organised planning and experienced photographers who know how a school day goes- that’s honestly most of it. What you get is consistent, high-quality images that reflect the character, the environment and the achievements of your institution.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Photography for Every School Activity',
            'tabs' => [
                [
                    'icon' => 'star',
                    'label' => 'Graduation Ceremonies',
                    'image' => '2026/05/school-photography-2.webp',
                    'alt' => 'School Photography in UAE',
                    'heading' => 'Graduation Ceremonies',
                    'body' => '<p>We show up at graduation days, award ceremonies and other formal academic events with the camera ready. When a student’s name gets read out and they walk across the stage for their certificate, that’s the one shot we really can’t miss. Parents get a proper photo rather than the back of someone’s head, and the school keeps a lasting visual record of every student’s achievement.</p>',
                    'button' => 'Quote my graduation',
                ],
                [
                    'icon' => 'microphone',
                    'label' => 'Annual Days and Performances',
                    'image' => '2026/05/school-photography-3.webp',
                    'alt' => 'School Photography in UAE',
                    'heading' => 'Annual Days and Performances',
                    'body' => '<p>Most schools have one or two really big nights a year. We photograph annual day celebrations, cultural programmes, dramatic performances, exhibitions and other flagship school events across the academic year. We stay for the lot, from kids fidgeting backstage in costume right through to the last song.</p><p>Then you’ve got the cultural events, national day celebrations, science fairs, art exhibitions and community gatherings. Photos like that show the diversity and spirit of the school community.</p>',
                    'button' => 'Quote my school event',
                ],
                [
                    'icon' => 'trophy',
                    'label' => 'Sports Competitions and Days',
                    'image' => '2026/07/school-photography-5.webp',
                    'alt' => 'School Photography in UAE',
                    'heading' => 'Sports Competitions and Days',
                    'body' => '<p>Sport needs action photography, so that’s what this one is. Sports competitions, inter-school tournaments, sports days, extracurricular activities. It’s about showing student participation and achievement, the winners lifting the cup, of course, and the kids at the back who are still running flat out.</p>',
                    'button' => 'Quote my sports day',
                ],
                [
                    'icon' => 'building',
                    'label' => 'Classroom and Campus Activities',
                    'image' => '2026/05/school-photography-4.webp',
                    'alt' => 'School Photography in UAE',
                    'heading' => 'Classroom and Campus Activities',
                    'body' => '<p>Funnily enough, loads of our favourite school photos come from totally normal days. We do ongoing photography of everyday learning, student interaction, classroom activities and campus life. A few visits in, the school has a balanced visual collection showing the full school experience throughout the year.</p>',
                    'button' => 'Quote my campus shoot',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'School Portraits and Campus Photography',
                    'image' => '2026/06/portrait-photography-3-1024x765.webp',
                    'alt' => 'Portrait Photography in UAE',
                    'heading' => 'School Portraits and Campus Photography',
                    'body' => '<p>There’s a school photo on nearly every family fridge. Families keep them as lasting memories. The school keeps them as consistent records, year after year. On portrait day, every student gets the same lighting and composition, so the photos work as <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">personal keepsakes</a> and fit straight into school records.</p><p>We also photograph the classrooms, specialist learning spaces, libraries, laboratories, <a href="%%BASE%%/sports-photography-services-in-uae">sports facilities</a> and the shared environments. Prospectuses, websites, newsletters, annual reports, other school publications- one set covers all of it.</p>',
                    'button' => 'Quote my portrait day',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your institution and academic calendar, and we’ll get back to you with availability and pricing.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'School photography',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Portraits', 'Events', 'Campus'],
            'images' => [
                [
                    'image' => '2026/05/school-photography-1.webp',
                    'alt' => 'School Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/06/portrait-photography-3-1024x765.webp',
                    'full' => '2026/06/portrait-photography-3.webp',
                    'alt' => 'Portrait Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/05/school-photography-2.webp',
                    'alt' => 'School Photography in UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/05/school-photography-3.webp',
                    'alt' => 'School Photography in UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/05/school-photography-4.webp',
                    'alt' => 'School Photography in UAE',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/school-photography-5.webp',
                    'alt' => 'School Photography in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Flexible School Photography Packages',
            'body' => '<p>Every educational institution has different photography requirements — our packages are tailored to suit the size of the school, the type of photography required, and the academic calendar.</p><p class="svc-feature-label">Two ways to work with us:</p><ul><li><strong>Single-event school photography:</strong> a dedicated school event photographer for annual functions, graduation ceremonies, sports days, and other flagship occasions.</li><li><strong>Comprehensive school photography:</strong> a full-year solution covering student portraits, staff photography, campus imagery, and ongoing event coverage.</li></ul><p>Our flexible approach allows schools to combine multiple school photography services into a single project — ensuring the photography delivers long-term value while fitting seamlessly into existing operations.</p>',
            'button' => 'Ask about packages',
            'photos' => [
                [
                    'image' => '2026/05/School-Photography-services.webp',
                    'label' => 'Event coverage',
                ],
                [
                    'image' => '2026/06/portrait-photography-2.webp',
                    'label' => 'Our crew',
                ],
                [
                    'image' => '2026/05/school-photography-1.webp',
                    'label' => 'Portrait albums',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'School Photography Across the UAE',
            'text' => 'Every school operates differently, so our approach gets built around your timetable, your photography objectives, and your administrative requirements.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Private schools, international schools and nurseries'],
                ['Abu Dhabi and Al Ain', 'Schools, colleges and universities'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Planning Your School Photography',
            'steps' => [
                '<p>We discuss your photography objectives, priorities, and academic calendar to understand exactly what is needed and when.</p>',
                '<p>We coordinate with school staff and administration, and plan portrait sessions, campus photography, and event coverage in advance, around your timetable.</p>',
                '<p>Students, staff, facilities, and key activities photographed professionally and efficiently throughout the session.</p>',
                '<p>The final image collection professionally edited and delivered in high resolution, ready for use across all your platforms and communications.</p>',
            ],
            'note' => '<p>For nurseries and girls’ schools that prefer them, we send <a href="%%BASE%%/female-photographers-in-uae">female photographers</a>.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1.What types of schools do you provide photography services for?',
                    'answer' => '<p>We work with private schools, international schools, nurseries, colleges, universities, and other educational institutions throughout the UAE.</p>',
                ],
                [
                    'question' => '2. Do you provide photography for school events?',
                    'answer' => '<p>Yes. We provide school event photographer services for graduation ceremonies, annual days, sports events, performances, cultural programmes, exhibitions, and other school functions.</p>',
                ],
                [
                    'question' => '3. Can you photograph both student portraits and the school campus?',
                    'answer' => '<p>Absolutely. We provide professional school portraits as well as photography of classrooms, facilities, outdoor spaces, and the wider campus to create a complete image library for your institution.</p>',
                ],
                [
                    'question' => '4. Are your school photography packages customised?',
                    'answer' => '<p>Yes. Our school photography packages are tailored to your school’s requirements, including the type of photography, number of students, event coverage, and delivery needs.</p>',
                ],
                [
                    'question' => '5. Do you provide school photography across the UAE?',
                    'answer' => '<p>Yes. We provide school photography services across Dubai and all seven Emirates for educational institutions of every size.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your school photography session today',
            'text' => 'Professional school photography for private schools, international schools, nurseries, and colleges across Dubai and all seven Emirates. Quotes are typically sent within a few hours during business hours.',
        ]],
    ],
];
