<footer class="bg-[#26335D] lg:mt-40">
    <div class="hidden lg:block">
        <img class="absolute w-screen h-auto -mt-20" src="{{ Vite::image('footer-background.svg') }}" alt="background" draggable="false">
        <div class="flex justify-around px-20">
            <div class="flex flex-col gap-6 items-center mt-12 text-white z-50">
                <div class="border-b border-white font-bold text-xl">
                    همراهان سناء گلستان
                </div>
                <a href="{{ route('packages') }}">فروش پکیج ها</a>
                <a href="{{ route('packages') }}">فرصت همکاری</a>
                <a href="{{ route('packages') }}">تماس با ما</a>
            </div>
            <div class="flex flex-col items-center mt-4 text-white z-50">
                <div class="flex flex-col gap-10 items-center">
                    <h3 class="text-lg">ما را در شبکه های اجتماعی دنبال کنید</h3>
                    <div class="flex flex-row gap-5">
                        <a href="http://eitaa.com/joinchat/1828585479C810463b6ac" target="_blank"><img src="{{ Vite::image('eta.png') }}" alt="eta"></a>
                        <a href="https://www.instagram.com/hesabdaran.bartar/" target="_blank"><img src="{{ Vite::image('instagram.png') }}" alt="instagram"></a>
                        <a href="https://t.me/Hesabda" target="_blank"><img src="{{ Vite::image('telegram.png') }}" alt="telegram"></a>
                    </div>
                </div>
                <div class="mt-20 flex flex-col gap-5">
                    <div class="flex flex-row gap-3">
                        <img src="{{ Vite::image('location.svg') }}" alt="location1">
                        <div>گرگان،خ شهید رجایی ،گلشن ۹ میرکریم ۷ (خ امام خمینی ره انتهای آفتاب ۱)</div>
                    </div>
                    <div class="flex flex-row gap-3">
                        <img src="{{ Vite::image('location.svg') }}" alt="location1">
                        <div>گنبد، خ امام خمینی ره، خ مدرس، نرسیده به تقاطع حافظ،کوچه ۶،ساختمان نما سفید طبقه اول</div>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-white z-50 flex flex-col items-center justify-center">
                <div class="font-bold">شماره های تماس</div>
                <div class="mt-20 flex flex-row items-center gap-5">
                    <div>تماس با پشتیبانی</div>
                    <div class="flex flex-col">
                        <div>0935 172 3042</div>
                        <div>01733333533</div>
                    </div>
                </div>
                <div class="text-yellow-400 mt-10">
                    نماد های الکترونیک
                </div>
            </div>
        </div>
        <div class="text-white text-sm mt-0 mx-40">
            <div class="relative">تمام حقوق این وبسایت متعلق به آموزشگاه سنا گلستان می باشد</div>
        </div>
    </div>

{{--  Responsive  --}}
    <div class="lg:hidden bg-[#26335D] w-full flex flex-col items-center gap-2">
        <div class="text-white text-lg my-10">تماس با پشتیبانی : 3042 172 0935</div>
        <div class="text-white text-xs flex flex-row gap-2">
            <img src="{{ Vite::image('location.svg') }}" alt="location1">
            <div>گرگان،خ شهید رجایی ،گلشن ۹ میرکریم ۷ (خ امام خمینی ره انتهای آفتاب ۱)</div>
        </div>
        <div class="text-white text-xs flex flex-row gap-2">
            <img src="{{ Vite::image('location.svg') }}" alt="location1">
            <div>گنبد، خ امام خمینی ره، خ مدرس، نرسیده به تقاطع حافظ،کوچه ۶،ساختمان نما سفید طبقه اول</div>
        </div>
        <div class="flex flex-row mt-5 gap-5">
            <a href="http://eitaa.com/joinchat/1828585479C810463b6ac" target="_blank"><img src="{{ Vite::image('eta.png') }}" alt="eta"></a>
            <a href="https://www.instagram.com/hesabdaran.bartar/" target="_blank"><img src="{{ Vite::image('instagram.png') }}" alt="instagram"></a>
            <a href="https://t.me/Hesabda" target="_blank"><img src="{{ Vite::image('telegram.png') }}" alt="telegram"></a>
        </div>
        <div class="text-yellow-400 my-5">
            نماد های الکترونیکی
        </div>
    </div>
</footer>
