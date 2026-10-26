<?php

// Body sections of /fashion-photography-in-uae, moved out of resources/views/fashion-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Fashion photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/IMG_94671-1.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Editorial-quality fashion photography for UAE designers, brands, e-commerce stores, and models — from studio lookbooks to on-location campaigns across all seven Emirates.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Shoot type',
                    'name' => 'shoot_type',
                    'options' => ['Fashion portraits', 'E-commerce', 'Lookbook or campaign', 'Model portfolio'],
                ],
                [
                    'label' => 'Where',
                    'name' => 'setting',
                    'options' => ['Our Dubai studio', 'On location'],
                ],
            ],
            'venue_placeholder' => 'e.g. our Dubai studio, desert, hotel',
            'guests_label' => 'How many looks or outfits?',
            'guests_options' => ['1 to 5', '6 to 15', '16 to 50', 'Over 50'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '48-hour',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => 'All 7 Emirates',
                    'text' => 'Studio and on-location shoots',
                ],
                [
                    'title' => 'Since 2014',
                    'text' => 'Licensed and insured',
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
            'text' => 'Our studio is based in Dubai. Whether you’re a designer in Abu Dhabi, a boutique in Sharjah, or an e-commerce brand anywhere in the Emirates, our team travels to meet your production needs on location or welcomes you to our Dubai studio.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => ['Fashion portraits', 'Lookbooks', 'Campaigns', 'E-commerce', 'Menswear', 'Flat-lay', 'Model portfolios', 'Editorial', 'Retouching', 'Boutique labels'],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/MANI9830-2copy.jpg',
            'heading' => 'Serving the UAE’s Fashion Landscape',
            'paragraphs' => [
                'We’ve been at this in the UAE for over a decade now, and one thing’s become pretty clear in that time. A fashion client doesn’t just want somebody who turns up with a camera. They want technical expertise, sure, but they also want genuine creative direction, someone who’ll act as a full production partner and not disappear the moment the shoot wraps.',
                'On paper, we’re a fully licensed and insured fashion photography company. In practice, that means a bilingual Arabic and English crew who’ll work with you in Dubai, Abu Dhabi, or anywhere else across all seven Emirates.',
                'The fashion photography studio has everything you’d expect: professional lighting, plenty of backdrops, and post-production capabilities in-house. Behind all that, there’s a dedicated team of photographers, stylists, retouchers, and production specialists, and they all run through one accountable process. You won’t find yourself chasing a bunch of scattered freelancers who’ve never worked together before. That’s really how we’ve earned trust with designers, models, and fashion brands, by keeping the quality consistent, talking clearly, and getting work back fast without cutting corners on detail.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Fashion photography for every format & purpose',
            'tabs' => [
                [
                    'icon' => 'camera-retro',
                    'label' => 'Fashion portrait photography',
                    'image' => '2026/07/IMGL0232-1-e1784100989419-781x1024.webp',
                    'alt' => 'Fashion photography in UAE',
                    'heading' => 'Fashion portrait photography',
                    'body' => '<p>This is the part where we get to play a little. We take studio lighting, add some proper creative direction, and end up with striking portraits that have that polished, editorial-quality feel. Models put them in their books, brands use them for campaigns, and, to be fair, they work for both.</p>',
                    'button' => 'Quote my portraits',
                ],
                [
                    'icon' => 'building',
                    'label' => 'Studio fashion photography',
                    'image' => '2026/07/IMG_8728-1-e1784101033508-698x1024.webp',
                    'alt' => 'Fashion photography in UAE',
                    'heading' => 'Studio fashion photography',
                    'body' => '<p>What we love about the studio is that we’re in charge of everything: the lighting, the backdrops, the styling, even how a sleeve hangs. That’s why it’s our first pick for clean, high-impact visuals, the kind that end up in lookbooks, catalogues or a brand campaign.</p>',
                    'button' => 'Quote my studio shoot',
                ],
                [
                    'icon' => 'users',
                    'label' => 'Men’s fashion photography',
                    'image' => '2026/07/Mens-fashion-photography-e1784101586139.webp',
                    'alt' => 'Fashion photography in UAE',
                    'heading' => 'Men’s fashion photography',
                    'body' => '<p>Menswear is a different game. There’s less drama to it and a lot more focus on the cut, the texture and how the fit sits across the shoulders. We keep the pictures sharp and confident while still looking natural, whether that’s a tailored suit for a lookbook or a bit of streetwear for a brand’s next drop.</p>',
                    'button' => 'Quote my menswear shoot',
                ],
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Fashion e-commerce photography',
                    'image' => '2026/07/Fashion-e-commerce-photography-1024x683.webp',
                    'alt' => 'Fashion photography in UAE',
                    'heading' => 'Fashion e-commerce photography',
                    'body' => '<p>Anyone buying clothes online wants to know exactly what’s going to arrive. So the lighting stays consistent from one piece to the next, the colour accuracy is true to life, and the backgrounds are kept clean. Those platform-ready images help online clothing stores boost conversions, and they cut down on returns as well.</p><p>We shoot both on-model and flat-lay fashion photography, whichever suits your catalogue best, and often a mix of the two. We also produce high-quality visuals for cosmetics, skincare, <a href="%%BASE%%/jewelry-photography-services-in-uae">jewelry,</a> and personal care products too, all shot to meet e-commerce standards.</p>',
                    'button' => 'Quote my e-commerce shoot',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Apparel & fashion product photography',
                    'image' => '2026/07/Apparel-fashion-product-photography-1024x682.webp',
                    'alt' => 'Fashion photography in UAE',
                    'heading' => 'Apparel & fashion product photography',
                    'body' => '<p>Here the clothes get the spotlight and nothing else does. We shoot with professional precision to bring out the fabric, the fit and the finish, so your collection looks market-ready whether it’s headed for the website or for print.</p>',
                    'button' => 'Quote my apparel shoot',
                ],
                [
                    'icon' => 'bolt',
                    'label' => 'Fashion photo retouching',
                    'image' => '2026/07/Fashion-photo-retouching-683x1024.webp',
                    'alt' => 'Fashion photography in UAE',
                    'heading' => 'Fashion photo retouching',
                    'body' => '<p>We clean up skin, colour and detail, but we stop at a natural finish. Nobody wants models who look like they’re made of plastic. Every image meets the polished standards that modern fashion publishing expects, without us going overboard on it.</p>',
                    'button' => 'Quote my retouching',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent fashion shoots',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Campaigns', 'E-commerce', 'Portraits'],
            'images' => [
                [
                    'image' => '2026/07/Premium-fashion-photography-for-UAE-brands-designers.jpg',
                    'alt' => 'Premium fashion photography for UAE brands and designers',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Fashion-e-commerce-photography-built-for-online-stores.jpg',
                    'alt' => 'Fashion e-commerce photography built for online stores',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Lookbooks-campaigns.jpg',
                    'alt' => 'Lookbook and campaign fashion photography in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/E-commerce-marketplace-listings.jpg',
                    'alt' => 'Fashion photography for e-commerce and marketplace listings',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/IMGL0232-1-e1784100989419.jpg',
                    'alt' => 'Fashion photography in UAE',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Feed-story-content.jpg',
                    'alt' => 'Fashion feed and story content for social media',
                    'filter' => 0,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Model portfolio photography for new & working models',
            'body' => '<p>Whether you’re just starting out or building on an established career, a strong portfolio is your most valuable tool in the modeling industry. As trusted model portfolio photographers in Dubai, we create versatile, high-quality images that showcase your range, from beauty close-ups and full-body <a href="%%BASE%%/portrait-photography-in-uae">fashion portraits</a> to striking <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress shots</a> across the UAE’s deserts that adds movement, elegance, and editorial appeal to your portfolio.</p><p>Our modeling portfolio photographers work closely with you to plan looks, poses, and styling that highlight your individuality while meeting the standards agencies and casting directors expect.</p><p class="svc-feature-label">Fashion imagery across every channel:</p><ul><li>E-commerce and marketplace listings for your website, Amazon, Noon, and Instagram</li><li>Agency-ready model portfolios</li><li>Feed and story content for social media</li><li>Editorial magazine features</li><li>Lookbooks and campaigns for collection launches</li></ul>',
            'button' => 'Quote my portfolio',
            'photos' => [
                [
                    'image' => '2026/07/MANI9728-1.jpg',
                    'label' => 'Model portfolios',
                ],
                [
                    'image' => '2026/07/Model-portfolios.jpg',
                    'label' => 'Agency-ready images',
                ],
                [
                    'image' => '2026/07/Magazine-features.4.jpg',
                    'label' => 'Editorial',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Fashion Photography Across the UAE',
            'text' => 'It doesn’t matter much if it’s studio fashion photography or on-location shoots out in the desert or a hotel lobby. Each project across the UAE gets the same proven expertise, authoritative craftsmanship, and reliable delivery from us.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Our fashion photography studio, and on location across the city'],
                ['Abu Dhabi', 'Designers and boutique labels, on location'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Fashion Photography Process',
            'steps' => [
                '<p>We understand your brand, goals, and vision — discussing styling, mood boards, and shot lists to align on creative direction.</p>',
                '<p>Our team coordinates hair, makeup, wardrobe, and location or studio setup so every detail is planned before the shoot begins.</p>',
                '<p>Professional lighting and precision equipment used to capture your fashion portraits, products, or campaign imagery with creativity and expertise.</p>',
                '<p>Every selected image professionally retouched and delivered as polished, high-resolution files ready for website, social, or print campaigns.</p>',
            ],
            'note' => '<p>Running an online store? See our <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce brand photography</a> and <a href="%%BASE%%/product-photography-services-in-uae">product shots</a>.</p>',
            'button' => 'Start with a consultation',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'What does a fashion photography service include?',
                    'answer' => '<p>Our fashion photography services cover fashion portraits, studio and on-location shoots, e-commerce product photography, lookbooks, campaign imagery, and professional photo retouching — all tailored to your brand’s needs.</p>',
                ],
                [
                    'question' => 'Do you offer fashion photography in Dubai and Abu Dhabi?',
                    'answer' => '<p>Yes. We are a fashion photography studio based in Dubai, serving clients across Abu Dhabi and the wider UAE, working from our studio or travelling to your preferred location.</p>',
                ],
                [
                    'question' => 'Can you handle fashion e-commerce photography for online stores?',
                    'answer' => '<p>Yes. Our fashion e-commerce photography is designed for online clothing brands, with consistent lighting, accurate colour, and clean presentation to boost conversions across your listings.</p>',
                ],
                [
                    'question' => 'Do you provide model portfolio photography for new models?',
                    'answer' => '<p>Yes. Our model portfolio photographers work with both new and experienced models, creating versatile portfolios that meet agency and casting director standards.</p>',
                ],
                [
                    'question' => 'Is photo retouching included in your packages?',
                    'answer' => '<p>Our fashion photo retouching services are available as part of most packages, ensuring every image has a polished, natural, publication-ready finish.</p>',
                ],
                [
                    'question' => 'How do I book a fashion photoshoot?',
                    'answer' => '<p>Contact our team with your project details — we’ll schedule a consultation to discuss styling, location, and creative direction before your shoot begins.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your fashion photography shoot today',
            'text' => 'Editorial-quality fashion photography for brands, designers, and models anywhere in Dubai and across the UAE.',
        ]],
    ],
];
