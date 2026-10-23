<?php

// Homepage body sections, moved out of resources/views/index.blade.php.
// Loaded once by `php artisan content:sections` (and content:import); after that the
// page_sections rows are the source and are edited through MCP.
// text fields are plain text; html fields allow p, a, strong, em, ul, li, br, h2, h3.

return [
    'h1' => 'Professional Photography Services in Dubai,<br> serving all of the UAE',
    'sections' => [
        ['hero', 'home_hero', [
            'eyebrow' => 'Dubai · Abu Dhabi · All UAE',
            'text' => '<p>We provide professional Photography Services in Dubai, offering full-service photography &amp; video production for every Emirate since 2014.</p>',
            'primary_button' => ['text' => 'Request a quote', 'link' => '#quote'],
            'secondary_button' => ['text' => 'Call / WhatsApp', 'link' => 'tel:%20+971522946276'],
            'trust' => ['5.0 average client rating', 'Since 2014', 'Licensed & insured', 'All 7 Emirates'],
            'form_title' => 'Get a free quote',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'No obligation. You get a written quote within one working day.',
        ]],

        ['clients', 'logos', [
            'heading' => 'Our Clients',
            'items' => [
                ['image' => 'clients/amazon.png', 'alt' => 'Amazon', 'row' => 1],
                ['image' => 'clients/sharjah-municipality.png', 'alt' => 'Sharjah Municipality', 'row' => 1],
                ['image' => 'clients/rta.png', 'alt' => 'RTA', 'row' => 1],
                ['image' => 'clients/isnaad.png', 'alt' => 'Isnaad', 'row' => 1],
                ['image' => 'clients/imdaad.png', 'alt' => 'Imdaad', 'row' => 1],
                ['image' => 'clients/arabyads.jpg', 'alt' => 'Arabyads', 'row' => 1],
                ['image' => 'clients/dubai-health-authority.png', 'alt' => 'Dubai Health Authority', 'row' => 2],
                ['image' => 'clients/etisalat.png', 'alt' => 'Etisalat', 'row' => 2],
                ['image' => 'clients/du.png', 'alt' => 'du', 'row' => 2],
                ['image' => 'clients/botim.png', 'alt' => 'Botim', 'row' => 2],
                ['image' => 'clients/emirates.png', 'alt' => 'Emirates', 'row' => 2],
                ['image' => 'clients/fcm.png', 'alt' => 'FCM', 'row' => 2],
            ],
        ]],

        ['services', 'service_categories', [
            'eyebrow' => '- Our services',
            'heading' => 'Photography Services Across Multiple Industries',
            'cards' => [
                [
                    'title' => 'Corporate & commercial',
                    'image' => '2026/07/Corporate-commercial.webp',
                    'alt' => 'Corporate and commercial photography in Dubai',
                    'links' => [
                        ['text' => 'Corporate events', 'link' => '/corporate-event-photography-videography'],
                        ['text' => 'Jewelry photography', 'link' => '/jewelry-photography-services-in-uae'],
                        ['text' => 'Live streaming', 'link' => '/professional-live-streaming-services-across-dubai-and-the-uae'],
                        ['text' => '360° video booth', 'link' => '/360-video-booth-experience-for-immersive-event-engagement'],
                    ],
                ],
                [
                    'title' => 'Real estate & hospitality',
                    'image' => '2026/07/Real-estate-hospitality-e1783339326792.webp',
                    'alt' => 'Real estate and hospitality photography in Dubai',
                    'links' => [
                        ['text' => 'Hotel photography', 'link' => '/hotel-photography-service-in-uae'],
                        ['text' => 'Restaurant photography', 'link' => '/restaurant-photography-service-in-uae'],
                        ['text' => 'Architectural photography', 'link' => '/architectural-photography-in-uae'],
                        ['text' => 'Drone photography', 'link' => '/cinematic-drone-photography-videography-uae-compliant-licensed'],
                    ],
                ],
                [
                    'title' => 'Portrait & lifestyle',
                    'image' => '2026/07/Portrait-lifestyle.webp',
                    'alt' => 'Portrait and lifestyle photography in Dubai',
                    'links' => [
                        ['text' => 'Family photography', 'link' => '/family-photography-in-uae'],
                        ['text' => 'Maternity photography', 'link' => '/maternity-photography-in-uae'],
                        ['text' => 'Fashion photography', 'link' => '/fashion-photography-in-uae'],
                        ['text' => 'Influencer photography', 'link' => '/influencer-photography-in-uae'],
                    ],
                ],
                [
                    'title' => 'Specialty',
                    'image' => '2026/07/Why-choose-Dubai-Fotographer-for-live-streaming-1.webp',
                    'alt' => 'Specialty photography and live streaming services in the UAE',
                    'links' => [
                        ['text' => 'Wedding photography', 'link' => '/wedding-photography-in-uae'],
                        ['text' => 'Newborn photography', 'link' => '/newborn-baby-photography-in-uae'],
                        ['text' => 'Car photography', 'link' => '/car-photography-in-uae'],
                        ['text' => 'Sports photography', 'link' => '/sports-photography-services-in-uae'],
                    ],
                ],
            ],
        ]],

        ['portfolio', 'gallery', [
            'eyebrow' => '- Recent work',
            'heading' => 'Our Portfolio',
            'text' => 'Click any image to view it larger — a small sample of our Photography Services in Dubai and the range of shoots our team produces across the UAE.',
            'images' => [
                ['image' => '2026/07/IMGL9288-1.webp', 'alt' => 'Dubai Fotographer portfolio – professional photoshoot in Dubai'],
                ['image' => '2026/07/DSC05279-1-1024x683.webp', 'alt' => 'Dubai Fotographer portfolio – event photography in the UAE'],
                ['image' => '2026/07/Untitled-design.webp', 'alt' => 'Dubai Fotographer portfolio – commercial photography sample'],
                ['image' => '2026/07/Untitled-design-3.webp', 'alt' => 'Dubai Fotographer portfolio – lifestyle photography sample'],
                ['image' => '2026/07/Untitled-design-1.webp', 'alt' => 'Dubai Fotographer portfolio – studio photography sample'],
                ['image' => '2026/07/Untitled-design-2.webp', 'alt' => 'Dubai Fotographer portfolio – brand photography sample'],
                ['image' => '2026/07/20190701_143134080_iOS-1-e1783417004923.webp', 'alt' => 'Dubai Fotographer portfolio – on-location photoshoot in the UAE'],
                ['image' => '2026/07/IMGL9434-1-683x1024.webp', 'alt' => 'Dubai Fotographer portfolio – corporate event coverage'],
            ],
        ]],

        ['stats', 'stats', [
            'items' => [
                ['label' => 'Years in the UAE', 'number' => '10', 'suffix' => '+'],
                ['label' => 'Emirates covered', 'number' => '7', 'suffix' => ''],
                ['label' => 'Turnaround available', 'number' => '48', 'suffix' => ''],
                ['label' => 'Average client rating', 'number' => '5', 'suffix' => '.0'],
            ],
        ]],

        ['reviews', 'reviews', []],

        ['since-2014', 'image_text', [
            'image' => '2026/07/Photography-videography-services-across-the-UAE-e1783166971694.jpg',
            'eyebrow' => '- Since 2014',
            'heading' => 'Photography &amp; Videography Services Across the UAE',
            'paragraphs' => [
                'Nobody searching for a photography studio is really just looking for someone who owns a camera. Whether it’s a business or an individual, what they actually want is a creative partner, someone who can take an idea and turn it into visuals that build trust and help with real business growth. That’s what we do at Dubai Fotographer. We provide professional Photography Services in Dubai, plus videography coverage across the UAE.',
                'We’re based in Dubai and serve all seven Emirates. As a fully licensed and insured production company, we keep everything under one roof: studio photography services, on-location production, <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a>, professional videography services, <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone services</a>, <a href="%%BASE%%/corporate-event-photography-videography">event coverage,</a> and creative post-production. One team, one point of contact, from the first idea to the final file.',
            ],
            'button' => ['text' => 'Book Your Session', 'link' => '#quote'],
            'show_phone' => true,
        ]],

        ['industries', 'mosaic', [
            'eyebrow' => '- Industries',
            'heading' => 'Photography Studio Built for every industry<br> in the UAE',
            'tiles' => [
                ['image' => '2026/07/IMGL0298-1.jpg', 'title' => 'Fashion & beauty', 'text' => 'Campaigns, lookbooks, and influencer content for designers, beauty brands, and personal labels across the UAE.'],
                ['image' => '2026/04/Multi-Platform-Live-Streaming.jpg', 'title' => 'Corporate & business', 'text' => 'Executive profles, conferences, annual reports, internal communications.'],
                ['image' => '2026/07/Real-estate-hospitality-e1783339326792.jpg', 'title' => 'Hospitality', 'text' => 'Interiors, food, guest experience.'],
                ['image' => '2026/07/Real-estate.jpg', 'title' => 'Real estate', 'text' => 'Architecture &amp; developments.'],
                ['image' => '2026/07/Retail-e-commerce-.jpg', 'title' => 'Retail & e-commerce', 'text' => 'Product &amp; lifestyle visuals.'],
            ],
        ]],

        ['founder', 'founder', [
            'quote' => 'One team handles photography, videography, editing, drone and event coverage — no juggling vendors, no inconsistent style.',
        ]],

        ['studio-tabs', 'tabs', [
            '_id' => 'home',
            'eyebrow' => '- One team, start to finish',
            'heading' => 'How our photography studio works for you',
            'tabs' => [
                [
                    'icon' => 'users',
                    'label' => 'End-to-end production',
                    'image' => '2026/07/Gemini_Generated_Image_pfort8pfort8pfor-1-e1783415922230-720.webp',
                    'alt' => 'Photography studio team in Dubai',
                    'heading' => 'Photography Studio Offering End-to-End Creative Production',
                    'body' => '<p>Dubai Fotographer has been going for more than a decade now. Over that stretch, we’ve helped quite a mix of people get professional visual content tailored to their goals. Businesses, entrepreneurs, hospitality brands, real estate developers, event organizers, retailers, and loads of individuals who simply wanted the job done right.</p> <p>Abdul Rehman runs the company. With him are the photographers, videographers, drone operators, editors, and production specialists, and they all work as one accountable team, not a scattered group of freelancers who’ve never met. You’ll deal with a single point of contact who looks after your shoot from the very first planning call to final delivery. Because of that, the creative direction, the color grading and the quality standards don’t wander about from one project to the next.</p> <p>Our photography studio in Dubai is fully equipped for professional studio productions. But if the shoot can’t come to us, we’ll go to it. The mobile production teams spend a fair bit of time on the road, and they’re regularly over in Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p>',
                ],
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Commercial production',
                    'image' => '2026/07/Gemini_Generated_Image_5zsumq5zsumq5zsu-720.webp',
                    'alt' => 'Commercial photography and video production in Dubai',
                    'heading' => 'Commercial Photography Services & Video Production for Modern Businesses',
                    'body' => '<p>Customers make up their minds about a brand pretty quickly, and a lot of that comes down to what they see. Visual content plays a critical role here. Good, high-quality imagery and video help businesses improve engagement and run stronger marketing campaigns, on their websites, on social media, in advertising and in their sales materials.</p> <p>Our team turns out visual assets for all kinds of jobs. There’s corporate branding and event coverage. There’s product marketing, through our dedicated <a href="%%BASE%%/product-photography-services-in-uae">product photography</a>. We do hospitality promotion for <a href="%%BASE%%/hotel-photography-service-in-uae">hotels</a> and <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurants</a>, and <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">real estate marketing</a> for developers and agents. On top of that, we support ongoing social media content needs and public relations campaigns, the kind where every post and every press release has to look just as good as the last one.</p> <p>We keep photography and videography in a single production workflow, and that’s what lets businesses hold onto consistent branding at every customer touchpoint. Funnily enough, plenty of clients first get in touch because they’re after a professional photographer in Dubai. It doesn’t take long before they see how useful it is to have a complete production partner who can handle both still and motion content, from start to finish.</p>',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Studio + on-location',
                    'image' => '2026/07/Gemini_Generated_Image_eyla0eyla0eyla0e-720.webp',
                    'alt' => 'Photography studio and on-location production in Dubai',
                    'heading' => 'Photography Services Built for Creativity, Flexibility & Results',
                    'body' => '<p>Every project needs a different approach, and we stopped pretending otherwise a long time ago. Some clients are happiest in a controlled studio environment, where every light sits exactly where we put it. Others need a full production crew to show up at a hotel, a corporate office, a construction site, a retail location, or an event venue, and now and then that’s all in the same week.</p> <p>The Dubai photography studio is well set up for it. We’ve got professional lighting systems, a good choice of backdrop solutions, high-resolution camera equipment, and advanced editing capabilities, which, between them, cover a wide range of photography services for commercial and creative productions. Then there are the on-location teams. They can turn more or less any environment into a working production space, a boardroom, a half-built villa, a hotel lobby at 6 am before the guests come down. It doesn’t matter much where the project takes place; the visual quality stays consistent.</p> <p>Some weeks it’s <a href="%%BASE%%/portrait-photography-in-uae">corporate portraits</a>. Other weeks it’s <a href="%%BASE%%/fashion-photography-in-uae">fashion campaigns</a>, real estate marketing, <a href="%%BASE%%/luxury-food-photography-for-restaurants-hotels-and-brands">luxury food photography,</a> or drone coverage. Whatever the assignment, we build our production approach around the client’s objectives, not the other way round, and we never try to force every project into the same formula.</p>',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Why choose us',
                    'image' => '2026/07/Photography-videography-services-across-the-UAE-1024x683.webp',
                    'alt' => 'Professional photography and videography services across the UAE',
                    'heading' => 'Why Businesses Choose Us as Their Preferred Photography Studio',
                    'body' => '<p>A lot of businesses type “Photography Services in Dubai” into Google, thinking they just need someone with technical expertise. Then they actually start working with a photographer and realise that’s only part of it. What they needed all along was photography services from a team that gets branding, sticks to deadlines, understands what the commercial objectives are, and answers messages. Clear communication goes a surprisingly long way.</p> <p>As for why clients end up choosing us, a few reasons keep coming up. There’s more than a decade of industry experience behind everything we shoot. Photography and videography come from the same accountable team, so if something goes wrong, there’s no blaming another vendor. And we do studio and on-location production capabilities, with experienced photographers, videographers, and licensed drone operators on the job.</p><p>We’re fully licensed and insured. For projects that need it, the crew is bilingual in Arabic and English. On selected project types, there’s a 48-hour turnaround as well, and we don’t let the editing quality drop just to hit it.</p> <p>The bit we care about most, honestly, is the reason you’re doing the shoot. Is it about increasing bookings? Improving brand perception? Attracting customers, or documenting important milestones for the company? Once we know, we build the whole production around that outcome. You won’t get a one-size-fits-all package from us.</p>',
                ],
                [
                    'icon' => 'file-alt',
                    'label' => 'Permits & approvals',
                    'image' => '2026/08/Photgraphy-services-in-Dubai.webp',
                    'alt' => 'Photography and drone permits for shoots in Dubai',
                    'heading' => 'How Our Photography Studio Handles Permits for Shoots Across the UAE',
                    'body' => '<p>Shooting in Dubai often means navigating permit requirements before a single frame is captured and it’s one of the most overlooked parts of planning a shoot. Our photography studio helps clients understand what’s needed depending on location and shoot type, including drone photography, which requires separate approval given UAE airspace regulations.</p> <p>Rather than leaving clients to figure this out alone, our team factors permit requirements into the planning stage, so shoot days aren’t delayed or derailed by last-minute paperwork. For drone coverage specifically, our crew is experienced in flying under the required approvals, giving clients aerial shots without the compliance risk of unauthorized flights. It’s one less thing to worry about when planning your shoot.</p>',
                ],
            ],
        ]],

        ['process', 'process', [
            'eyebrow' => '- How we work',
            'heading' => 'Our Creative Production Process',
            'steps' => [
                ['title' => 'Discovery & consultation', 'text' => 'We discuss goals, requirements, timelines, locations, and deliverables.'],
                ['title' => 'Planning & creative direction', 'text' => 'A production strategy, shot list, and schedule aligned to your objectives.'],
                ['title' => 'Production', 'text' => 'Photography and videography executed in-studio, on location, or both.'],
                ['title' => 'Editing & post-production', 'text' => 'Professional editing, retouching, and color correction.'],
                ['title' => 'Delivery', 'text' => 'Assets delivered ready for web, social, advertising, and print.'],
            ],
        ]],

        ['coverage', 'coverage', [
            'eyebrow' => '- Serving all seven Emirates',
            'text' => 'As a Dubai-based company, we proudly serve clients throughout the UAE, with production teams travelling across every Emirate, bringing full studio-grade lighting, camera, and drone equipment to every location.',
        ]],

        ['faq', 'faq', [
            'items' => [
                ['question' => '1. How much does a professional photographer in Dubai charge?', 'answer' => 'Pricing depends on the service category, shoot duration, location, and whether videography is included. The fastest way to get an accurate quote is to share your shoot type and date through our booking form or by calling our team directly.'],
                ['question' => '2. Do you provide photography and videography together?', 'answer' => 'Yes. Every project can include combined photography and videography, handled by the same production crew rather than separate vendors, which keeps visual style, lighting, and color grading consistent.'],
                ['question' => '3. Do you only shoot in Dubai, or across the whole UAE?', 'answer' => 'We are based in Dubai and shoot across the entire UAE, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, for both studio and on-location productions.'],
                ['question' => '4. How fast is turnaround on edited photos and video?', 'answer' => 'A 48-hour turnaround is available on selected project types. Larger productions are scheduled with a clear delivery timeline agreed before the shoot.'],
                ['question' => '5. Is your team licensed and insured?', 'answer' => 'Yes. Dubai Fotographer operates as a fully licensed and insured production company, and all aerial work is conducted under the appropriate UAE drone licensing.'],
            ],
        ]],

        ['booking', 'booking', [
            'eyebrow' => '- BOOK YOUR SHOOT',
            'heading' => 'Book your photography or videography session',
            'text' => '<p>Tell us about your project and we’ll get back to you with<br> availability and pricing, usually within a few hours.</p>',
            'features' => [
                ['icon' => 'plane', 'title' => 'Licensed & insured', 'text' => 'All productions are carried out by a fully licensed and insured<br> UAE photography and videography company.'],
                ['icon' => 'stopwatch', 'title' => 'Fast response', 'text' => 'Quotes typically sent within a few hours during business hours.'],
                ['icon' => 'map-pin', 'title' => 'All 7 Emirates', 'text' => 'We travel to you anywhere across Dubai, Abu Dhabi, and the wider UAE.'],
                ['icon' => 'mobile-alt', 'title' => 'Prefer to talk?', 'text' => 'Call +971 52 294 6276 or message us on WhatsApp.'],
            ],
        ]],

        ['map', 'map', [
            'eyebrow' => '- FIND US',
            'heading' => 'Visit our Dubai studio',
            'text' => 'Based in Dubai and just as comfortable on location anywhere across the UAE — drop by the studio or have us come to you.',
        ]],

        ['cta', 'cta', [
            'eyebrow' => "- Let's create something",
            'heading' => 'Book Our Photography Services today',
            'text' => 'Anywhere in Dubai, Abu Dhabi, or across the UAE',
        ]],
    ],
];
