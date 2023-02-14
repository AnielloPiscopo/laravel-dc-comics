{{-- 
|--------------------------------------------------------------------------
| App Layout
|--------------------------------------------------------------------------
|
| This is the main layout that will be used 
| for the mainly part of website.
|
 --}}

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title','Laravel Comics')
        </title>

        <link rel="icon" href="{{Vite::asset('resources/assets/images/favicon.ico')}}">

        <!-- Styles -->
        @vite('resources/js/appGuest.js')
        @yield('styles')
    </head>



    <body>
        @include('Guest.partials.header')

        <main>
            <section id="jumbotron">
                <div class="my_background"></div>
        
                @yield('main-content')
            </section>
        </main>
        
        @include('Guest.partials.footer')
    </body>
</html>
