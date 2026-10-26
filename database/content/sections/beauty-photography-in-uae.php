<?php

// Body sections of /beauty-photography-in-uae, moved out of resources/views/beauty-photography-in-uae.blade.php.
// Loaded once by `php artisan content:sections`; after that the page_sections rows are the
// source and are edited through MCP.

return [
    'h1' => 'Beauty photography services in Dubai, serving all of the UAE',
    'sections' => [
        ['hero', 'svc_hero', [
            'image' => '2026/07/Beauty-photography-services-in-Dubai.png',
            'exif' => '1/250 f2.8 ISO 3200',
            'text' => '<p>Professional beauty photography for brands, cosmetic companies, salons, clinics, and independent beauty professionals — product, model, hair, and makeup imagery across the UAE.</p>',
            'whatsapp' => 'https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20',
            'form_title' => 'Get a quote for your beauty shoot',
            'form_text' => 'Three quick steps. We reply the same day.',
            'form_note' => 'You get a written quote and a shot list within one working day.',
            'questions' => [
                [
                    'label' => 'What do you need?',
                    'name' => 'shoot_type',
                    'options' => ['Product photography', 'Model photography', 'Product and model', 'Hair or makeup'],
                ],
                [
                    'label' => 'Your business',
                    'name' => 'business',
                    'options' => ['Brand or e-commerce', 'Salon or clinic', 'Makeup or hair artist', 'Agency'],
                ],
            ],
            'venue_placeholder' => 'e.g. your salon, clinic or our Dubai studio',
            'guests_label' => 'How many products or looks?',
            'guests_options' => ['1 to 5', '6 to 20', '21 to 50', 'Over 50'],
        ]],

        ['facts', 'svc_facts', [
            'items' => [
                [
                    'title' => 'Licensed and insured',
                    'text' => 'Production company',
                ],
                [
                    'title' => 'Arabic and English',
                    'text' => 'Bilingual crew, female photographers',
                ],
                [
                    'title' => '48 hours',
                    'text' => 'Turnaround available',
                ],
                [
                    'title' => '5.0',
                    'text' => 'Average client rating',
                ],
            ],
        ]],

        ['coverage', 'svc_coverage', [
            'badge' => 'Serving all seven Emirates',
            'heading' => 'Based in Dubai, serving all of the UAE',
            'text' => 'Whether your studio, salon, or brand is based in Dubai or elsewhere in the UAE, our team travels to your preferred location with full professional equipment, or welcomes you to our Dubai studio for a controlled indoor shoot.',
        ]],

        ['keywords', 'svc_marquee', [
            'items' => [
                'Cosmetic & skincare brands',
                'Beauty salons',
                'Hair salons',
                'Aesthetic clinics',
                'Makeup artists',
                'Wellness brands',
                'Independent professionals',
                'Beauty e-commerce',
                'Product launches',
                'Campaign imagery',
            ],
        ]],

        ['about', 'svc_about', [
            'image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg',
            'founder_caption' => true,
            'heading' => 'Why Choose Dubai Fotographer?',
            'paragraphs' => [
                'Dubai Fotographer provides beauty photography services for beauty brands, cosmetic companies, salons, aesthetic clinics and independent professionals, from a big skincare label to a nail artist working out of a home studio. Since 2014, our licensed and insured team has created high-quality commercial imagery tailored to your products, your services, and your marketing goals. Our crew is bilingual in Arabic and English, and that includes <a href="%%BASE%%/female-photographers-in-uae">female photographers</a>, so we can support diverse client requirements, whether that’s a women-only salon or a clinic that prefers a female crew for treatment shots.',
                'A vegan skincare start-up and a luxury fragrance house don’t want the same photos. We worked that out pretty early on. Every beauty brand has its own identity, its own audience, and its own objectives. So we plan each project around your specific requirements, not some standard photography style we hand out to everybody.',
                'Our clients run from independent beauty professionals, a lash tech building up her Instagram, a brow artist with a single chair, to established cosmetic brands sitting on shelves in every mall. Whoever you are, the photography should reflect the quality of your products and services, and stay practical for long-term commercial use, so you aren’t stuck reshooting every three months.',
            ],
        ]],

        ['services', 'svc_tabs', [
            'heading' => 'Beauty Product & Model Photography',
            'tabs' => [
                [
                    'icon' => 'shopping-bag',
                    'label' => 'Beauty product photography',
                    'image' => '2026/07/packaging-1024x682.webp',
                    'alt' => 'Beauty product and packaging photography in Dubai',
                    'heading' => 'Beauty product photography',
                    'body' => '<p>Stick a jar of moisturiser on a marble slab and fine; it looks nice enough. Now show somebody’s skin glowing a week after they started using it, and that’s when people reach for their wallets. Beauty product photography is about the packaging, the textures, and the tiny product details: that little swirl on top of a cream, the shimmer in a highlighter when you tilt it towards the window.</p><p>A lot of businesses just want clean cosmetic photography for their websites and online stores. White background. Sharp edges. Colours that look like the real product when it turns up in the post.</p>',
                    'button' => 'Quote my products',
                ],
                [
                    'icon' => 'star',
                    'label' => 'Model, hair & makeup',
                    'image' => '2026/07/Beauty-product-model-photographyjpg.jpg',
                    'alt' => 'Beauty model photography in Dubai',
                    'heading' => 'Model, hair & makeup',
                    'body' => '<p><a href="%%BASE%%/fashion-photography-in-uae">Model photography</a> has another job entirely. It shows customers the results, and the experience they’re buying into with the brand. Others get more out of pictures with professional models, makeup artists, or hairstylists in them. Take haircare brands. For them we’ll show off colour, texture, styling and movement, a fresh blowout swinging out as someone turns their head, so people can see how good the products are and how skilled the salon is at the same time.</p><p>There’s technical precision in all of it, plus some creative direction, and the <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a> that comes out lives up to what modern beauty brands expect.</p>',
                    'button' => 'Quote my model shoot',
                ],
                [
                    'icon' => 'grin-stars',
                    'label' => 'Campaigns & launches',
                    'image' => '2026/07/Advertising-social-campaigns502.jpg',
                    'alt' => 'Beauty advertising and social campaign photography',
                    'heading' => 'Campaigns & launches',
                    'body' => '<p>People scroll past a hundred lipsticks a day. The one they stop on usually has a better photo, not a better formula. A customer might find your brand on <a href="%%BASE%%/influencer-photography-in-uae">social media</a>, land on your website, or catch a new product launch in their feed. Wherever it happens, professional beauty photography is what gets the quality, style, and identity behind your business across in that first second.</p><p>Commercial campaigns. <a href="%%BASE%%/product-photography-services-in-uae">Product launches</a>. A portfolio update for a makeup artist. Branded content for the next three months of Instagram. Whatever it is, we create professional photographs that help beauty businesses present themselves with confidence.</p>',
                    'button' => 'Quote my campaign',
                ],
                [
                    'icon' => 'camera-retro',
                    'label' => 'Styles for your brand',
                    'image' => '2026/07/Beauty-photography-services-in-Dubai.jpg',
                    'alt' => 'Beauty photography services in Dubai',
                    'heading' => 'Styles for your brand',
                    'body' => '<p>Whatever your positioning, the photography should reinforce it in every image, from product shots to campaign visuals.</p><ul><li><strong>Luxurious and premium:</strong> rich textures, dark moody tones, and precise detail photography communicating exclusivity and quality for high-end beauty brands.</li><li><strong>Natural and wellness:</strong> soft light, clean backgrounds, and ingredient-focused imagery for brands positioned around natural, organic, or wellness-led beauty.</li><li><strong>Minimalist and modern:</strong> clean compositions, controlled palettes, and precise product photography for contemporary, trend-led beauty and cosmetic brands.</li></ul>',
                    'button' => 'Quote my brand shoot',
                ],
            ],
        ]],

        ['band', 'svc_band', [
            'text' => 'Tell us about your brand and we’ll match you with the right professional, usually getting back to you within a few hours.',
        ]],

        ['gallery', 'svc_gallery', [
            'title' => 'Recent beauty photography',
            'text' => 'Tap a photo to see it larger.',
            'filters' => ['Models', 'Products', 'Campaigns'],
            'images' => [
                [
                    'image' => '2026/07/Beauty-product-model-photographyjpg.jpg',
                    'alt' => 'Beauty model photography in Dubai',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/web.jpg',
                    'alt' => 'Beauty portrait for a website and online store',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/editorial.jpg',
                    'alt' => 'Beauty editorial photography in the UAE',
                    'filter' => 0,
                ],
                [
                    'image' => '2026/07/packaging-1024x682.webp',
                    'full' => '2026/07/packaging.jpg',
                    'alt' => 'Beauty product and packaging photography in Dubai',
                    'filter' => 1,
                ],
                [
                    'image' => '2026/07/Advertising-social-campaigns502.jpg',
                    'alt' => 'Beauty advertising and social campaign photography',
                    'filter' => 2,
                ],
                [
                    'image' => '2026/07/Beauty-photography-services-in-Dubai.jpg',
                    'alt' => 'Beauty photography services in Dubai',
                    'filter' => 2,
                ],
            ],
        ]],

        ['feature', 'svc_feature', [
            'heading' => 'Beauty Photography for Every Stage of Your Marketing',
            'body' => '<p>Consistent product and lifestyle imagery across your entire website and e-commerce product pages, same visual standard throughout. Campaign-ready visuals for paid social, influencer content, digital advertising, and seasonal promotions.</p><p>Careful planning goes into it, along with professional lighting, creative direction, and consistent post-production. What you end up with is imagery that helps your business present itself with confidence across every platform.</p><p class="svc-feature-label">Where your photos work:</p><ul><li>Websites and online stores</li><li>Advertising and social campaigns</li><li>Packaging and product detail imagery</li><li>Brochures, print and digital</li><li>Press and editorial</li></ul>',
            'button' => 'Tell us where the photos will run',
            'photos' => [
                [
                    'image' => '2026/07/web.jpg',
                    'label' => 'Online stores',
                ],
                [
                    'image' => '2026/07/broucher.jpg',
                    'label' => 'Brochures',
                ],
                [
                    'image' => '2026/07/editorial.jpg',
                    'label' => 'Press and editorial',
                ],
            ],
        ]],

        ['areas', 'svc_areas', [
            'heading' => 'Beauty Photography Across the UAE',
            'text' => 'Studio sessions in Dubai or on-location anywhere across the UAE.',
            'columns' => ['Area', 'Where we usually work'],
            'rows' => [
                ['Dubai', 'Our Dubai studio, or your salon, clinic or studio'],
                ['Abu Dhabi', 'On-location shoots with full professional equipment'],
                ['Northern emirates', 'Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah'],
            ],
        ]],

        ['steps', 'svc_steps', [
            'heading' => 'Our Beauty Photography Process',
            'steps' => [
                '<p>We discuss your brand, campaign objectives, and the platforms where the photography will be used.</p>',
                '<p>We plan the visual style, lighting approach, and overall aesthetic, and co-ordinate products, models, styling, and locations or studio setup before shoot day.</p>',
                '<p>Professional product and beauty imagery captured with consistent lighting and creative direction throughout.</p>',
                '<p>High-resolution photographs professionally edited and delivered, ready for immediate commercial use.</p>',
            ],
            'note' => '<p>Prefer a female crew for treatment shots? Our <a href="%%BASE%%/female-photographers-in-uae">female photographers</a> can cover your session.</p>',
            'button' => 'Start with step 1',
        ]],

        ['faq', 'svc_faq', [
            'heading' => 'Frequently Asked Questions',
            'items' => [
                [
                    'question' => '1. What types of businesses do you provide beauty photography for?',
                    'answer' => '<p>We work with cosmetic brands, skincare companies, beauty salons, hair salons, makeup artists, beauty clinics, wellness brands, and other businesses within the beauty industry.</p>',
                ],
                [
                    'question' => '2. Do you photograph both beauty products and models?',
                    'answer' => '<p>Yes. We provide both beauty product photography and model-based photography, depending on your campaign objectives and marketing requirements.</p>',
                ],
                [
                    'question' => '3. Can the photographs be used for e-commerce and advertising?',
                    'answer' => '<p>Yes. The final images are suitable for websites, online stores, advertising campaigns, social media, catalogues, brochures, and other commercial marketing materials.</p>',
                ],
                [
                    'question' => '4. Do you provide beauty photography services across the UAE?',
                    'answer' => '<p>Yes. We provide beauty photography throughout Dubai and all seven Emirates for businesses, agencies, and independent beauty professionals.</p>',
                ],
                [
                    'question' => '5. How are the final photographs delivered?',
                    'answer' => '<p>All selected images are professionally edited and delivered in high resolution, making them ready for immediate use across both digital and print platforms.</p>',
                ],
            ],
            'box_title' => 'Still have a question?',
            'box_text' => 'Message the team on WhatsApp. The same person stays with you from the first message to the last file.',
        ]],

        ['book', 'svc_book', [
            'heading' => 'Book Your Beauty Photography Session Today',
            'text' => 'Product, model, cosmetic, and hair photography for beauty businesses anywhere in Dubai and across the UAE.',
        ]],
    ],
];
