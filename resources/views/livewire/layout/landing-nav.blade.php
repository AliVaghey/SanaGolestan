<nav x-data="{ open: false }" class="absolute w-full">
    <div class="hidden lg:flex justify-center items-center">
        <div class="hidden w-4/5 h-16 px-5 mt-6 lg:flex justify-between items-center bg-white drop-shadow-xl rounded-2xl z-50">
            <img src="{{ Vite::image('logo.png') }}" alt="logo" draggable="false">
            <div class="flex flex-wrap justify-center gap-5">
                <x-navbar-link href="{{ route('home') }}" :active="request()->routeIs('home')" wire:navigate.hover>خانه</x-navbar-link>
                <x-navbar-link href="{{ route('packages') }}" :active="request()->routeIs('packages')" wire:navigate.hover>پکیج های آموزشی</x-navbar-link>
                <x-navbar-link href="{{ route('about') }}" :active="request()->routeIs('about')" wire:navigate.hover>درباره ما</x-navbar-link>
                <x-navbar-link href="{{ route('contact') }}" :active="request()->routeIs('contact')" wire:navigate.hover>تماس با ما</x-navbar-link>
            </div>
            @auth
                <a href="{{ route('dashboard') }}" class="rounded-full py-2 px-4 border border-blue-950 text-[#212121] hover:bg-[#FFBD2A] hover:border-white transition">پروفایل کاربری</a>
            @else
                <div>
                    <a href="{{ route('login') }}" class="rounded-full py-2 px-4 border border-blue-950 text-[#212121] hover:bg-[#FFBD2A] hover:border-white transition">ورود</a>
                    <a href="{{ route('register') }}" class="rounded-full py-2 px-4 border border-blue-950 text-[#212121] hover:bg-[#FFBD2A] hover:border-white transition">ثبت نام</a>
                </div>
            @endauth
        </div>
    </div>

    {{-- Responsive --}}
    <div class="lg:hidden">
        {{-- hamberger --}}
        <div class="m-3 flex items-center lg:hidden">
            <button @click="open = ! open; window.scrollTo(0, 0); document.getElementById('body').style.overflow = 'hidden';" class="inline-flex rounded-full bg-white items-center justify-center p-2 text-black focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Responsive Background --}}
    <div :class="{'opacity-100 w-screen': open, 'opacity-0 w-0': ! open}"
         class="block lg:hidden z-[1000] absolute top-0 left-0 h-screen bg-black/50 backdrop-blur-sm transition-opacity duration-300"
         @click="open = ! open; document.getElementById('body').style.overflow = 'scroll';">
    </div>

    <div :class="{'right-0': open, '-right-2/3': !open}" class="lg:hidden block -right-2/3 w-2/3 bg-white h-screen absolute top-0 z-[1001] transition-all duration-200">

        {{-- logo --}}
        <div class="w-full flex justify-center">
            <img class="w-2/5 h-auto" src="{{ Vite::image('logo-mobile.png') }}" alt="logo">
        </div>

        {{-- links --}}
        <div class="flex flex-col">
            <x-mobile-link :href="route('home')" :active="request()->routeIs('home')">
                خانه
            </x-mobile-link>
            <x-mobile-link :href="route('packages')" :active="request()->routeIs('packages')">
                پکیج های آموزشی
            </x-mobile-link>
            <x-mobile-link :href="route('about')" :active="request()->routeIs('about')">
                درباره ما
            </x-mobile-link>
            <x-mobile-link :href="route('contact')" :active="request()->routeIs('contact')">
                تماس با ما
            </x-mobile-link>
        </div>

        {{-- Authentication --}}
        <div class="flex flex-col mt-3 pt-3 border-t border-blue-950">
            @auth
                <x-mobile-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    داشبورد
                </x-mobile-link>
                <x-mobile-link :href="route('my-packages')" :active="request()->routeIs('my-packages')">
                    دوره های شما
                </x-mobile-link>
                <x-mobile-link :href="route('profile')" :active="request()->routeIs('profile')">
                    تنظیمات
                </x-mobile-link>
            @else
                <x-mobile-link :href="route('login')">
                    ورود
                </x-mobile-link>
                <x-mobile-link :href="route('register')">
                    ثبت نام
                </x-mobile-link>
            @endauth
        </div>
    </div>
</nav>

