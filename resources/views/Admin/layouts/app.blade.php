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
        @vite('resources/js/Admin/app.js')
        @yield('styles')
        @yield('scripts')
    </head>



    <body>
        @include('Admin.partials.header')
        
        <main>
            @yield('main-content')
        </main>
        
    </body>
</html>