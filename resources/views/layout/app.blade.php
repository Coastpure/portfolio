<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>
 
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        

    </head>
<body class="antialiased bg-[#242933]">
  
<!-- ====== Navbar Section Start -->
<x-layout.navbar></x-layout.navbar>
<!-- ====== Navbar Section End -->

{{$slot}}
<!--sloth helps to wrap around the card, it adds the contents of the card 
            whatever we soround the x tags with will be output here-->


<footer>Footer</footer>
    
    </body>
</html>
