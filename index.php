<?php
get_header();
?>
    <section class="w-full lg:h-[300px] xl:h-[400px] mt-[124px] lg:mt-[200px]">
        <div class="swiper swiper-banner h-full">
            <div class="swiper-wrapper w-full h-full">
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-1.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-1.webp" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-2.jpg" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-2.jpg" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-3.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-3.webp" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-4.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-4.webp" alt=""></a>
                </div>
                <div class="swiper-slide w-full h-full">
                    <a href="#"><img class="hidden lg:block w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSLIDE-5.webp" alt=""></a>
                    <a href="#"><img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESLIDE-5.webp" alt=""></a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="w-full">
        <div class="flex flex-col items-center">
            <div class="h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] md:text-[22px] font-normal">دسته بندی های پربازدید</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-circle w-full lg:w-[1024px] xl:w-[1280px] h-[181px] overflow-hidden">
                <div class="swiper-wrapper !flex !justify-between">
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-mobile.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">گوشی موبایل</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-laptop.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">لپتاپ</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Headphone.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">هدفون و هندزفری</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-speaker.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">اسپیکر و بلندگو</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-clock.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">ساعت هوشمند</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-save.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">تجهیزات ذخیره سازی</p>
                        </a>
                        <a class="swiper-slide !flex !flex-col items-center justify-center gap-4" href="#">
                            <img class="w-[90px] lg:w-[130px] h-[90px] lg:h-[130px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-powerbank.jpeg" alt="">
                            <p class="text-[12px] sm:text-[14px] font-semibold">شارژر و پاوربانک</p>
                        </a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-5 lg:mt-10">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto flex flex-col lg:flex-row justify-center items-center gap-4 px-[10px] lg:px-0">
            <a class="w-full lg:w-[504px] xl:w-[632px] h-[80px] xl:h-[104px]" href="#">
                <img class="hidden lg:block w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-job.jpeg" alt="">
                <img class="block lg:hidden w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-job.jpeg" alt="">
            </a>
            <a class="w-full lg:w-[504px] xl:w-[632px] h-[80px] xl:h-[104px]" href="#">
                <img class="hidden lg:block w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-digital.jpeg" alt="">
                <img class="block lg:hidden w-full h-full rounded-[10px]" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-digital.jpeg" alt="">
            </a>
        </div>
    </section>
    <section class="w-full bg-[#d20707] mt-[30px]">
        <div class="flex items-center justify-center h-[65px] lg:h-[88px] gap-1">
            <img src="<?php echo THEME_DIR; ?>/src/img/big_white_golden_offer.svg" alt="">
            <h2 class="text-[26px] font-normal text-white">تخفیف تایم</h2>
        </div>
        <div class="swiper swiper-card w-full lg:w-[1024px] xl:w-[1280px] h-[302px] lg:h-[402px] !pb-[20px] !px-[10px] lg:px-0">
            <div class="swiper-wrapper !w-max">
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1 ">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white lg:bg-black rounded-[10px] lg:rounded-[28px] !w-[185px] lg:!w-[242px] !h-[288px] lg:!h-[362px] relative group !flex flex-col items-center gap-2 lg:gap-2.5">
                    <div class="absolute bg-white hidden lg:block rounded-[28px] w-[242px] h-[362px] lg:group-hover:h-[282px] duration-500 z-0"></div>
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                    <div class=" shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[25px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] lg:group-hover:bg-white duration-300">
                            <p class="text-[12px] font-bold text-white lg:group-hover:text-[#e10a0a] duration-300">%8</p>
                        </span>
                        <span>
                            <div class="flex text-[#b9b9b9] lg:group-hover:text-white text-[12px] lg:text-[13px] font-normal gap-1">
                                <p class="line-through">22,749,000</p>
                                <span>تومان</span>
                            </div>
                            <div class="flex text-[#e10b0b] lg:group-hover:text-white duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p>21,749,000</p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="w-full mt-[15px]">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto">
            <div class="h-[60px] lg:h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] lg:text-[22px] font-normal">گوشی موبایل</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-banner1 !h-[198px] lg:!h-[255px] xl:h-[275px] !px-[10px] lg:!px-0">
                <div class="swiper-wrapper !flex !justify-between">
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-flag.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-medium.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-10.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <div class="w-full h-[82px] hidden lg:block bg-[#f6f5f5] mt-[50px]"></div>
    <section class="w-full mt-[15px]">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto">
            <div class="h-[60px] lg:h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] lg:text-[22px] font-normal">صوتی و تصویری</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-banner2 !h-[198px] lg:!h-[255px] xl:h-[275px] !px-[10px] lg:!px-0">
                <div class="swiper-wrapper !flex !justify-between">
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-handfree.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-speak.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-jbl.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-[20px] h-[240px] lg:h-[350px] px-[10px] lg:px-0">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] h-full mx-auto">
            <img class="w-full h-full hidden lg:block" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-mobile1.png" alt="">
            <img class="w-full h-full block lg:hidden" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-mobile.png" alt="">
        </div>
    </section>
    <section class="w-full mt-[15px]">
        <div class="w-full lg:w-[1024px] xl:w-[1280px] mx-auto">
            <div class="h-[60px] lg:h-[94px] flex flex-col justify-center items-center gap-2">
                <h2 class="text-[20px] lg:text-[22px] font-normal">کامپیوتر و لپ تاپ</h2>
                <svg width="46" height="4" viewBox="0 0 46 4" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="1.99609" y2="1.99609" stroke="#E10A0A" stroke-width="3"></line></svg>
            </div>
            <div class="swiper swiper-banner-computer !h-[198px] lg:!h-[255px] xl:h-[275px] !px-[10px] lg:!px-0">
                <div class="swiper-wrapper !flex !justify-between">
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-gaming.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-office.jpeg" alt=""></a>
                    <a class="swiper-slide !w-[286px] lg:!w-[325px] xl:!w-[395px] !h-full" href="#"><img class="rounded-[15px] w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-student.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-auto mt-[30px]">
        <div class="flex items-center justify-center gap-1">
            <img src="<?php echo THEME_DIR; ?>/src/img/red_title_wing.svg" alt="">
            <h3 class="text-[20px] font-normal">محبوب ترین های لوازم جانبی</h3>
            <img src="<?php echo THEME_DIR; ?>/src/img/red_title_wing.svg" alt="">
        </div>
        <div class="w-full h-[335px] lg:h-[470px] mx-auto bg-[#f6f5f5] pt-[10px] lg:pt-[40px] mt-[25px] px-[10px] lg:px-0">
            <div class="swiper swiper-card2 lg:w-[1024px] xl:w-[1280px] mx-auto h-full mt-[15px]">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                        <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-pro.gif" alt="">
                        <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                        <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                        <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                            <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                                <p class="text-[12px] font-bold text-white duration-300">%8</p>
                            </span>
                            <span>
                                <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                    <p class="line-through">22,749,000</p>
                                    <span>تومان</span>
                                </div>
                                <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                    <p>21,749,000</p>
                                    <span>تومان</span>
                                </div>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#2a2a2a] h-auto">
        <div class="lg:w-[1024px] xl:w-[1280px] mx-auto h-[110px] lg:h-[160px] flex justify-center items-center">
            <div class="h-[52px] lg:h-[110px]">
            <img class="hidden lg:block w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/bestSellsDesktop.png" alt="">
            <img class="block lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/bestSellsMobile.png" alt="">
            </div>
        </div>
        <div class="relative flex w-full justify-center">
            <div class="absolute flex w-full flex-col items-center gap-[80px] ">
                <div class="h-[32px] w-full bg-line_Product "></div>
                <div class="h-[30px] w-full bg-line_Product opacity-90"></div>
                <div class="h-[28px] w-full bg-line_Product opacity-80"></div>
                <div class="h-[26px] w-full bg-line_Product opacity-70 hidden lg:block"></div>
            </div>
        </div>
        <div class="swiper swiper-card3 lg:w-[1024px] xl:w-[1280px] mx-auto h-[300px] lg:h-[410px] !px-[10px] lg:!px-0">
            <div class="swiper-wrapper !flex !justify-between">
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide bg-white !w-[181px] lg:!w-[240px] !h-[278px] lg:!h-[388px] !flex !flex-col items-center rounded-[21px] relative">
                    <div class="relative w-[146px] lg:w-[200px] h-[146px] lg:h-[200px] lg:mt-4"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-515064d6-A05.jpeg" alt=""></div>
                    <p class="line-clamp-2 text-[13px] font-medium px-[10px] text-center mt-[10px] lg:mt-[25px]">گوشی موبایل سامسونگ مدل Galaxy A05s 4G دو سیم کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت</p>
                    <div class="w-full px-[15px] flex justify-between items-center mt-[20px] lg:mt-[40px]">
                        <div class="w-[25px] lg:w-[34px] h-[25px] lg:h-[34px] bg-[#e10a0a] lg:text-[16px] text-[12px] font-bold lg:font-semibold text-white flex justify-center items-center rounded-full">
                            <p>%11</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p class="text-[14px] font-semibold text-[#a6a6a6] line-through">1,750,000 تومان</p>
                            <p class="text-[18px] font-bold text-[#e10a0a]">1,560,000 تومان</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex justify-center w-full pb-4 z-50">
            <div class="w-[252px] h-[48px] bg-[#e10a0a] rounded-[12px] text-white text-[14px] font-medium flex justify-center items-center">
                <p>مشاهده همه</p>
            </div>
        </div>
    </section>
    <div class="w-full h-[155px] flex flex-col gap-[20px]">
        <div class="h-[60px] flex items-center justify-center gap-3">
            <h3 class="text-[20px] font-normal text-[#888888]">برندهای برتر</h3>
        </div>
        <div class="!w-full lg:!w-[1024px] xl:!w-[1280px] mx-auto overflow-hidden h-[51px] justify-center px-[10px] lg:px-0">
            <div class="swiper !h-full swiper-title">
                <div class="w-full !h-full !flex swiper-wrapper">
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-samsung.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-nokia.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-e4942181-Apple.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-san-disk.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Anker.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Razer.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Promate.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-Jbl.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-xiaomi.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-harman.png">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide !w-[141px] !h-[50px] overflow-hidden rounded-[8px]  border border-white px-[10px]">
                        <div class="relative mx-[20px] flex h-[50px] min-w-[120px] items-center justify-center">
                            <div class="relative h-[40px] min-w-[120px]">
                                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="px-4" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; color: transparent;" sizes="120px" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-sony.png">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col gap-[20px]">
        <div class="flex items-center justify-center gap-1">
            <img src="http://localhost/sabz-learning/wp-content/themes/learning-theme/src/img/red_title_wing.svg" alt="">
            <h3 class="text-[20px] font-normal">آخرین مقالات منتشر شده</h3>
            <img src="http://localhost/sabz-learning/wp-content/themes/learning-theme/src/img/red_title_wing.svg" alt="">
        </div>
        <?php
        $args = [
            "post_type" => "post" ,
            "posts_per_page" => 4 ,
            "order_by" => "date" ,
            "order" => "DESC"
        ];

        $lats_posts = new WP_Query($args);
        if($lats_posts->have_posts()){
            ?>
            <section class="max-w-[1250px] mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8 px-[15px] lg:px-0">
            <?php
            while($lats_posts->have_posts()){
                $lats_posts->the_post();
                $post_id = get_the_ID();
                $post_thumbnail = get_the_post_thumbnail_url($post_id);
                $post_title = get_the_title();
                $post_date = get_the_date('d M Y' , $post_id);
                $author_id = get_post_field('post_author' , $post_id );
                $author_name = get_the_author_meta('display_name' , $author_id);
                $post_link = get_permalink();
                ?>
                <div class="flex flex-col gap-4">
                    <div class="flex relative">
                    <div>
                        <?php if($post_thumbnail){ ?>
                            <img class="w-full h-full rounded-[4px]" src="<?php echo $post_thumbnail; ?>" alt="">
                        <?php } ?>
                        

                        <?php
                        $terms = get_the_terms($post_id , "category");
                        if(!empty($terms)){
                            ?>
                            <div class="absolute bottom-[15px] right-[20px] z-50 text-white flex gap-2">
                            <?php
                            foreach($terms as $term){
                                ?>
                                <a href="<?php echo get_term_link($term); ?>" class="bg-[#fc4a00] px-[10px] rounded-[4px] text-[11px] font-bold">
                                    <?php echo $term->name; ?>
                                </a>
                                <?php
                            }
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                        
                            
                    </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <a class="text-[18px] font-semibold text-black hover:text-red-600" href="<?php echo $post_link; ?>">
                            <?php echo $post_title; ?>
                        </a>
                        <div class="flex items-center gap-2">
                            <img class="w-[46px] h-[46px] rounded-full" src="<?php echo THEME_DIR; ?>/src/img/d14e485e223f3dc7b7711e22c0a040d8.png" alt="">
                            <p class="text-[13px] font-normal text-[#9b9b9b]"><?php echo $author_name; ?></p>
                            <div class="flex items-center gap-1">
                            <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"></path></svg>
                            <p class="text-[13px] font-normal text-[#999999]"><?php echo $post_date; ?></p>
                        </div>
                        </div>
                        <p class="text-[14px] font-normal"><?php the_excerpt(); ?></p>
                    </div>
                    
                </div>
                <?php
            }
            ?>
            </section>
            <?php
            wp_reset_postdata();
        }
        ?>
    </div>
    <div class="lg:w-[1024px] xl:w-[1280px] mx-auto mb-[16px] flex w-full flex-col items-center text-text-40 mt-2 px-[10px] lg:px-0">
        <div class="relative flex w-full flex-col items-center rounded-[16px] border border-[#e8eaed]">
            <div id="text-box" class="mb-[16px] mt-[16px] flex w-11/12 flex-col items-start overflow-hidden duration-75 h-[240px]">
                <div class=" flex w-full flex-col items-start">
                    <h1 class="mt-[16px] text-[14px] font-semibold"> خرید گوشی</h1>
                    <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">خرید گوشی و خرید اینترنتی گوشی در این روزها، می‌تواند زمان زیادی از شما بگیرد. در هنگام خرید گوشی موبایل باید به نکات متعددی مانند<!-- --> 
                        <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">خرید گوشی موبایل</a>، امکانات گوشی موبایل، ضمانت گوشی موبایل و رجیستری گوشی موبایل در کنار اصالت فروشگاه موبایل دقت کرد. مهم‌‎ترین عامل اثرگذار در تصمیم گیری ما، قیمت روز گوشی موبایل می‌باشد. شما می‌توانید از طریق خرید اینترنتی گوشی از<!-- --> 
                        <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">فروشگاه اینترنتی موبایل<!-- --> </a> <!-- -->یا خرید حضوری از شعب وی‌جی‌نا اقدام به خرید گوشی سامسونگ، خرید گوشی شیائومی و سایر برندها کنید.</p>
                    </div>
                    <div class=" flex w-full flex-col items-start">
                        <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">فروشگاه اینترنتی موبایل</h2>
                        <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">خرید گوشی موبایل از فروشگاه اینترنتی موبایل، یکی از سریع‌ترین راه‌ها به شمار می‌آید. در زمان خرید اینترنتی گوشی موبایل، باید به نکاتی مانند نشان نماد الکترونیکی، پروتکل SSL و درگاه امن پرداخت فروشگاه اینترنتی توجه کنید. قبل از خرید موبایل، نظرات کاربران را بررسی کنید. این نظرات می‌تواند به شما درک بهتری از تجربه خرید دیگران و کیفیت سرویس‌دهی آن فروشگاه اینترنتی بدهد. مورد بعدی که می‌بایست به آن دقت شود اصالت کالای دیجیتال است.</p>
                    </div>
                    <div class=" flex w-full flex-col items-start">
                        <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید اقساطی گوشی</h2>
                        <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">این‌ روزها خرید اقساطی گوشی به دلیل نوسان قیمت گوشی موبایل بهترین راه خرید گوشی محسوب می‌شود. وی‌جی‌نا با فراهم کردن امکان خرید قسطی گوشی موبایل، خرید قسطی لپ تاپ و سایر کالاهای دیجیتال، شرایطی آسان را برای خرید جدیدترین محصولات دیجیتال فراهم کرده است. شما می‌توانید به دو روش حضوری و آنلاین گوشی مورد نظر خود را به صورت قسطی خریداری نمایید. در روش آنلاین کافیست به صفحه ویژه<!-- --> 
                            <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">خرید قسطی کالای دیجیتال</a> <!-- -->وی‌جی‌نا و برای خرید حضوری گوشی موبایل کافیست به یکی از شعب وی‌جی‌نا مراجعه کنید تا خرید خود را در سریعترین زمان ممکن و با شرایطی آسان انجام دهید.</p>
                        </div>
                        <div class=" flex w-full flex-col items-start">
                            <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی سامسونگ</h2>
                            <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">
                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">خرید گوشی سامسونگ</a> <!-- -->همیشه یکی از انتخاب‌های اول خریداران موبایل در ایران است. این محبوبیت به دلایل متعددی مثل به‌روزرسانی‌های نرم‌افزاری منظم گوشی‌های سامسونگ، امنیت و پشتیبانی قوی گوشی سامسونگ می‌باشد که خیال شما را تا سال‌ها راحت می‌کند. به‌عنوان مثال جدیدترین گوشی سامسونگ یعنی گلکسی اس ۲۴، گلکسی اس ۲۴ پلاس و گلکسی اس ۲۴ اولترا تا هفت سال پشتیبانی نرم‌افزاری دریافت خواهند کرد. اگر به‌دنبال خرید گوشی اقتصادی سامسونگ هستید یا انتخاب شما گوشی میان‌رده سامسونگ است و یا قصد خرید گوشی پرچمدار سامسونگ را دارید، وی‌جی‌نا خرید آنلاین گوشی موبایل سامسونگ و خرید حضوری گوشی موبایل سامسونگ را برای شما با قیمت مناسب و ضمانت معتبر فراهم کرده است.</p>
                            </div>
                            <div class=" flex w-full flex-col items-start">
                                <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی شیائومی<!-- --> </h2>
                                <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">شیائومی برندی است که کار خود را در چین آغاز کرد و خیلی زود به یکی از غول‌های تکنولوژی در دنیا تبدیل شد. گوشی‌ شیائومی همیشه به مناسب بودن قیمت معروف بوده‌ و خریداران معمولا برای خرید گوشی هوشمند با امکانات خوب و قیمت مناسب به سراغ این برند می‌روند؛ اما شیائومی تنها گوشی اقتصادی یا گوشی ارزان قیمت تولید نمی‌کند. چند سالی است که به گوشی های شیائومی، گوشی‌ پرچمدار نیز اضافه شده است تا این برند به رقیبی جدی برای گوشی آیفون و گوشی سری اس سامسونگ تبدیل شود.<!-- --> 
                                    <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">قیمت گوشی شیائومی</a> <!-- -->همانند سایر مدل‌ها در وی‌جی‌نا همواره به‌روز است و شما می‌توانید مدل دلخواه خود را با گارانتی ۱۸ ماهه معتبر خریداری کنید.</p>
                            </div>
                                <div class=" flex w-full flex-col items-start">
                                    <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی اپل </h2>
                                    <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">شرکت اپل با ورود به دنیای تلفن‌های همراه، معنای گوشی هوشمند را برای همه تعریف کرد. از سال ۲۰۰۷ که اولین آیفون معرفی شد، هر ساله کمپانی‌های بزرگ منتظر رونمایی آیفون جدید هستند تا قابلیت‌های جدید این گوشی را بررسی و مدلی قابل رقابتی را به بازار عرضه کنند.<!-- --> 
                                        <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">قیمت گوشی آیفون<!-- --> </a> <!-- -->همیشه از سایر برندها بالاتر بوده اما طرفدارانش معمولا تا سال‌ها به آن وفادار می‌مانند. از لیست قیمت آیفون در فروشگاه اینترنتی وی‌جی‌نا می‌توانید انواع گوشی آیفون از مدل‌های آیفون ۱۳ ، آیفون 13 پرو ، آیفون ۱۳ پرومکس گرفته تا آیفون SE را مشاهده کنید و با خیالی راحت از رجیستری آیفون و همینطور ۱۸ ماه ضمانت، آیفون مورد نظر خود را سفارش دهید.</p>
                                    </div>
                                    <div class=" flex w-full flex-col items-start"><h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">خرید گوشی هواوی </h2>
                                        <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">هواوی در طول سال‌های فعالیت خود ثابت کرده است که یکی از نوآوران عرصه تکنولوژی به حساب می‌آید. کاربران گوشی های هواوی می‌دانند که این برند حساسیت ویژه‌ای روی دوربین گوشی های خود دارد. فرقی نمی‌کند شما گوشی اقتصادی هواوی را داشته باشید یا گوشی میان رده هوآوی یا گوشی پرچمدار هواوی، همیشه می‌توانید از دوربین باکیفیت گوشی خود لذت ببرید.<!-- --> 
                                            <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">قیمت گوشی هواوی</a> <!-- -->را همیشه می‌توانید از صفحه گوشی هواوی در سایت وی‌جی‌نا مشاهده و با ضمانت معتبر بخرید.</p>
                                        </div>
                                        <div class=" flex w-full flex-col items-start">
                                            <h2 class="mt-[16px] text-[19px] lg:text-[14px] font-semibold">فروشگاه موبایل، کالای دیجیتال و لوازم جانبی وی‌جی‌نا</h2>
                                            <p class="mt-[8px] text-[14px] font-normal leading-[30px] lg:leading-[27px]">فروشگاه اینترنتی وی‌جی‌نا، اولین و بزرگترین فروشگاه اینترنتی و حضوری کالای دیجیتال در ایران است. از خرید گوشی موبایل یا خرید لپ ‌تاپ تا خرید اسپیکر یا خرید ساعت هوشمند را می‌توانید از فروشگاه اینترنتی وی‌جی‌نا انجام دهید. وی‌جی‌نا علاوه بر فروشگاه اینترنتی، امکان خرید حضوری از شعب خود (۱۰ شعبه در کشور) را فراهم کرده است. شما می‌توانید از یکی از دو روش ذکر شده انواع گوشی‌های سامسونگ، شیائومی، اپل، نوکیا، انواع تبلت، انواع لپتاپ، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">هدفون و هندزفری<!-- --> </a>، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">ساعت هوشمند<!-- --> </a>، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">تلویزیون<!-- --> </a>، انواع<!-- --> 
                                                <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">اسپیکر<!-- --> </a> <!-- -->و<!-- --> <a target="_blank" class="text-[#0085ff] underline underline-offset-4" rel="noopener noreferrer" href="#">ساندبار<!-- --> </a>، گجت‌های هوشمند و سایر کالاهای دیجیتال را با بهترین قیمت و معتبر ترین گارانتی خریداری کنید. همچنین اگر قصد خرید اینترنتی را دارید می‌توانید تمامی کالاهای دیجیتال را در هر ساعتی از شبانه‌روز و با ارسال سریع از سایت وی‌جی‌نا سفارش دهید.</p>
                                            </div>
                                        </div>
                                        <div id="shadow1" class="absolute bottom-[16px] z-10 flex  w-full select-none flex-row items-end justify-start gap-[4px] px-[56px] text-[14px] duration-75 h-[140px] gradient-active text-[#0085ff]">
                                            <div id="show-all" class="flex items-center cursor-pointer">
                                                <span class="h-[20px] cursor-pointer font-semibold">مشاهده بیشتر</span>
                                                <span id="show-svg" class="h-[20px]  duration-75 -rotate-180 text-[#0085ff] ">
                                            </div>
                                            
                                                <span class="rotate-180">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
    </div>
    
    <?php
    get_footer();
    ?>