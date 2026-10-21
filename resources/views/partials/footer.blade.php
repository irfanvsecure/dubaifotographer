@php
    $quickLinks = [
        ['Home', '/'],
        ['About Us', '/about-us'],
        ['Portfolio', '/portfolio'],
        ['Contact Us', '/contact-us'],
        ['Our Blogs', '/our-blog'],
        ['BOOKING', '/booking-form'],
    ];
    $serviceLinks = [
        ['Drone Photography', '/cinematic-drone-photography-videography-uae-compliant-licensed'],
        ['Real Estate Photography', '/real-estate-photography-videography-services-in-uae'],
        ['360° Photography', '/360-video-booth-experience-for-immersive-event-engagement'],
        ['Food Photography', '/luxury-food-photography-for-restaurants-hotels-and-brands'],
        ['Live Printing Photography', '/live-printing-photo-booth-for-instant-guest-keepsakes'],
        ['Multi-Camera Photography', '/multi-camera-event-recording'],
    ];
    $recentPosts = array_slice(require resource_path('data/blog-posts.php'), 0, 6);
    $policyLinks = [
        ['Privacy Policy', '/privacy-policy'],
        ['Cookie Policy', '/cookie-policy'],
        ['FAQ', '/frequently-asked-questions'],
        ['Security Policy', '/security-policy'],
        ['Support Policy', '/support-policy'],
        ['Terms of Service', '/terms-of-service'],
    ];
@endphp
<footer class="site-footer">
    {{-- Closing call to action on every page --}}
    <div class="footer-cta">
        <div class="footer-cta-inner">
            <div>
                <p class="footer-cta-title">Planning a shoot in the UAE?</p>
                <p class="footer-cta-text">Tell us the date and location. We reply the same day with availability and a clear quote.</p>
            </div>
            <div class="footer-cta-actions">
                <a class="btn" href="%%BASE%%/booking-form">Get a Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                <a class="btn footer-cta-wa" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
                <a class="footer-cta-phone" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
            </div>
        </div>
    </div>

    <div class="footer-main">
        <div class="footer-inner">
            <div class="footer-col footer-about">
                <a class="footer-logo" href="%%BASE%%/">
                    <img src="%%BASE%%/assets/images/2026/04/dubaifotographer-logo-e1782899876206-300x124.png" srcset="%%BASE%%/assets/images/2026/04/dubaifotographer-logo-e1782899876206-300x124.png 300w, %%BASE%%/assets/images/2026/04/dubaifotographer-logo-e1782899876206-768x318.png 768w" sizes="245px" width="965" height="400" alt="Dubai Fotographer">
                </a>
                <p>Dubai Fotographer is dedicated to capturing life’s most meaningful moments with creativity and elegance. From weddings to corporate events, we turn your special occasions into timeless visual stories.</p>
                <div class="footer-social">
                    <a class="social-facebook" href="https://www.facebook.com/100050331586482/" target="_blank" rel="noopener" title="Facebook">Facebook</a>
                    <a class="social-instagram" href="https://www.instagram.com/dubaifotographer_event/" target="_blank" rel="noopener" title="Instagram">Instagram</a>
                    <a class="social-youtube" href="https://www.youtube.com/@maniwapzstudio" target="_blank" rel="noopener" title="YouTube">YouTube</a>
                </div>
            </div>

            <div class="footer-col footer-links-col">
                <p class="footer-title">Quick Links</p>
                <ul class="footer-links">
                    @foreach ($quickLinks as [$label, $url])
                        <li><a href="%%BASE%%{{ $url }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-col">
                <p class="footer-title">Our Services</p>
                <ul class="footer-links">
                    @foreach ($serviceLinks as [$label, $url])
                        <li><a href="%%BASE%%{{ $url }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-col">
                <p class="footer-title">Contact Us</p>
                <a class="footer-contact" href="mailto:info@dubaifotographer.com">
                    <span class="contact-icon">@include('partials.icon', ['name' => 'envelope'])</span>
                    <span>
                        <p class="contact-title">Our Email</p>
                        <p class="contact-text">info@dubaifotographer.com</p>
                    </span>
                </a>
                <a class="footer-contact" href="tel:+971522946276">
                    <span class="contact-icon">@include('partials.icon', ['name' => 'phone-alt'])</span>
                    <span>
                        <p class="contact-title">Book Us</p>
                        <p class="contact-text">+971 52 294 6276 <br>call now</p>
                    </span>
                </a>
                <a class="footer-contact" href="https://maps.app.goo.gl/W4PeNmG4U9xjLbFs8">
                    <span class="contact-icon">@include('partials.icon', ['name' => 'map-marker-alt'])</span>
                    <span>
                        <p class="contact-title">Location</p>
                        <p class="contact-text">Business Bay - Dubai Design District - Dubai - United Arab Emirates</p>
                    </span>
                </a>
            </div>
        </div>
        <div class="footer-recent">
            <p class="footer-title">Recent posts</p>
            <ul class="footer-recent-list">
                @foreach ($recentPosts as [$slug, $image, $alt, $title])
                    <li><a href="%%BASE%%/{{ $slug }}">{{ $title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <p class="copyright">Copyright © {{ date('Y') }} dubaifotographer. All Rights Reserved by <a href="https://mait.ae" target="_blank" rel="noopener">MAIT</a>.</p>
            <ul class="footer-policies">
                @foreach ($policyLinks as [$label, $url])
                    <li><a href="%%BASE%%{{ $url }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
