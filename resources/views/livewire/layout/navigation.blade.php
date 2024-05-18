<nav class="w-1/6 h-screen py-6 sticky flex items-center justify-center">
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
</nav>
