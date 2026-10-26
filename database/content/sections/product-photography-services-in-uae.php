<?php

// Body sections of /product-photography-services-in-uae, moved out of resources/views/product-photography-services-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Product photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Product-photography-services-in-Dubai3.jpg',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>White background packshots, 360° spin photography, lifestyle imagery, and macro shots — built for Amazon, Noon, Shopify, and brand websites.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'Shoot type',
                    'name' => 'shoot_type',
                    'options' => ['White background', 'Lifestyle', '360° spin', 'Macro detail'],
                ],
                [
                    'label' => 'Where',
                    'name' => 'location',
                    'options' => ['In our studio', 'On location'],
                ],
            ],
            'venue_placeholder' => 'Our studio, or your address',
            'guests_label' => 'Roughly how many products?',
            'guests_options' => ['1 to 10', '10 to 50', '50 to 200', 'Over 200'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => '10+ years',
                    'text' => 'Of product photography',
                ],
                [
                    'title' => '7 Emirates',
                    'text' => 'Covered by our team',
                ],
                [
                    'title' => '48h turnaround',
                    'text' => 'On selected packages',
                ],
                [
                    'title' => 'Licensed & insured',
                    'text' => 'Shot for Amazon, Etisalat and du',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'Studio shoots in Dubai Design District, or our mobile team comes to you anywhere across the UAE. Same studio-quality standard, same team, regardless of location.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Food & beverage',
                'Electronics & gadgets',
                'Cosmetics & beauty',
                'Jewellery & luxury accessories',
                'Fashion & apparel',
                'Amazon & Noon sellers',
                'Health & wellness',
                'Home décor & furniture',
                'Shopify',
                'WooCommerce',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/07/ffghbgk-1024x682.webp',
            'heading' => 'Why choose Dubai Fotographer?',
            'paragraphs' => [
                'We’re not a freelancer with a camera, we’re a licensed, insured company delivering professional product photography services across the UAE since 2014. Led by founder Abdul Rehman, our in-house team of photographers, editors, and production specialists ensures every ecommerce photography project stays consistent from planning to final delivery.',
                'We’ve shot for brands like Amazon, Etisalat, and du, and our fully equipped studio in Dubai Design District handles everything from white-background packshots to <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 spin product shoots</a>, with mobile teams available across all seven Emirates. With a 48-hour turnaround on selected packages and a single point of contact managing your entire shoot, our professional product photographers give your brand the expertise, accountability, and consistency it deserves.',
                '“Great product photos don’t happen by accident — they come from the right lighting, the right eye for detail, and a genuine understanding of what makes a product sell online.” <strong>– Abdul Rehman</strong>',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Our product photography services',
            'tabs' => [
                [
                    'icon' => 'product-hunt',
                    'label' => 'Professional product photography',
                    'image' => '2026/07/Professional-product-photography-1024x682.webp',
                    'alt' => 'Professional product photography',
                    'heading' => 'Professional product photography',
                    'body' => '<p>Capture clean, high-resolution product images with accurate colors, balanced lighting, and sharp details, ideal for ecommerce websites, catalogs, brochures, and online marketplaces.</p><p>We deliver product images that are high-resolution, professionally edited, and ready to be used on online stores, in digital catalogs, for <a href="%%BASE%%/influencer-photography-in-uae">social media</a>, and in various marketing materials.</p>',
                    'button' => 'Quote my packshots',
                ],
                [
                    'icon' => 'dot-circle',
                    'label' => '360° product photography',
                    'image' => '2026/07/360°-product-photography-1-1024x676.webp',
                    'alt' => '360° product photography',
                    'heading' => '360° product photography',
                    'body' => '<p>Showcase every angle of your products with interactive 360° spin photography, helping customers explore items more confidently and improving engagement on your website.</p>',
                    'button' => 'Quote my 360° spin',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Lifestyle product photography',
                    'image' => '2026/07/Lifestyle-product-photography-681x1024.webp',
                    'alt' => 'Lifestyle product photography',
                    'heading' => 'Lifestyle product photography',
                    'body' => '<p>Present your products in real-life settings that connect with your audience, strengthen your brand identity, and demonstrate how each item fits into everyday use.</p><p>We do many types of shots, from simple white background packshots to more <a href="%%BASE%%/lifestyle-photography-in-uae">creative lifestyle photography</a>. From clean product imagery to subtle <a href="%%BASE%%/fashion-photography-in-uae">fashion photography</a> that brings your collection to life, every image reflects the right style, composition, and attention to detail while staying true to your brand.</p>',
                    'button' => 'Quote my lifestyle shoot',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Macro product photography',
                    'image' => '2026/07/Macro-product-photography-682x1024.webp',
                    'alt' => 'Macro product photography',
                    'heading' => 'Macro product photography',
                    'body' => '<p>Highlight fine textures, intricate craftsmanship, and small product details through close-up macro photography, making premium and delicate items stand out to potential buyers.</p><p>From everyday retail product shoots to premium <a href="%%BASE%%/jewelry-photography-services-in-uae">jewelry photography</a>, every project is approached with the same focus on quality, consistency, and attention to detail.</p>',
                    'button' => 'Quote my macro shoot',
                ],
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Ecommerce & marketplace photography',
                    'image' => '2026/07/Ecommerce-marketplace-photography-1024x682.webp',
                    'alt' => 'Ecommerce and marketplace photography',
                    'heading' => 'Ecommerce & marketplace photography',
                    'body' => '<p>Receive marketplace-ready images optimized for Amazon, Noon, Shopify, and other ecommerce platforms, ensuring your listings meet platform requirements and look professionally presented.</p><p>Whether you sell on your own website or across multiple marketplaces, we produce images that meet every platform’s technical requirements while maintaining your brand’s visual identity.</p>',
                    'button' => 'Quote my listings',
                ],
                [
                    'icon' => 'check-circle',
                    'label' => 'Product image editing & retouching',
                    'image' => '2026/07/Product-image-editing-retouching-682x1024.webp',
                    'alt' => 'Product image editing and retouching',
                    'heading' => 'Product image editing & retouching',
                    'body' => '<p>Every photograph is professionally edited with color correction, background removal, dust cleanup, and retouching to deliver polished, consistent images ready for immediate use.</p>',
                    'button' => 'Quote my editing',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your products and platforms and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent product shoots',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Packshots', 'Lifestyle', 'Detail'],
            'images' => [
                [
                    'image' => '2026/07/phototune.ai_1784191515.png',
                    'alt' => 'White background product packshot',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/Lifestyle-brand-imagery.jpg',
                    'alt' => 'Lifestyle and brand product imagery',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/macro.png',
                    'alt' => 'Macro product detail photography',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Lifesdtyle-brand-imagery.jpg',
                    'alt' => 'Packaging product photography',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/phototune.ai_1784192561-745x1024.webp',
                    'full' => '2026/07/phototune.ai_1784192561.webp',
                    'alt' => 'Product photography in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/06/jewelry-photography-1024x576.webp',
                    'full' => '2026/06/jewelry-photography.webp',
                    'alt' => 'Jewelry Photography Services in UAE',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Product photography studio in Dubai, serving all of the UAE',
            'body' => '<p>Our product photography studio in Dubai is built for brands that need consistent, high-quality <a href="%%BASE%%/services">photography services</a> at scale, fully equipped with professional lighting, backdrops, and equipment to handle everything from single products to full catalog shoots.</p><p>Based in Dubai Design District, we welcome businesses in-studio for controlled, precision shoots, or we bring our production team on-location anywhere across the UAE – Abu Dhabi, Sharjah, and beyond.</p><p>Whether you’re an <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce brand</a> in Dubai needing white-background pack shots, a cosmetics brand in Abu Dhabi wanting a detailed macro <a href="%%BASE%%/beauty-photography-in-uae">beauty photoshoot</a>, or a retailer in Sharjah looking for lifestyle product photography, our studio setup and mobile teams adapt to your product and location.</p><p class="svc-feature-label">Images built for every sales channel:</p><ul><li>Amazon and Noon</li><li>Shopify and WooCommerce</li><li>Brand websites and social media</li></ul>',
            'button' => 'Book a studio session',
            'photos' => [
                [
                    'image' => '2026/07/Product-image-effffditing-retouching.jpg',
                    'label' => 'Studio',
                ],
                [
                    'image' => '2026/07/phototune.ai_1784185165-683x1024.webp',
                    'label' => '360° spin',
                ],
                [
                    'image' => '2026/07/Ecommerce-product-photography-for-brands-businesses.png',
                    'label' => 'Ecommerce',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Product photography across the UAE',
            'text' => 'No matter where you’re based in the UAE, you get the same studio-quality standard, backed by a team that understands local marketplaces and shopper expectations.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Our studio in Dubai Design District, or on-location'],
                ['Abu Dhabi', 'On-location shoots, from macro beauty to catalogue'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our product photography process',
            'steps' => [
                '<p>Consultation and planning: we discuss your products, branding, image requirements, and intended platforms to create a shoot plan tailored to your business objectives.</p>',
                '<p>Styling and photography: our team carefully prepares each product and captures high-quality images using professional lighting, studio equipment, and proven techniques.</p>',
                '<p>Editing and retouching: every image undergoes expert retouching, color correction, background refinement, and quality checks.</p>',
                '<p>Final delivery: your edited images arrive in the required formats, optimized for ecommerce websites, marketplaces, social media, print, and marketing campaigns.</p>',
            ],
            'note' => '<p>Any catalogue size, from a single hero product to hundreds of SKUs. Quotes are typically sent within a few hours during business hours.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => 'What types of products do you photograph?',
                    'answer' => '<p>We photograph a wide variety of products, including fashion apparel, jewellery, cosmetics, skincare, electronics, home décor, food items, accessories, and other consumer goods for ecommerce, catalogues, and advertising.</p>',
                ],
                [
                    'question' => 'Do you offer 360° product photography?',
                    'answer' => '<p>Yes. We provide 360° product photography that allows customers to view your products from every angle, making your online listings more interactive and engaging.</p>',
                ],
                [
                    'question' => 'How long does a product photography project take?',
                    'answer' => '<p>Project timelines depend on the number of products, shoot style, and editing requirements. We offer a 48-hour turnaround on selected packages and provide a clear timeline before the project begins.</p>',
                ],
                [
                    'question' => 'Do you provide photo editing and retouching?',
                    'answer' => '<p>Yes. Every image includes professional editing — colour correction, background removal, dust cleanup, and detailed retouching to ensure a polished final result.</p>',
                ],
                [
                    'question' => 'Do you serve businesses outside Dubai?',
                    'answer' => '<p>Yes. While our product photography studio is based in Dubai, we work with businesses across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p>',
                ],
                [
                    'question' => 'Can you create images for Amazon and other ecommerce platforms?',
                    'answer' => '<p>Absolutely. We produce marketplace-ready images that meet the requirements of Amazon, Noon, Shopify, and other ecommerce platforms, helping your listings look professional and compliant.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book your product photography session today',
            'text' => 'Studio or on-location product photography anywhere in Dubai and across the UAE. Tell us about your products and platforms and we’ll get back to you with availability and pricing, usually within a few hours.',
        ]],
    ],
];
