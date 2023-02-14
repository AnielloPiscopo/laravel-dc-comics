{{--
|--------------------------------------------------------------------------
| Footer
|--------------------------------------------------------------------------
|
| This is the footer of the webpage.
| 
--}}

@php
    $imgsPath = 'resources/assets/images/footer-';

    $navSections= [
                [
                    'title'=> 'Dc Comics',
                    'navItems'=> [
                        'Characters',
                        'Comics',
                        'Movies',
                        'TV',
                        'Games',
                        'Videos',
                        'News',
                    ]
                ],

                [
                    'title'=> 'Shop',
                    'navItems'=> [
                        'Shop DC',
                        'Shop DC Collectibles',
                    ]
                ],

                [
                    'title'=> 'DC',
                    'navItems'=> [
                        'Terms of Use',
                        'Privacy policy(new)',
                        'Ad Choices',
                        'Advertising',
                        'Jobs',
                        'Subscriptions',
                        'Talent Workshops',
                        'CPSC Certificates',
                        'Ratings',
                        'Shop Help',
                        'Contact Us',
                    ]
                ],

                [
                    'title'=> 'Sites',
                    'navItems'=> [
                        'DC',
                        'MAD Magazines',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ],
];

    $socialLinks= [
                [
                    'url'=> 'facebook',
                    'description'=> 'Facebook',
                ],


                [
                    'url'=> 'twitter',
                    'description'=> 'Twitter',
                ],


                [
                    'url'=> 'youtube',
                    'description'=> 'Youtube',
                ],


                [
                    'url'=> 'pinterest',
                    'description'=> 'Pinterest',
                ],


                [
                    'url'=> 'periscope',
                    'description'=> 'Google Maps',
                ],
            ]
@endphp


<footer>
    <section id="navbar-container" class="my_container my_d-flex">
        <div class="my_left-content my_d-flex my_column">
            <nav class="my_d-flex my_wrap my_column">
                @foreach ($navSections as $navSection)
                <div class="my_nav-item">
                    <span class="my_text-uppercase my_title">{{ $navSection['title'] }}</span>
                    <ul>
                        @foreach ($navSection['navItems'] as $navItem)
                        <li><a href="#" alt="{{$navItem}}">{{ $navItem }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </nav>
            <p>All Site Content TM and &#169; 2020 DC Entertainment , unless otherwise <a href="#">noted here</a>.All rights reserved. <a href="#">Cookies Settings</a></p>
        </div>

        <div class="my_img-container my_right-content">
        </div>
    </section>

    <section id="social-links" class="my_container my_d-flex my_justify-between">
        <a href="#" class="my_btn my_text-uppercase my_d-flex my_align-center">Sign-Up Now!</a>
        <div class="my_social-links-container my_d-flex my_align-center">
            <span class="my_text-uppercase">Follow Us</span>
            <ul class="my_d-flex">
                @foreach ($socialLinks as $socialLink)
                <li><a href="#"><img src="{{Vite::asset($imgsPath . $socialLink['url'] . '.png')}}"></a>
                </li>
                    
                @endforeach
            </ul>
        </div>
    </section>
</footer>