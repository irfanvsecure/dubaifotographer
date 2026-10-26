<?php

// About Us body sections, moved out of resources/views/about-us.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'About Us',
    'sections' => [
        ['hero', 'about_hero', [
            'image' => '2026/04/Commercial-Photography.jpg',
            'eyebrow' => '- Since 2014',
            'text' => 'A licensed & insured photography and videography team in Dubai, serving all 7 Emirates.',
            'button' => ['text' => 'Book Your Session', 'link' => '/booking-form'],
            'trust' => [
                ['icon' => 'star', 'text' => '5.0 average client rating'],
                ['icon' => 'check-circle', 'text' => 'Licensed & insured'],
                ['icon' => 'map-marker-alt', 'text' => 'All 7 Emirates'],
                ['icon' => 'users', 'text' => 'Arabic & English crew'],
            ],
        ]],

        ['story', 'about_story', [
            'eyebrow' => '- Our story',
            'heading' => 'Photography & videography in the UAE since 2014',
            'paragraphs' => [
                'Based in the UAE, we are a professional photography and videography company with over a decade of experience, proudly serving clients since 2014. We provide high-quality photography and video production services across Dubai and the wider UAE, delivering visually compelling content for corporate, commercial, and creative projects.',
                'With extensive experience in the UAE market, we understand the region’s diverse locations, cultures, and high production standards. Every project is handled with creativity, technical expertise, and attention to detail, ensuring results that align with each client’s vision and brand identity.',
                'The studio is in Business Bay, in Dubai Design District. From there the same crew covers weddings, corporate events, product and food shoots, real estate, portraits and drone work in Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah and Umm Al Quwain. You deal with one producer from the first call through to the edited files, in Arabic or English. Tell us the date, the venue and what the pictures or film need to do, and we reply with availability and a quote. Edited photos and video are delivered after the shoot, with a 48-hour turnaround when the job needs it.',
                'Operating from our modern photo studio, we specialize in capturing iconic UAE pictures and moments for global brands, weddings, and private events.',
                'Our focus is on producing professional, cinematic, and timeless visuals—whether for live events, corporate functions, real estate, food photography, or branded video content',
            ],
            'button' => ['text' => 'Book Your Session', 'link' => '/booking-form'],
            'video' => '2026/04/cuuooaaaaa.mp4',
            'badge_number' => '10+',
            'badge_text' => 'years behind the camera',
        ]],

        ['stats', 'stats', [
            '_class' => 'ab-stats',
            'items' => [
                ['label' => 'Years in the UAE', 'number' => '10', 'suffix' => '+'],
                ['label' => 'Emirates covered', 'number' => '7', 'suffix' => ''],
                ['label' => 'Turnaround available', 'number' => '48', 'suffix' => ''],
                ['label' => 'Average client rating', 'number' => '5', 'suffix' => '.0'],
            ],
        ]],

        ['why', 'reasons', [
            'eyebrow' => '- Why choose us',
            'heading' => 'One accountable team, from first call to final file',
            'items' => [
                ['icon' => 'check-circle', 'title' => 'Licensed & insured', 'text' => 'A fully licensed and insured UAE photography and videography company.'],
                ['icon' => 'camera-retro', 'title' => 'One team, photo + video', 'text' => 'Photography, videography, editing, drone and event coverage from the same crew.'],
                ['icon' => 'map-marker-alt', 'title' => 'All 7 Emirates', 'text' => 'Based in Dubai, shooting in our studio or on location anywhere in the UAE.'],
                ['icon' => 'users', 'title' => 'Arabic & English crew', 'text' => 'A bilingual crew for projects that need it, with one point of contact.'],
            ],
        ]],

        ['founder', 'founder', [
            'quote' => 'One team handles photography, videography, editing, drone and event coverage — no juggling vendors, no inconsistent style.',
        ]],

        ['clients', 'logo_grid', [
            'eyebrow' => '- Trusted by',
            'heading' => 'Our Clients',
            'items' => [
                ['image' => 'clients/amazon.png', 'alt' => 'Amazon'],
                ['image' => 'clients/sharjah-municipality.png', 'alt' => 'Sharjah Municipality'],
                ['image' => 'clients/rta.png', 'alt' => 'RTA'],
                ['image' => 'clients/dubai-health-authority.png', 'alt' => 'Dubai Health Authority'],
                ['image' => 'clients/emirates.png', 'alt' => 'Emirates'],
                ['image' => 'clients/etisalat.png', 'alt' => 'Etisalat'],
                ['image' => 'clients/du.png', 'alt' => 'du'],
                ['image' => 'clients/botim.png', 'alt' => 'Botim'],
                ['image' => 'clients/isnaad.png', 'alt' => 'Isnaad'],
                ['image' => 'clients/imdaad.png', 'alt' => 'Imdaad'],
                ['image' => 'clients/arabyads.jpg', 'alt' => 'Arabyads'],
                ['image' => 'clients/fcm.png', 'alt' => 'FCM'],
            ],
        ]],

        ['reviews', 'reviews', []],

        ['cta', 'cta', [
            'eyebrow' => "- Let's create something",
            'heading' => 'Book Our Photography Services today',
            'text' => 'Anywhere in Dubai, Abu Dhabi, or across the UAE',
        ]],
    ],
];
