@php
$navItems = [
                [
                    'text'=> 'Home',
                    'url'=> 'home',
                ],
                [
                    'text'=> 'Characters',
                    'url'=> 'characters',
                ],

                [
                    'text'=> 'Comics',
                    'url'=> 'comics',
                ],

                [
                    'text'=> 'Movies',
                    'url'=> 'movies',
                ],

                [
                    'text'=> 'TV',
                    'url'=> 'tv',
                ],

                [
                    'text'=> 'Games',
                    'url'=> 'games',
                ],

                [
                    'text'=> 'Collectibles',
                    'url'=> 'collectibles',
                ],

                [
                    'text'=> 'Videos',
                    'url'=> 'videos',
                ],

                [
                    'text'=> 'Fans',
                    'url'=> 'fans',
                ],

                [
                    'text'=> 'News',
                    'url'=> 'news',
                ],

                [
                    'text'=> 'Shop',
                    'url'=> 'shop',
                ],
            ]
@endphp

<header>
    <nav>
        <ul class="my_d-flex my_justify-between my_align-center my_container">
            @foreach ($navItems as $navItem)
            <li class="my_text-uppercase my_d-flex">
                <a href="#">{{ $navItem['text'] }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>