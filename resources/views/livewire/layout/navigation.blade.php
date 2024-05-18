<nav x-data="{ open: false }" class="w-1/6 lg:h-screen lg:py-6 sticky lg:flex lg:items-center lg:justify-center">
    <div class="hidden lg:flex h-full w-full mx-5 bg-white/15 border border-navi rounded-3xl flex-col items-center justify-between py-5">
        <div class="w-full flex flex-col items-center">
            <img src="{{ Vite::image('title.png') }}" alt="title" draggable="false">
            <div class="flex flex-col w-full px-5 py-10 gap-2">
                <x-panel-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">داشبورد</x-panel-nav-link>
                <x-panel-nav-link :href="route('my-packages')" :active="request()->routeIs('my-packages')">دوره های من</x-panel-nav-link>
                <x-panel-nav-link :href="route('packages')" :active="false">همه ی دوره ها</x-panel-nav-link>
                <x-panel-nav-link :href="route('profile')" :active="request()->routeIs('profile')">تنظیمات</x-panel-nav-link>
            </div>
        </div>
        <a href="{{ route('home') }}">
            <img src="{{ Vite::image('logo_big.png') }}" alt="logo_big">
        </a>
    </div>

    <div class="w-screen lg:hidden bg-white/25 backdrop-blur-lg py-0">
        <div class="flex w-full justify-between px-3">
            <div class="lg:hidden">
                {{-- hamberger --}}
                <div class="m-3 flex items-center lg:hidden">
                    <button @click="open = ! open; window.scrollTo(0, 0); document.getElementById('body').style.overflow = 'hidden';" class="inline-flex rounded-lg bg-white items-center justify-center p-2 text-navi focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <x-user></x-user>

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
        </div>
    </div>
</nav>
