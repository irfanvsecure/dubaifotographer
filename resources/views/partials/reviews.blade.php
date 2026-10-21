@php
    // Google reviews (same reviews as the live site widget): name, avatar, date (unix seconds), stars, text
    $reviews = [
        ['Muhammad Asad', 'a/ACg8ocI_sXvqLxJN5azoud3eSWWjUxWLo6Kreuk_GR3xfXG7dSnN2g=w40-h40-c-rp-mo-br100', 1774656000, 4, 'I hired this photographer and I’m impressed with the results. The quality of work, attention to detail, and creativity were all top-notch. He made the whole experience smooth and comfortable. Highly recommended!”'],
        ['Rays Global', 'a-/ALV-UjWFZc7HgNPjAo2qIddMVHgT6t6w3MBQKTl97Ru66POQMa08N3Qa9A=w40-h40-c-rp-mo-br100', 1772928000, 4, 'Very professional photography with beautiful results. I’m really happy with the photos and the service.'],
        ['Osama Abbasi', 'a-/ALV-UjVc7LCCQSNO1GEC4SfDnS7kjMad_Vd62cCvVXkl4VS_xvT8-pI=w40-h40-c-rp-mo-br100', 1772668800, 4, 'I had a Great Experience With Mani and his team. His team is professional and Very Cooperative. 👌'],
        ['Nabeel Badar', 'a-/ALV-UjVaeRQ8LQD_P2JD92WIGFuk7GQlmvNK75kZgTzH0C0SMjTUuW8w=w40-h40-c-rp-mo-ba4-br100', 1772668800, 4, 'Nice services, highly recommended.'],
        ['Naveed Ahmad Abassi', 'a/ACg8ocLLrPZMeFQVQ-1DDurjPtiVYela6qPfrVH6izFD2WA51Ph1hg=w40-h40-c-rp-mo-br100', 1772668800, 5, 'Highly recommended 👍👍👍 Great Customer services Special Thanks to Mani Bhai🙏🙏'],
        ['Zarrin Memon', 'a-/ALV-UjUVjU0s_-Vqwd5bfRBK5aEcUlxXH4fIb8QlaPfzx-F1qkgqW0c9=w40-h40-c-rp-mo-ba2-br100', 1747180800, 5, 'His work is excellent. We used him to shoot my husband’s yacht birthday party and he clicked story telling pictures . Definitely recommend him'],
        ['Ankur Agarwal', 'a-/ALV-UjUuKgBYeHjxVBwyZt8no1-GiFl2yRODGh0fV1XrI6FlgIc4AJ1aLw=w40-h40-c-rp-mo-ba5-br100', 1653350400, 5, 'Mani and His team are professional and offer great quality for Photo and Video Coverage. We have worked on multiple projects together and our clients have also been very happy with the outcome. Keep up the good work.'],
        ['Sana Afzal', 'a-/ALV-UjXV-GrZvbqRwrughvgfAyMDbqOyYRi0Bb_vZV3WVl7LaQY5F8kk=w40-h40-c-rp-mo-ba2-br100', 1653350400, 5, 'His work is amazing and so professional. I have recommcomended them to many of my friends and each of them had amazing experience . You will not regret to have him as best photographer.'],
    ];
    $star = '%%BASE%%/assets/images/reviews/google-star-f.svg';
@endphp
<section class="section reviews {{ $class ?? '' }}">
    <div class="container">
        <div class="reviews-widget">
            <div class="reviews-summary">
                <strong class="reviews-rating">EXCELLENT</strong>
                <span class="reviews-stars">
                    @for ($i = 1; $i <= 4; $i++)
                        <img src="{{ $star }}" width="30" height="30" alt="Google star {{ $i }}">
                    @endfor
                    <img src="%%BASE%%/assets/images/reviews/google-star-h.svg" width="30" height="30" alt="Google star 5">
                </span>
                <span class="reviews-count">Based on <strong>{{ count($reviews) }} reviews</strong></span>
                <img class="reviews-google" src="%%BASE%%/assets/images/reviews/google-logo.svg" width="110" height="35" alt="Google">
            </div>

            <div class="reviews-slider">
                <div class="reviews-viewport">
                    <div class="reviews-track">
                        @foreach ($reviews as [$name, $avatar, $time, $rating, $text])
                            <div class="review">
                                <div class="review-inner">
                                    <div class="review-header">
                                        <img class="review-avatar" src="%%BASE%%/assets/images/reviews/google-icon.svg" width="40" height="40" alt="{{ $name }} profile picture">
                                        <div class="review-author">
                                            <div class="review-name">{{ $name }}</div>
                                            <div class="review-date" data-time="{{ $time }}">{{ date('F j, Y', $time) }}</div>
                                        </div>
                                        <img class="review-source" src="%%BASE%%/assets/images/reviews/google-icon.svg" width="20" height="20" alt="Posted on Google" title="Posted on Google">
                                    </div>
                                    <span class="review-stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <img src="%%BASE%%/assets/images/reviews/google-star-{{ $i <= $rating ? 'f' : 'e' }}.svg" width="17" height="17" alt="Google star {{ $i }}">
                                        @endfor
                                        <img class="review-verified" src="%%BASE%%/assets/images/reviews/verified.svg" width="15" height="15" alt="" title="Trustindex verifies that the original source of the review is Google.">
                                    </span>
                                    <div class="review-text">{{ $text }}</div>
                                    <button class="review-more" type="button">Read more</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="reviews-progress"><span></span></div>
                <button class="reviews-prev" type="button" aria-label="Previous review"></button>
                <button class="reviews-next" type="button" aria-label="Next review"></button>
            </div>
        </div>
    </div>
</section>
