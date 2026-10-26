<?php

// Body sections of /multi-camera-event-recording, moved out of resources/views/multi-camera-event-recording-for-conferences-concerts-and-large-scale-events.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Multi-camera event recording in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Multi-camera-event-recording-in-Dubai-serving-all-of-the-UAEjpg.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Broadcast-quality coverage for conferences, corporate events, and live productions — every angle, every speaker, every key moment.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your event recording',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Event type',
                    'name' => 'event_type',
                    'options' => ['Conference or summit', 'Product launch', 'Award ceremony', 'Exhibition or AGM'],
                ],
                [
                    'label' => 'Add to recording',
                    'name' => 'extras',
                    'options' => ['Recording only', 'Live streaming', 'Event photography', 'Drone coverage'],
                ],
            ],
            'venue_placeholder' => 'e.g. DWTC, ADNEC, hotel name',
            'guests_label' => 'How long is the event?',
            'guests_options' => ['Up to 2 hours', 'Half day', 'Full day', 'Several days'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Since 2014',
                    'text' => 'Dubai, Abu Dhabi and across the UAE',
                ],
                [
                    'title' => '2 to 4 cameras',
                    'text' => 'Synchronized, scaled to your event',
                ],
                [
                    'title' => '48 hours',
                    'text' => 'Turnaround available on selected projects',
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
            'text' => 'Based in Dubai, our production crews regularly travel across the UAE to support conferences, exhibitions, government projects, and corporate organizations, delivering the same professional planning and crew wherever your event takes place.',
            'extra' => 'See how that crew works on a <a href="%%BASE%%/how-multi-camera-filming-improves-concert-coverage">live concert</a> and on a <a href="%%BASE%%/how-multi-camera-recording-works-uae-exhibition-stands">UAE exhibition stand</a>.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Conferences',
                'Board meetings',
                'Product launches',
                'Exhibitions',
                'Award ceremonies',
                'Industry summits',
                'Annual general meetings',
                'Investor presentations',
                'Medical conferences',
                'Hybrid events',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/why-choose-us-683x1024.webp',
            'heading' => 'Why Choose Dubai Fotographer?',
            'paragraphs' => [
                'Short answer? We’ve been doing this a long time. Since 2014, businesses all over the UAE have called us when an event really matters. They trust us to show up, be professional, be reliable, and bring some creative expertise to the table.',
                'Abdul Rehman leads the company. His team? Experienced videographers, photographers, camera operators, drone specialists, editors, audio technicians, and production coordinators. They work together on your event from the first planning meeting right through to final delivery. We’re a fully licensed and insured production company. Our crew is bilingual in Arabic and English and available for venue coordination.',
                'Your event isn’t just an event. It’s your brand, out in public, in front of the people you care about. So our job is pretty clear. Catch every important moment. Get it right. Make it look professional, at the quality your audience expects from you.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Professional Coverage for Corporate, Business & Live Events',
            'tabs' => [
                [
                    'icon' => 'camera-retro',
                    'label' => 'Every important angle',
                    'image' => '2026/07/How-multi-camera-recording-captures-every-important-angle-1024x698.webp',
                    'alt' => 'Multi-Camera Event Recording Services in UAE',
                    'heading' => 'Every important angle',
                    'body' => '<p>We put several cameras in the room, each with its own operator, all synced. One holds the wide establishing shot. One sticks with the speaker for close-ups. Another one’s pointed at the audience, because reactions sell the moment better than anything. Then there are the presentation screens, your branding elements, bits of venue detail.</p><p>Everything’s recorded simultaneously, so later in the edit we’ve actually got options. The video moves. It cuts to the right thing at the right time instead of sitting there static like a CCTV feed.</p>',
                    'button' => 'Quote my recording',
                ],
                [
                    'icon' => 'microphone',
                    'label' => 'Conference recording',
                    'image' => '2026/07/ASF01055-1-1-1024x683.webp',
                    'alt' => 'Multi-Camera Event Recording Services in UAE',
                    'heading' => 'Conference recording',
                    'body' => '<p>Keynote speakers, panel discussions, workshops, audience interaction, presentation slides, live demonstrations. All of it needs to be recorded properly, and none of it can be disrupted by a camera guy walking in front of the stage.</p><p>We sort everything out before the event starts. Cameras, audio systems, presentation feeds, lighting- we make sure they all work together, so it runs smoothly from the opening speech to the last Q&amp;A.</p>',
                    'button' => 'Quote my conference',
                ],
                [
                    'icon' => 'bolt',
                    'label' => 'Live camera switching',
                    'image' => '2026/07/Live-Camera-Switching-Broadcast-Quality-Production-574x1024.webp',
                    'alt' => 'Multi-Camera Event Recording Services in UAE',
                    'heading' => 'Live camera switching',
                    'body' => '<p>Several camera feeds come into one desk, and our operator cuts between them as the event unfolds. Speaker, wide shot, audience, slides, back to the speaker. The transitions stay smooth, and the visual quality stays consistent from start to finish.</p><p>It pays off at hybrid events, annual meetings, award ceremonies and government events, and with <a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">live streaming</a> it looks polished whether you’re sitting in the hall or watching on a laptop at home.</p>',
                    'button' => 'Quote live switching',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Content for marketing',
                    'image' => '2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp',
                    'alt' => 'Professional coverage for corporate, business and live events',
                    'heading' => 'Content for marketing',
                    'body' => '<p>Today’s events are no longer limited to the audience inside the venue. We focus on telling the complete story through multiple camera perspectives, synchronized audio, cinematic visuals, and seamless editing.</p><ul><li>Campaigns and social: polished clips ready for websites, YouTube, and LinkedIn.</li><li>Training and communications: full sessions repurposed for onboarding and internal use.</li><li>Investor and PR assets: long-term digital assets for presentations and reporting.</li></ul>',
                    'button' => 'Quote my event content',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your event and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent event productions',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Conferences', 'Live production', 'On set'],
            'images' => [
                [
                    'image' => '2026/07/ASF01055-1-1-1024x683.webp',
                    'full' => '2026/07/ASF01055-1-1.webp',
                    'alt' => 'Multi-Camera Event Recording Services in UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp',
                    'full' => '2026/07/Professional-coverage-for-corporate-business-live-events.webp',
                    'alt' => 'Professional coverage for corporate, business and live events',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Live-Camera-Switching-Broadcast-Quality-Production-574x1024.webp',
                    'full' => '2026/07/Live-Camera-Switching-Broadcast-Quality-Production.webp',
                    'alt' => 'Multi-Camera Event Recording Services in UAE',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Live-camera-switchingjpg.jpg',
                    'alt' => 'Live camera switching at an event',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Multi-camera-event-recording-in-Dubai-serving-all-of-the-UAEjpg.jpg',
                    'alt' => 'Multi-camera event recording in Dubai',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/06/photo-1490971774356-7fac993cc438.avif',
                    'alt' => 'Lighting and camera setup for an event production',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Photography, Videography & Event Production Under One Roof',
            'body' => '<p>Here’s what clients tell us they like most. They make one call, and the whole creative side of the event is handled. You’re not hiring a photographer from here and a video guy from there and hoping they get along.</p><p>Big event or small, we adjust. Some projects only need a single production crew. Others need several specialist teams working side by side.</p><p class="svc-feature-label">Every event service, under one roof:</p><ul><li>Professional audio, with backup recording</li><li><a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">Live streaming</a> for remote audiences</li><li><a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone coverage</a> for those big overhead shots</li><li>Event photography and instant photo printing</li><li>A <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 video booth experience</a></li></ul>',
            'button' => 'Add services to my quote',
            'photos' => [
                [
                    'image' => '2026/07/Professional-audio-1024x1024.webp',
                    'label' => 'Professional audio',
                ],
                [
                    'image' => '2026/04/cinematic-drone-videography-scaled.webp',
                    'label' => 'Drone coverage',
                ],
                [
                    'image' => '2026/04/Professional-Live-Streaming.jpg',
                    'label' => 'Live streaming',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Multi-Camera Event Recording Across the UAE',
            'text' => 'We cover the whole UAE, wherever you are. And once the event’s done, you won’t be waiting forever; post-production comes with a fast turnaround.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Conferences, exhibitions and corporate events'],
                ['Abu Dhabi', 'Government projects, conferences and award ceremonies'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'How multi-camera recording works',
            'steps' => [
                '<p>You tell us about your event, venue and agenda, and we get back with availability and pricing, usually within a few hours.</p>',
                '<p>We confirm the camera setup and coordinate with the venue AV team on camera placement, audio and any restrictions.</p>',
                '<p>On the day, synchronized cameras with their own operators record every angle, with live switching if you need it.</p>',
                '<p>You receive a full edited recording, a shorter highlight video and raw footage if requested, on a timeline confirmed before the event.</p>',
            ],
            'note' => '<p>Want remote audiences to watch live? Add <a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">live streaming</a> to your recording.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'How many cameras are included in a multi-camera recording?',
                    'answer' => '<p>This depends on the event size, venue layout, and number of stages or speakers. Most corporate events use 2-4 synchronized cameras, while larger conferences or multi-stage productions may need more. We confirm the exact setup during planning based on your venue and agenda.</p>',
                ],
                [
                    'question' => 'Do you provide a live stream feed in addition to recording?',
                    'answer' => '<p>Yes. Live camera switching and streaming can be added to any multi-camera booking, allowing remote audiences to watch in real time while we also capture full-quality footage for post-production.</p>',
                ],
                [
                    'question' => 'Can you record events in venues with restricted AV access or technical setups?',
                    'answer' => '<p>Yes. We coordinate directly with venue AV teams ahead of the event to confirm camera placement, audio integration, and any restrictions, so the production runs smoothly without disrupting the event itself.</p>',
                ],
                [
                    'question' => 'What do we receive after the event is over?',
                    'answer' => '<p>Deliverables typically include a full edited recording, a shorter highlight video, and raw footage if requested, with turnaround timelines confirmed before the event based on the production scope.</p>',
                ],
                [
                    'question' => 'Can multi-camera recording be combined with photography or a 360 video booth?',
                    'answer' => '<p>Yes. Most clients pair multi-camera recording with event photography, live streaming, drone coverage, or a 360 video booth, all delivered by the same production team for consistent style and easier coordination.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your multi-camera event recording today',
            'text' => 'Broadcast-quality coverage anywhere in Dubai, Abu Dhabi, or across the UAE.',
        ]],
    ],
];
