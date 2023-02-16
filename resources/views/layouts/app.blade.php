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
            @yield('title','Laravel DC Comics')
        </title>

        <link rel="icon" href="{{Vite::asset('resources/assets/images/favicon.ico')}}">

        <!-- Styles -->
        @vite('resources/js/Guest/app.js')
        @yield('styles')
    </head>



    <body>
        @include('partials.header' , ["currentUserType" => $currentUserType , "otherUserType" => $otherUserType])

        <main>
            @yield('main-content')
        </main>
        
        @include('partials.footer' , ["currentUserType" => $currentUserType , "otherUserType" => $otherUserType])
    </body>
</html>