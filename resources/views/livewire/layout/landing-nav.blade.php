<div class="w-full flex justify-center items-center">
    <div class="w-4/5 h-16 px-5 mt-6 flex justify-between items-center bg-white drop-shadow-xl rounded-2xl">
        <div class="rounded-full py-2 px-4 border border-blue-950 text-[#212121] hover:bg-[#FFBD2A] hover:border-white transition">پروفایل کاربری</div>
        <div class="flex flex-wrap justify-center gap-5">
            <x-navbar-link href="{{ route('home') }}" :active="request()->routeIs('home')" wire:navigate.hover>خانه</x-navbar-link>
            <x-navbar-link href="{{ route('packages') }}" :active="request()->routeIs('packages')" wire:navigate.hover>پکیج های آموزشی</x-navbar-link>
            <x-navbar-link href="{{ route('about') }}" :active="request()->routeIs('about')" wire:navigate.hover>درباره ما</x-navbar-link>
            <x-navbar-link href="{{ route('contact') }}" :active="request()->routeIs('contact')" wire:navigate.hover>تماس با ما</x-navbar-link>
        </div>
        <img src="{{ Vite::image('logo.png') }}" alt="logo" draggable="false">
    </div>
</div>

