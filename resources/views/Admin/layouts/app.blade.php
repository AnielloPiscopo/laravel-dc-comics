<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title','Laravel DC Comics - Admin Section')
        </title>

        <link rel="icon" href="{{Vite::asset('resources/assets/images/favicon.ico')}}">

        <!-- Styles -->
        @vite('resources/js/appAdmin.js')
        @yield('styles')
    </head>



    <body>

        <main>
            @yield('main-content')
        </main>
        
    </body>
</html>