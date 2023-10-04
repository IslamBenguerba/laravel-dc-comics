@php
    $credits = [
        [
            'title' => 'Dc Comics',
            'links' => ['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'],
        ],
        [
            'title' => 'Shop',
            'links' => ['shop dc', 'shop dc collectibles'],
        ],
        [
            'title' => 'DC',
            'links' => ['terms of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscription', 'talent workshop', 'cpsc certificates', 'ratings', 'shop help', 'contact us'],
        ],
        [
            'title' => 'Sites',
            'links' => ['dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa'],
        ],
    ];
    
@endphp

<footer>
    <div class="links-container">
        <div class="container d-flex justify-content-between position-relative">
            <div class="credits d-flex py-4">
                @foreach ($credits as $credit)
                    <div class="pe-4">
                        <h5 class="text-uppercase">{{ $credit['title'] }}</h5>
                        <ul class="list-footer-liks list-group m-0 py-2">
                            @foreach ($credit['links'] as $element)
                                <li class="">
                                    <a href="#" class="text-capitalize">{{ $element }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="dc-bg position-absolute"></div>
        </div>
    </div>

    <div class="contacts-container">
        <div class="container">
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-outline-primary text-uppercase">sign-up now!</button>
                <div class="d-flex align-items-center">
                    <h4>Follow US</h4>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-pinterest"></i>
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
            </div>
        </div>
    </div>
</footer>
