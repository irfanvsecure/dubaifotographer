<?php

// Body sections of /corporate-event-photography-videography, moved out of resources/views/corporate-event-photography-videography.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Corporate Event Photography in Dubai',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/DSC00283-2.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Getting a company event ready can take weeks, and then the whole thing is done in a few hours. What you keep are the pictures and videos. People use them on LinkedIn, in annual reports and in client emails long after the day. We cover corporate event photography in Dubai and across the UAE.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your event',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Event type',
                    'name' => 'event_type',
                    'options' => ['Conference or summit', 'Launch or activation', 'Award night or gala', 'Staff party or team event'],
                ],
                [
                    'label' => 'Coverage',
                    'name' => 'coverage',
                    'options' => ['Photo and video', 'Photo only', 'Video only'],
                ],
            ],
            'date_label' => 'Event date',
            'venue_label' => 'Venue',
            'venue_placeholder' => 'e.g. DWTC, ADNEC, hotel name',
            'guests_label' => 'Roughly how many guests?',
            'guests_options' => ['Under 100', '100 to 300', '300 to 1,000', 'Over 1,000'],
            'email_label' => 'Work email',
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Photo and video',
                    'text' => 'From one crew',
                ],
                [
                    'title' => '48 hours',
                    'text' => 'Edited photos delivered',
                ],
                [
                    'title' => 'Since 2014',
                    'text' => 'Dubai, Abu Dhabi and across the UAE',
                ],
                [
                    'title' => 'Arabic and English',
                    'text' => 'Speaking team',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'While many assignments take place in Dubai and Abu Dhabi, our team covers corporate events throughout every Emirate, arriving prepared with equipment suited to the venue and schedule.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => ['Conferences', 'Summits', 'Product launches', 'Brand activations', 'Award nights', 'Gala dinners', 'Staff parties', 'Team events', 'Panel talks', 'Keynotes'],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'About Our Team',
            'paragraphs' => [
                'We work as a corporate event photographer in Dubai and we bring one crew for photos and video together, so you are not mixing two suppliers with two different styles. We’ve worked as event photographers and videographers since 2014, and Abdul Rehman still runs the team.',
                'Clients who come back tell us they like briefing only one team for photo and video. Our crew speaks Arabic and English, we have the licences to shoot in Dubai and the other emirates, and you talk to the same person from the first message to the last file.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our Corporate Event Photography Services',
            'tabs' => [
                [
                    'icon' => 'microphone',
                    'label' => 'Conferences and Summits',
                    'image' => '2026/07/ASF00932-2-1024x683.webp',
                    'alt' => 'Corporate Event Photography in UAE',
                    'heading' => 'Conferences and Summits',
                    'body' => '<p>A conference is not easy to shoot. Lights on stage keep changing, speakers walk up and down, and the hall is usually darker than you expect. As a conference photographer in Dubai, we’ve worked in ballrooms, expo halls and rooftop venues. If your summit has a few halls going at once, we send photographers for event sessions in each hall.</p><p>Organising one? Take a look at our <a href="%%BASE%%/corporate-event-photography-checklist-for-uae-conference-organizers">conference photography checklist</a> before the day. It has the shots that people tend to forget.</p>',
                    'button' => 'Quote my conference',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Product Launches and Brand Activations',
                    'image' => '2026/07/IMGL5601-1-1024x682.webp',
                    'alt' => 'Product launch and brand activation photography in Dubai',
                    'heading' => 'Product Launches and Brand Activations',
                    'body' => '<p>You only get one product reveal, and nobody will do it again for a photo. We come in early and choose where to stand before anyone arrives. At brand activations, many clients add a <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 video booth</a> or an <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">instant print photo booth</a> because guests like having something to post right away.</p>',
                    'button' => 'Quote my launch',
                ],
                [
                    'icon' => 'trophy',
                    'label' => 'Award Nights and Gala Dinners',
                    'image' => '2026/07/Awards1-1024x683.webp',
                    'alt' => 'Award night photography at a corporate gala dinner in Dubai',
                    'heading' => 'Award Nights and Gala Dinners',
                    'body' => '<p>At a gala you have to be ready all night. A lot of the time the best shot is someone’s face when their name gets called. We stay near the stage with the running order in hand.</p>',
                    'button' => 'Quote my gala',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Staff Parties and Team Events',
                    'image' => '2026/07/DSC001721-1024x683.webp',
                    'alt' => 'Staff party and team event photography in Dubai',
                    'heading' => 'Staff Parties and Team Events',
                    'body' => '<p>At a staff party nobody wants a camera right in front of them. Our corporate party photographer keeps some distance, so people relax and act naturally.</p>',
                    'button' => 'Quote my team event',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us the date and venue. You get a written quote and a shot list within one working day.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent corporate events',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Conferences', 'Galas', 'People'],
            'images' => [
                [
                    'image' => '2026/07/K_AL8110-1-1024x683.jpg',
                    'full' => '2026/07/K_AL8110-1-scaled.jpg',
                    'alt' => 'Corporate Event Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/DSC00259-1-1024x680.jpg',
                    'full' => '2026/07/DSC00259-1.jpg',
                    'alt' => 'Corporate Event Photography in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/ASF01055-1-1024x683.jpg',
                    'full' => '2026/07/ASF01055-1.jpg',
                    'alt' => 'Conference photographer covering a keynote session in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/IMGL9434-1-683x1024.jpg',
                    'full' => '2026/07/IMGL9434-1.jpg',
                    'alt' => 'Dubai Fotographer portfolio – corporate event coverage',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/ASF01461-1-1024x679.jpg',
                    'full' => '2026/07/ASF01461-1.jpg',
                    'alt' => 'Corporate Event Photography in UAE',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/IMGL8370-1-1-1024x683.jpg',
                    'full' => '2026/07/IMGL8370-1-1-e1783493336214.jpg',
                    'alt' => 'Corporate Event Photography in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Corporate Event Videography in Dubai',
            'body' => '<p>A good speech or a full hall clapping just looks better on video. Our corporate event videography includes a short highlight film, full keynote and panel recordings, interviews with speakers and guests, and vertical clips for Instagram and TikTok.</p><p>You might want an event videographer in Dubai for just one evening. You might need a crew for a three-day event. We’ve done plenty of both, and the same corporate event videographer stays with you the whole time.</p><p class="svc-feature-label">Extras you can add:</p><ul><li><a href="%%BASE%%/multi-camera-event-recording">Multi-camera event recording</a> for more angles in big halls</li><li><a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">Live streaming</a> for guests who can’t make it</li><li>Aerial shots from our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone team</a> at outdoor events</li></ul><p>Some companies also hire us as a corporate videographer in Dubai for brand films and other Dubai videography for corporate promotion.</p>',
            'button' => 'Add video to my quote',
            'photos' => [
                [
                    'image' => '2026/09/corporate-event-videography-in-uae.jpg',
                    'label' => 'Highlight film',
                ],
                [
                    'image' => '2026/07/Drone-Videography-for-Events-Weddings-Special-Occasions0760.jpg',
                    'label' => 'Drone',
                ],
                [
                    'image' => '2026/07/IMGL5601-1.jpg',
                    'label' => 'Vertical clips',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Corporate Event Photography Across the UAE',
            'text' => 'Whether you need corporate event coverage in Dubai or corporate event photography in Abu Dhabi, we’ll help you get a venue permit if one is needed.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'DIFC, Business Bay, Expo City and the Palm'],
                ['Abu Dhabi', 'ADNEC and the main city hotels'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'How Our Event Coverage Services Work',
            'steps' => [
                '<p>You tell us the date, venue and about how many guests, then we have a quick call about the schedule.</p>',
                '<p>Within one working day you get a written quote and a shot list from us.</p>',
                '<p>On the day, our crew comes early, checks the light and works around your timings.</p>',
                '<p>Edited photos reach you in 48 hours through a secure link, and the video comes after.</p>',
            ],
            'note' => '<p>Not sure what to write in a brief? Our guide on <a href="%%BASE%%/brief-your-event-photographer-uae">how to brief your event photographer</a> should help.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'How is corporate event photography pricing worked out?',
                    'answer' => '<p>We look at how many hours, how many photographers and whether you want video as well. There’s more about it in our <a href="%%BASE%%/how-much-does-corporate-event-photography-cost-in-the-uae">pricing guide</a>, and you always get a quote before booking.</p>',
                ],
                [
                    'question' => 'What does your event photography service in Dubai include?',
                    'answer' => '<p>You get edited high-resolution photos in a private online gallery, and you can use them in your marketing.</p>',
                ],
                [
                    'question' => 'Is your team based in the UAE?',
                    'answer' => '<p>Yes. Every business event photographer on our team lives and works here, so you won’t be paying for flights.</p>',
                ],
                [
                    'question' => 'Do you offer photography services for corporates outside events?',
                    'answer' => '<p>Yes. We also shoot office photos, <a href="%%BASE%%/portrait-photography-in-uae">corporate headshots</a> and <a href="%%BASE%%/product-photography-services-in-uae">product shoots</a>.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book a Professional Event Photographer',
            'text' => 'Booking a professional event photography service should be simple. Just send us your date and venue, and a professional event photographer from our team will get back to you the same day with availability and a quote.',
        ]],
    ],
];
