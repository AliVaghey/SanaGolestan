<x-landing-layout>
    <x-slot name="title">
        درباره ما
    </x-slot>
    <x-slot name="description">
        <meta name="description" content="ارائه کلیه خدمات حسابداری و حسابرسی. مشاوره تخصصی در امور مالیاتی. انجام تکالیف قانونی مالیاتی. استخدام و معرفی حسابدار به بازار کار. نمایندگی رسمی شرکت های نرم افزاری هلو، کاسپین، آرتا، تراز سامانه. آموزش تخصصی، کاربردی، عملی ویژه بازار کار.">
    </x-slot>
    <x-slot name="keywords">
        <meta name="keywords" content="حسابداری, حسابرسی, مالیات, استخدام">
    </x-slot>

    <div class="w-screen pt-16 lg:pt-40 flex lg:flex-row flex-col items-center lg:items-start lg:justify-center mb-20">
        <div class="lg:pl-20 flex flex-col lg:pr-20 w-5/6 lg:w-2/5">
            <h1 class="font-bold text-3xl">شرکت حسابداران برتر <strong class="text-[#FFBD2A]">سناء گلستان</strong></h1>
            <h3 class="text-[#2D3676] text-lg py-5">خدمات</h3>
            <div class="w-4/5">
                <ul class="pr-3 list-disc text-gray-600">
                    <li>️انجام تکالیف قانونی مالیاتی</li>
                    <li>️تهیه اظهارنامه عملکرد مالیاتی</li>
                    <li>️آموزش تخصصی حسابداری مالی، مالیاتی ویژه بازار کار</li>
                    <li>️استخدام حسابدار در بازار کار</li>
                    <li>️پلمپ دفاتر قانونی،بررسی تراکنش های بانکی</li>
                    <li>️انجام کلیه امور مربوط به سامانه مودیان و ارسال صورتحساب الکترونیکی</li>
                    <li>دوره آموزشی تخصصی کاملا عملی، ویژه بازارکار همراه با معرفی نیرو</li>
                    <li>بیش از 350 صفحه فایل آموزشی استاندارد خودآموز</li>
                    <li>بیش از 80 ساعت ویدئو آموزشی</li>
                    <li>پشتیبانی هنرجو بعد از معرفی به بازار کار</li>
                    <li>نمایندگی انواع نرم افزارهای حسابداری مالی</li>
                    <li>(هلو،شایگان،آرتا،محک،کاسپین،ترازسامانه، و ...)</li>
                    <li>آموزش تخصصی حسابداری و نرم افزار ویژه بازارکار کاملا عملی</li>
                    <li>دارای کانال تخصصی استخدام حسابدار و مدیر مالی در ناحیه شمال کشور و معرفی به بازار کار</li>
                </ul>
            </div>
            <div class="mt-10 flex justify-around">
                <a class="text-lg font-bold px-5 py-3 text-black border border-black rounded-full hover:bg-[#130D3A] hover:text-white transition" href="{{ route('contact') }}">تماس با ما</a>
                <a class="text-lg font-bold px-5 py-3 text-black bg-[#FFBD2A] hover:bg-[#130D3A] hover:text-white transition rounded-full" href="{{ route('packages') }}">مشاهده دوره ها</a>
            </div>
        </div>
        <div class="hidden lg:block relative">
            <img class="w-10/12" src="{{ Vite::image('about-us-image.jpg') }}" alt="about-us">
            <div class="absolute bottom-0 -right-20 bg-white p-7">
                <h2 class="text-xl font-bold">شرکت سناء گستان</h2>
                <div class="mt-4 text-[#26335D] text-sm">با مدیریت جناب خانی</div>
                <div class="w-56 text-gray-600 text-md">مشاور شما در امور مالی ،مالیاتی ،نرم‌افزار،معرفی نیرو، آموزش و اشتغال به کار</div>
            </div>
        </div>
        <div class="w-screen lg:hidden flex justify-center mt-10">
            <div class="bg-white">
                <h2 class="text-xl font-bold">شرکت سناء گستان</h2>
                <div class="mt-4 text-[#26335D] text-sm">با مدیریت جناب خانی</div>
                <div class="w-56 text-gray-600 text-md">مشاور شما در امور مالی ،مالیاتی ،نرم‌افزار،معرفی نیرو، آموزش و اشتغال به کار</div>
            </div>
        </div>
    </div>
</x-landing-layout>
