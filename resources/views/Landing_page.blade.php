<x-landing-layout>
    <x-slot name="description">
        <meta name="description" content="ارائه کلیه خدمات حسابداری و حسابرسی. مشاوره تخصصی در امور مالیاتی. انجام تکالیف قانونی مالیاتی. استخدام و معرفی حسابدار به بازار کار. نمایندگی رسمی شرکت های نرم افزاری هلو، کاسپین، آرتا، تراز سامانه. آموزش تخصصی، کاربردی، عملی ویژه بازار کار.">
    </x-slot>
    <x-slot name="keywords">
        <meta name="keywords" content="حسابداری, حسابرسی, مالیات, استخدام">
    </x-slot>

    <div DIR="rtl" class="">
        <img class="w-full -z-50" src="{{ Vite::image('hero_section.png') }}" alt="hero_image" draggable="false">
        <div class="absolute top-60 right-36">

            <h1 class="text-5xl font-bold text-white">شرکت حسابداران برتر<br> سناء گلستان</h1>
            <p class="mt-5 text-lg text-[#F9F9F9]">ارائه کلیه خدمات حسابداری و حسابرسی به همراه مشاوره تخصصی در امور مالی</p>

            <div class="mt-10">
                <div>
                    <a class="text-black text-xl font-bold bg-white pt-3 pb-4 px-5 rounded-full hover:bg-[#FFBD2A] transition" href="#">دوره های برتر</a>
                    <div class="flex">
                        <div class="mt-10 flex flex-col w-36 justify-center items-center">
                            <div class="text-white font-bold">4359</div>
                            <div class="text-md text-gray-400">تعداد بازدید کنندگان</div>
                        </div>
                        <img class="h-10 w-auto mt-12" src="{{ Vite::image('users.png') }}" alt="users">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex w-full justify-around items-center my-10">
        <div class="flex flex-col w-1/3">
            <div class="border w-32 border-[#FFBD2A] text-2xl p-5" style="border-radius: 100px / 60px">درباره ما</div>
            <div class="mt-5 text-4xl font-bold text-black">انتخاب شما شرکت</div>
            <div class="text-4xl font-bold text-[#FFBD2A]">حسابداران برتر سناء گلستان</div>
            <p class="text-lg  mt-16">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
        </div>
        <div>
            world
        </div>
    </div>

</x-landing-layout>
