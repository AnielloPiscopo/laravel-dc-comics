{{--
|--------------------------------------------------------------------------
| Header
|--------------------------------------------------------------------------
|
| This is the header of the webpage.
|
--}}

@php
    $navItems = [
                [
                    'text'=> 'Characters',
                    'url'=> 'characters',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'Comics',
                    'url'=> 'comics',
                    'isPopulated' => true,
                ],

                [
                    'text'=> 'Movies',
                    'url'=> 'movies',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'TV',
                    'url'=> 'tv',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'Games',
                    'url'=> 'games',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'Collectibles',
                    'url'=> 'collectibles',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'Videos',
                    'url'=> 'videos',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'Fans',
                    'url'=> 'fans',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'News',
                    'url'=> 'news',
                    'isPopulated' => false,
                ],

                [
                    'text'=> 'Shop',
                    'url'=> 'shop',
                    'isPopulated' => false,
                ],
            ]
@endphp


<header>
    <aside class="my_d-flex my_justify-end my_container">
        <a href="#">
            DC POWER&#8480; VISA&#174;
        </a>
        <a href="{{route("$otherUserType.pages.home")}}">
            ADDITIONAL DC SITES
        </a>
    </aside>

    <nav class="my_d-flex my_justify-between my_align-center my_container">
        <a class="my_logo-container" href='{{route("$currentUserType.pages.home")}}'>
            <img src="{{Vite::asset('resources/assets/images/dc-logo.png')}}" alt="logo" title="logo">
        </a>

        <ul class="my_d-flex my_wrap">
            @foreach ($navItems as $navItem)
            <li class='my_text-uppercase my_d-flex {{(Request::route()->getName() === "$currentUserType.pages." . $navItem['url']) ? 'my_active' : ''}}'>
                <a href="{{route("$currentUserType.pages." . $navItem['url'] . (($currentUserType === 'Admin' && $navItem['isPopulated']) ? '.index' : ''))}}">{{ $navItem['text'] }}</a>
            </li>
            @endforeach
        </ul>

        <input type="text" name="" id="" placeholder='Search' class="my_text-end">
    </nav>
</header>