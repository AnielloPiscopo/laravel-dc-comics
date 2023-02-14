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
    <aside class="my_d-flex my_justify-end my_container">
        <span>
            DC POWER&#8480; VISA&#174;
        </span>
        <span>
            ADDITIONAL DC SITES
        </span>
    </aside>

    <nav class="my_d-flex my_justify-between my_align-center my_container">
        <a class="my_logo-container" href="{{route('Guest.home')}}">
            <img src="{{Vite::asset('resources/assets/images/dc-logo.png')}}" alt="logo" title="logo">
        </a>

        <ul class="my_d-flex my_wrap">
            @foreach ($navItems as $navItem)
            <li class="my_text-uppercase my_d-flex {{(Request::route()->getName() === 'Guest.' . $navItem['url']) ? 'my_active' : ''}}">
                <a href="{{route('Guest.' . $navItem['url'])}}">{{ $navItem['text'] }}</a>
            </li>
            @endforeach
        </ul>

        <input type="text" name="" id="" placeholder='Search' class="my_text-end">
    </nav>
</header>