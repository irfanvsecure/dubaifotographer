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
                    <a class="social-facebook" href="https://www.facebook.com/100050331586482/posts/pfbid02n93L9KCoVPckPRZYq1q33i5DnjS1Jk1FRAiQCV5HPmcFRHCatDVXBpK5uYmToaWYl/?" target="_blank" rel="noopener" aria-label="Facebook">@include('partials.icon', ['name' => 'facebook'])</a>
                    <a class="social-instagram" href="https://www.instagram.com/dubaifotographer_event/reels/" target="_blank" rel="noopener" aria-label="Instagram">@include('partials.icon', ['name' => 'instagram'])</a>
                    <a class="social-youtube" href="https://www.youtube.com/@maniwapzstudio" target="_blank" rel="noopener" aria-label="Youtube">@include('partials.icon', ['name' => 'youtube'])</a>
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
                <div class="footer-contact">
                    <a class="contact-icon" href="mailto:info@dubaifotographer.com" aria-label="Our Email">@include('partials.icon', ['name' => 'envelope'])</a>
                    <div>
                        <p class="contact-title"><a href="mailto:info@dubaifotographer.com">Our Email</a></p>
                        <p class="contact-text">info@dubaifotographer.com</p>
                    </div>
                </div>
                <div class="footer-contact">
                    <a class="contact-icon" href="tel:+971522946276" aria-label="Book Us">@include('partials.icon', ['name' => 'phone-alt'])</a>
                    <div>
                        <p class="contact-title"><a href="tel:+971522946276">Book Us</a></p>
                        <p class="contact-text">+971 52 294 6276 <br>call now</p>
                    </div>
                </div>
                <div class="footer-contact">
                    <a class="contact-icon" href="https://maps.app.goo.gl/W4PeNmG4U9xjLbFs8" aria-label="Location">@include('partials.icon', ['name' => 'map-marker-alt'])</a>
                    <div>
                        <p class="contact-title"><a href="https://maps.app.goo.gl/W4PeNmG4U9xjLbFs8">Location</a></p>
                        <p class="contact-text">Business Bay - Dubai Design District - Dubai - United Arab Emirates</p>
                    </div>
                </div>
            </div>
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
