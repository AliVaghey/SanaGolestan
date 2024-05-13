<x-landing-layout>
    <x-slot name="description">
        <meta name="description" content="ارائه کلیه خدمات حسابداری و حسابرسی. مشاوره تخصصی در امور مالیاتی. انجام تکالیف قانونی مالیاتی. استخدام و معرفی حسابدار به بازار کار. نمایندگی رسمی شرکت های نرم افزاری هلو، کاسپین، آرتا، تراز سامانه. آموزش تخصصی، کاربردی، عملی ویژه بازار کار.">
    </x-slot>
    <x-slot name="keywords">
        <meta name="keywords" content="حسابداری, حسابرسی, مالیات, استخدام">
    </x-slot>

    {{-- Hero Section --}}
    <div>
        <img class="w-full h-80 sm:h-auto -z-50" src="{{ Vite::image('hero_section.png') }}" alt="hero_image" draggable="false">
        <div class="absolute top-12 right-16 sm:top-16 sm:right-12 md:top-24 md:right-10 lg:top-60 lg:right-36">

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

    {{-- About Us --}}
    <div class="flex flex-col lg:flex-row w-full justify-around my-10">
        <div class="flex w-screen lg:hidden flex-col justify-center items-center">
            <div class="flex flex-col my-5 items-center justify-center w-56 h-56">
                <img class="size-12" src="{{ Vite::image('diamond.svg') }}" alt="introduction">
                <h2 class="text-xl font-bold py-5">معرفی به بازار کار</h2>
                <div class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
            </div>
            <div class="flex flex-col my-5 items-center justify-center w-56 h-56">
                <img class="size-12" src="{{ Vite::image('pulse.svg') }}" alt="support">
                <h2 class="text-xl font-bold py-5">پشتیبانی مادام العمر</h2>
                <div class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
            </div>
            <div class="flex flex-col my-5 items-center justify-center w-56 h-56">
                <img class="size-12" src="{{ Vite::image('school.svg') }}" alt="school">
                <h2 class="text-xl font-bold py-5">ارائه مدرک معتبر</h2>
                <div class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
            </div>
        </div>
        <div class="flex flex-col px-10 lg:w-1/3 lg:-mr-28">
            <div class="border w-32 border-[#FFBD2A] text-xl text-center lg:text-2xl p-5" style="border-radius: 100px / 60px">درباره ما</div>
            <div class="mt-5 text-2xl lg:text-4xl font-bold text-black">انتخاب شما شرکت</div>
            <div class="text-2xl lg:text-4xl font-bold text-[#FFBD2A]">حسابداران برتر سناء گلستان</div>
            <p class="text-md lg:text-lg mt-10">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
            <a class="mt-10 p-5 w-fit rounded-lg hover:bg-[#FFBD2A] shadow-2xl transition bg-white" href="{{ route('about') }}">مشاهده بیشتر</a>
        </div>
        <div class="relative lg:block hidden">
            <div class="absolute -left-28 flex-col my-5 items-center justify-center w-56 h-56">
                <img class="size-12" src="{{ Vite::image('diamond.svg') }}" alt="introduction">
                <h2 class="text-xl font-bold py-5">معرفی به بازار کار</h2>
                <div class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
            </div>
            <div class="absolute top-16 left-56 flex flex-col my-5 items-center justify-center w-56 h-56">
                <img class="size-12" src="{{ Vite::image('pulse.svg') }}" alt="support">
                <h2 class="text-xl font-bold py-5">پشتیبانی مادام العمر</h2>
                <div class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
            </div>
            <div class="absolute top-52 -left-28 flex flex-col my-5 items-center justify-center w-56 h-56">
                <img class="size-12" src="{{ Vite::image('school.svg') }}" alt="school">
                <h2 class="text-xl font-bold py-5">ارائه مدرک معتبر</h2>
                <div class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
            </div>
        </div>
    </div>

    {{-- Packages --}}
    <div class="flex flex-col items-center">
        <div class="w-screen flex justify-center mt-44">
            <div class="flex gap-2 mb-20">
                <div class="flex flex-col items-center">
                    <h2 class="text-lg lg:text-2xl mb-2">پکیج های آموزشی</h2>
                    <svg width="152" height="11" viewBox="0 0 152 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10C7.5503 9.05752 78.6201 -7.43762 151 6.701" stroke="#26335D" stroke-width="2"/>
                    </svg>
                </div>
                <img src="{{ Vite::image('book.svg') }}" alt="book">
            </div>
        </div>
        <img class="absolute justify-center h-[1000px] mt-10" src="{{ Vite::image('background0.svg') }}" alt="background">
        <div class="h-[600px]">
            packages . . .
        </div>
        <a class="mt-10 p-5 w-fit rounded-lg hover:bg-[#FFBD2A] shadow-2xl transition bg-white z-50" href="{{ route('packages') }}">< مشاهده همه پکیج ها</a>
    </div>

    {{-- Classes --}}
    <div class="w-screen flex justify-around items-center my-10">
        <img class="h-96 hidden lg:block" src="{{ Vite::image('hand.png') }}" alt="hand">
        <div class="flex flex-col gap-10 lg:w-2/6 px-10 lg:px-0">
            <h2 class="text-2xl lg:text-3xl font-bold">با شرکت در کلاس های <strong class="text-[#FFBD2A]">سنا گلستان</strong> فرصت کسب و کار ایجاد کنید</h2>
            <div class="text-sm lg:text-lg">
                هر فعالیتی نیاز به مهارت های خاصی دارد که برای کار آفرینی لازم است داشته باشید. بنابراین با شرکت در کلاس های سنا گلستان و به دست آوردن مهارت های کافی کسب و کار خود را شروع کرده و با داشتن مدرک معتبر از طرف ما  اعتماد مشتریان خود را جلب کنید
            </div>
        </div>
    </div>

    {{-- Resume --}}
    <div class="w-screen flex justify-center my-36">
        <div class="flex flex-col items-center w-11/12 lg:w-1/2 h-fit rounded-[70px] border-[20px] border-blue-950 ">
            <div class="bg-white w-2/3 h-6 lg:h-16 -mt-5"></div>
            <img class="mt-5" src="{{ Vite::image('quote.png') }}" alt="quote mark" draggable="false">
            <h3 class="text-xl text-center px-4 lg:text-3xl my-4">برای همکاری با ما رزومه ی خود را ارسال کنید.</h3>
            <a href="#" class="text-sm lg:text-lg font-bold text-white mt-8 lg:mt-16 px-5 py-2 bg-[#FFBD2A] rounded-lg hover:bg-[#26335D] transition">فرم رزومه</a>
            <div class="bg-white w-2/3 h-6 lg:h-16 -mb-5"></div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- tutors --}}
    <div class="w-full h-96 flex flex-col justify-center items-center">
        <img class="hidden lg:block absolute left-0 -my-96" src="{{ Vite::image('lines.svg') }}" alt="lines">
        <div class="w-1/2">
            <div class="text-[#26335D] font-bold">تیم ما</div>
            <h2 class="text-4xl mb-4 font-bold">اساتید برتر شرکت سنا گلستان</h2>
            <div class="mb-10 w-2/3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</div>
        </div>
        <div class="swiper landingSwiper w-1/2 h-96 bg-gray-500">
            <div class="swiper-wrapper bg-red-800">
                <div class="swiper-slide bg-amber-300">
                    <div class="p-5 bg-red-950 text-white w-fit">hello world</div>
                </div>
                <div class="swiper-slide bg-amber-300"></div>
                <div class="swiper-slide bg-amber-300"></div>
                <div class="swiper-slide bg-amber-300"></div>
                <div class="swiper-slide bg-amber-300"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".landingSwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</x-landing-layout>
