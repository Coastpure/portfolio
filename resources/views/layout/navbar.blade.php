{{-- Navbar Section Start --}}
<header
    {{-- indicates whether navbar is open on mobile screen or not--}}
    x-data="{navbarOpen: false}" 
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>

    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">

                    {{-- two logos, one for dark mode & one for white mode --}}
                    <img 
                    src="{{ url('/img/logo.png') }}" alt="logo" 
                    class="w-[48px] lg:w-[64px] inline-block dark:hidden"/>

                    {{-- white mode logo, by default it's going to be hidden --}}

                    <img 
                    src="{{ url('/img/logo-white.png') }}" alt="logo" 
                    class="w-[48px] lg:w-[64px] hidden dark:inline-block"/>

                    <span class="text-xl xl:text-2xl font-bold text-[#0o7187] dark:text-white">Simael</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div class="">
                    {{-- whenever this is clicked, we're gonna inverse the navbarOPen variable, if it's closed we're gonna open and vice versa --}}
                    {{-- If it's open we're gonna add class navbarTogglerActive --}}
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                    x-bind:class="navbarOpen && 'navbarTogglerActive'">
                    </x-layout.navbar-hamburger>

                    <nav
                    {{-- nav will have a class of hidden if it is not open --}}
                    :class="!navbarOPen && 'hidden'"
                    id="navbarCollapse"
                    class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
                    >

                    <ul class="block lg:flex lg:items-center">
                        {{-- this are the arrays we declared in Navbar.php --}}
                        @foreach ($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">
                                {{ $item['label']}}
                            </x-layout.navbar-item>
                        @endforeach
                    </ul>

                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

{{-- Navbar Section End --}}