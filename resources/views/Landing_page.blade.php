<x-landing-layout>
    <x-slot name="description">
        <meta name="description" content="ارائه کلیه خدمات حسابداری و حسابرسی. مشاوره تخصصی در امور مالیاتی. انجام تکالیف قانونی مالیاتی. استخدام و معرفی حسابدار به بازار کار. نمایندگی رسمی شرکت های نرم افزاری هلو، کاسپین، آرتا، تراز سامانه. آموزش تخصصی، کاربردی، عملی ویژه بازار کار.">
    </x-slot>
    <x-slot name="keywords">
        <meta name="keywords" content="حسابداری, حسابرسی, مالیات, استخدام">
    </x-slot>

    <div>
        <img class="w-full h-80 sm:h-auto -z-50" src="{{ Vite::image('hero_section.png') }}" alt="hero_image" draggable="false">
        <div class="absolute top-12 right-10 sm:top-16 sm:right-12 md:top-24 md:right-10 lg:top-60 lg:right-36">

            <h1 class="text-lg lg:text-5xl md:text-3xl font-bold text-white">شرکت حسابداران برتر<br> سناء گلستان</h1>
            <p class="mt-5 text-xs lg:text-lg text-[#F9F9F9]">ارائه کلیه خدمات حسابداری و حسابرسی به <br class="sm:hidden"> مشاوره تخصصی در امور مالی</p>

            <div class="mt-5 sm:mt-10">
                <div>
                    <a class="text-black text-sm lg:text-xl md:font-bold bg-white pt-1 pb-2 lg:pt-3 lg:pb-4 px-2.5 lg:px-5 rounded-full hover:bg-[#FFBD2A] transition" href="#">دوره های برتر</a>
                    <div class="flex">
                        <div class="mt-2 sm:mt-10 flex flex-col sm:w-36 justify-center items-center">
                            <div class="text-white font-bold">4359</div>
                            <div class="text-xs sm:text-md text-gray-400">تعداد بازدید کنندگان</div>
                        </div>
                        <img class="h-7 sm:h-10 w-auto mt-5 sm:mt-12" src="{{ Vite::image('users.png') }}" alt="users">
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
