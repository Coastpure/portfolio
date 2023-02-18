<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>
 
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        {{-- for yt icon to work --}}
        <script src="https://apis.google.com/js/platform.js"></script>
    </head>
    <body class="text-gray-800 dark:text-gray-200">
    {{-- bg-[#242933] --}}
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <!-- ====== Navbar Section Start -->
        <x-layout.navbar></x-layout.navbar>
        <!-- ====== Navbar Section End -->

        <!--sloth helps to wrap around the card, it adds the contents of the card 
        w hatever we soround the x tags with will be output here-->
        {{$slot}}
    
        <x-layout.footer></x-layout.footer>
    </div>
    </body>
</html>
