<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه اینترنتی وی‌جی‌نا | فروشگاه آنلاین خرید گوشی موبایل، کالای دیجیتال و لوازم جانبی</title>
    <link rel="icon" href="<?php echo THEME_DIR; ?>/src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo THEME_DIR; ?>/src/output.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR; ?>/src/swiper-bundle.min.css">
</head>
<body>
    <svg class="hidden">
        <symbol id="arrow-icon" viewBox="0 0 16 16">
            <path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol id="left-arrow" viewBox="0 0 16 16">
            <path d="M6.80781 8L10.7797 11.9688C11.0734 12.2625 11.0734 12.7375 10.7797 13.0281C10.4859 13.3188 10.0109 13.3188 9.71719 13.0281L5.21719 8.53125C4.93281 8.24688 4.92656 7.79063 5.19531 7.49688L9.71406 2.96875C9.86094 2.82187 10.0547 2.75 10.2453 2.75C10.4359 2.75 10.6297 2.82187 10.7766 2.96875C11.0703 3.2625 11.0703 3.7375 10.7766 4.02812L6.80781 8Z" fill="#0085FF"></path>
        </symbol>
        <symbol id="search" viewBox="0 0 24 24">
            <path d="M21 21L16.6588 16.6549C15.209 18.1187 13.223 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11C19 12.073 18.7888 13.0967 18.4056 14.0317" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol id="right-arrow" viewBox="0 0 24 24">
            <path d="M13.7863 12L7.82852 6.04688C7.38789 5.60625 7.38789 4.89375 7.82852 4.45781C8.26914 4.02188 8.98164 4.02188 9.42227 4.45781L16.1723 11.2031C16.5988 11.6297 16.6082 12.3141 16.2051 12.7547L9.42695 19.5469C9.20664 19.7672 8.91602 19.875 8.63008 19.875C8.34414 19.875 8.05352 19.7672 7.8332 19.5469C7.39258 19.1062 7.39258 18.3938 7.8332 17.9578L13.7863 12Z" fill="currentColor"></path>
        </symbol>
        <symbol id="close" viewBox="0 0 26 26">
            <line x1="6.16218" y1="6.56535" x2="18.8901" y2="19.2933" stroke="currentColor" stroke-width="2"></line><line x1="18.8902" y1="6.1617" x2="6.16229" y2="18.8896" stroke="currentColor" stroke-width="2"></line>
        </symbol>
    </svg>
    <div id="mobile-menu" class="z-[9999] fixed w-full h-full hidden" >
        <section class="h-[72px] desktop:h-[206px] z-[55] flex items-center flex-col">
            <div class="flex w-full bg-[#fff] z-[50] relative">
                <div class="w-full desktop:container px-2 desktop:px-0 mx-auto h-[72px] flex items-center justify-between" >
                    <div class="flex w-full justify-center desktop:justify-start items-center gap-0 desktop:gap-[24px]" >
                        <div class="search-bar relative flex items-center gap-[6px] bg-[#f6f5f5] w-full desktop:w-[616px] h-[48px] rounded-[22px]">
                            <div class="right-1 w-[36px] h-[36px] flex justify-center items-center bg-transparent rounded-full mr-1 text-[#e10a0a]">
                                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </div>
                            <div id="search-mobile" class="w-full h-[36px] bg-[#f6f5f5] rounded-[22px] flex items-center relative">
                                <input id="input-search" class="w-full h-full relative hidden desktop:flex items-center outline-none bg-transparent rounded-[22px] text-[16px] font-normal pr-1 placeholder-[#a0a6b2]" type="text" placeholder="جستجو..." >
                                <div class="flex desktop:hidden items-center gap-2 absolute">
                                    <span id="search-input2" class="text-nowrap text-[14px] font-normal text-[#a7a7a7]" >جستجو در</span>
                                    <span>
                                        <p>دیجی لند</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="pop-up" class="fixed top-0 w-[100%] h-0 bg-[#fff] z-50 flex flex-col duration-500 overflow-hidden">
            <div class="h-[80px] mx-5 py-4 flex items-center">
                <div class="w-full h-[48px] bg-[#f9f9f9] rounded-[24px] flex justify-between items-center">
                    <span id="exit-pop-up" class="w-[42px] lg:w-[36px] h-[36px] bg-[#fff] rounded-full mr-[4px] flex justify-center items-center" >
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#right-arrow"></use>
                        </svg>
                    </span>
                    <input class="w-full mx-4 outline-none" type="text" >
                    <span id="exit-pop-up1" class="w-[42px] lg:w-[36px] h-[36px] bg-[#fff] rounded-full ml-[4px] flex justify-center items-center">
                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#close"></use>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="h-[1px] w-full bg-surface-40"></div>
        </div>
        <div class="flex w-full overflow-hidden bg-white">
            <div id="sub-menu-mobile" class="min-w-[102px] overflow-y-scroll overflow-x-hidden bg-[#F6F6F6]" style="height: calc(-142px + 100vh)">
                <div data-state="sub-1" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] Active border border-surface-40 text-text-30 !text-blue-600">
                    <span class="mt-1 max-w-[90%] text-center">موبایل</span>
                </div>
                <div data-state="sub-2" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">لوازم جانبی موبایل</span>
                </div>
                <div data-state="sub-3" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">هدفون و هندزفری</span>
                </div>
                <div data-state="sub-4" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">لپ تاپ و تبلت</span>
                </div>
                <div data-state="sub-5" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">کامپیوتر</span>
                </div>
                <div data-state="sub-6" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">ساعت هوشمند</span>
                </div>
                <div data-state="sub-7" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30">
                    <span class="mt-1 max-w-[90%] text-center">گیمینگ</span>
                </div>
                <div data-state="sub-8" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">صوتی و تصویری</span>
                </div>
                <div data-state="sub-9" class="sub-child flex h-[70px] w-[102px] cursor-pointer flex-col items-center justify-center text-[11px] unActive border border-surface-40 text-text-30" >
                    <span class="mt-1 max-w-[90%] text-center">تجهیزات <br /> ذخیره سازی</span>
                </div>
            </div>
            <div data-target="sub-1" class="menu-category w-full overflow-hidden overflow-y-auto px-4 Active" >
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-210px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model1" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180" >
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model1" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                        <div class="w-full items-center">
                            <div data-model="model11" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model11" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-2" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model2" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model2" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-3" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model3" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model3" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-4" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model4" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model4" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-5" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model5" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model5" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal" >لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-6" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model6" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model6" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-7" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model7" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model7" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-8" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-250px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model8" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model8" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-target="sub-9" class="menu-category hidden w-full overflow-hidden overflow-y-auto px-4 Active">
                <div class="w-full overflow-hidden overflow-y-scroll">
                    <h2 class="flex w-full cursor-pointer items-center py-[10px] pb-[12px] pl-1 text-[12px] font-bold text-[#0085ff]">
                        <span class="relative top-[1px] text-[12px] font-bold">همه محصولات موبایل</span>
                        <span class="mr-1">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                    </h2>
                    <div class="w-full" style="height: calc(-210px + 100vh)">
                        <div class="w-full items-center">
                            <div data-model="model9" class="mobile-model flex w-full items-center justify-between py-3 cursor-pointer">
                                <span class="text-root text-body1-fa text-[14px] font-semibold">موبایل بر اساس برند</span>
                                <div class="arrow-1 flex h-8 w-8 items-center justify-center rounded-md duration-300 rotate-180">
                                    <div class="duration-300">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#arrow-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-model="model9" class="grid mobile-model-1 gap-2 duration-700 overflow-hidden max-h-0">
                                <a href="#" class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لینک یک</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="header" class="fixed top-0 z-[99] bg-[#fff] w-full">
        <div id="banner" class="h-[45px] lg:h-[60px] w-full duration-500">
            <a href="#"><img class="hidden lg:block w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/DESKTOPSECTIONBANNER-head.gif" alt=""></a>
            <a href="./product.html"><img class="flex lg:hidden w-full h-full object-cover" src="<?php echo THEME_DIR; ?>/src/img/MOBILESECTIONBANNER-head.gif" alt=""></a>
        </div>
        <div class="h-[73px] bg-white flex lg:hidden items-center gap-1 !p-[12px]">
            <div id="header_hamburger" class="cursor-pointer">
                <img src="<?php echo THEME_DIR; ?>/src/img/header_hamburger.svg" alt="">
            </div>
            <div id="search-mobile" class="w-full h-[48px] bg-[#f6f5f5] rounded-[22px] flex items-center">
                <div class="flex items-center h-full gap-2">
                    <div class="mr-2 text-[#e21717]">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 21L16.6588 16.6549C15.209 18.1187 13.223 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11C19 12.073 18.7888 13.0967 18.4056 14.0317" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="text-[14px] font-normal text-[#aaaaaa] cursor-text h-[17px]">جستجو در</span>
                        <img alt="vgna main logo" loading="lazy" width="85" height="26" decoding="async" data-nimg="1" style="color: transparent;width: 85px;height: 26px;" src="<?php echo THEME_DIR; ?>/src/img/dgland_main_logo.png">
                    </div>
                </div>
            </div>
        </div>
        <div id="pop-up" class="fixed top-0 w-[100%] h-0 bg-[#fff] z-50 flex flex-col duration-500 overflow-hidden">
            <div class="h-[80px] mx-5 py-4 flex items-center">
                <div class="w-full h-[48px] bg-[#f9f9f9] rounded-[24px] flex justify-between items-center">
                    <span id="exit-pop-up" class="w-[42px] lg:w-[36px] h-[36px] bg-[#fff] rounded-full mr-[4px] flex justify-center items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.7863 12L7.82852 6.04688C7.38789 5.60625 7.38789 4.89375 7.82852 4.45781C8.26914 4.02188 8.98164 4.02188 9.42227 4.45781L16.1723 11.2031C16.5988 11.6297 16.6082 12.3141 16.2051 12.7547L9.42695 19.5469C9.20664 19.7672 8.91602 19.875 8.63008 19.875C8.34414 19.875 8.05352 19.7672 7.8332 19.5469C7.39258 19.1062 7.39258 18.3938 7.8332 17.9578L13.7863 12Z" fill="currentColor"></path></svg>
                    </span>
                    <input class="w-full mx-4 outline-none" type="text">
                    <span id="exit-pop-up1" class="w-[42px] lg:w-[36px] h-[36px] bg-[#fff] rounded-full ml-[4px] flex justify-center items-center">
                        <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="6.16218" y1="6.56535" x2="18.8901" y2="19.2933" stroke="currentColor" stroke-width="2"></line><line x1="18.8902" y1="6.1617" x2="6.16229" y2="18.8896" stroke="currentColor" stroke-width="2"></line></svg>
                    </span>
                </div>
            </div>
            <div class="h-[1px] w-full bg-surface-40"></div>
            <div class="w-full p-4 flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M11.9993 20.0001L4.49932 12.5721C4.00463 12.0907 3.61497 11.5121 3.35487 10.8727C3.09478 10.2333 2.96989 9.54701 2.98806 8.85699C3.00624 8.16697 3.16709 7.48819 3.46048 6.86339C3.75388 6.23859 4.17346 5.68131 4.69281 5.22663C5.21216 4.77196 5.82003 4.42974 6.47814 4.22154C7.13624 4.01333 7.83033 3.94364 8.51669 4.01686C9.20306 4.09007 9.86682 4.30461 10.4662 4.64696C11.0656 4.98931 11.5876 5.45205 11.9993 6.00605C12.7602 4.99403 13.8766 4.30835 15.1233 4.0874C16.37 3.86644 17.6541 4.12669 18.7164 4.81559C19.7787 5.5045 20.5401 6.57076 20.8469 7.79916C21.1536 9.02755 20.983 10.3266 20.3693 11.4341M20.1992 20.2L21.9992 22M15 18C15 18.7956 15.3161 19.5587 15.8787 20.1213C16.4413 20.6839 17.2044 21 18 21C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 17.2044 20.6839 16.4413 20.1213 15.8787C19.5587 15.3161 18.7956 15 18 15C17.2044 15 16.4413 15.3161 15.8787 15.8787C15.3161 16.4413 15 17.2044 15 18Z" stroke="#A4A4A4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <span class="text-[14px] font-bold">جستجوهای پرطرفدار</span>
                </div>
                <div class="flex items-center gap-3 overflow-hidden overflow-x-auto overflow-y-hidden hide-scrollbar hideScrollbar">
                    <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1">
                        <p class="text-[14px] font-normal text-[#505050]">پاوربانک</p>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1">
                        <p class="text-[14px] font-normal text-[#505050]">آیفون 16</p>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1">
                        <p class="text-[14px] font-normal text-[#505050]">ساعت</p>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1">
                        <p class="text-[14px] font-normal text-[#505050]">هارد اکسترنال</p>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1">
                        <p class="text-[14px] font-normal text-[#505050]">هارد اکسترنال</p>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1">
                        <p class="text-[14px] font-normal text-[#505050]">هارد اکسترنال</p>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="container mx-auto hidden lg:block">
            <div class="max-w-screen-xl mx-auto h-[72px] flex justify-between items-center">
                <div class="flex gap-[24px] relative">
                    <div class="w-[150px] h-[40px]"><img class="w-full h-full" src="<?php echo THEME_DIR; ?>/src/img/dgland_main_logo.png" alt=""></div>
                    <div class="w-[616px] h-[40px] bg-[#f6f5f5] rounded-[22px] relative flex items-center">
                    <div class="rounded-full w-[36px] h-[36px] absolute right-2 bg-white flex justify-center items-center">
                        <svg class="text-[#e11010]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 21L16.6588 16.6549C15.209 18.1187 13.223 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11C19 12.073 18.7888 13.0967 18.4056 14.0317" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <input id="input-search" class="absolute right-12 outline-none h-full placholder-[#a6abb6] " placeholder="جستجو ..." type="text">
                    <div id="pop-up-desktop" class="w-[616px] h-[216px] bg-white absolute top-[50px] shadow-2xl z-60 rounded-[10px] rounded-t-[22px] p-[30px] hidden flex-col gap-4">
                        <div class="flex gap-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none"><path d="M18.993 9.64601C18.9242 7.89624 18.3464 6.20456 17.3304 4.77828C16.3144 3.352 14.9045 2.25309 13.2733 1.61622C11.642 0.979341 9.86047 0.832167 8.14687 1.19273C6.43326 1.55329 4.86207 2.40593 3.62582 3.64616C2.38958 4.88638 1.542 6.46031 1.18694 8.17507C0.831888 9.88982 0.984788 11.6709 1.6269 13.3001C2.26902 14.9292 3.37246 16.3357 4.80199 17.347C6.23153 18.3584 7.92506 18.9308 9.67504 18.994M10 5V10L11 11M18.1992 18.2L19.9992 20M13 16C13 16.7956 13.3161 17.5587 13.8787 18.1213C14.4413 18.6839 15.2044 19 16 19C16.7956 19 17.5587 18.6839 18.1213 18.1213C18.6839 17.5587 19 16.7956 19 16C19 15.2044 18.6839 14.4413 18.1213 13.8787C17.5587 13.3161 16.7956 13 16 13C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16Z" stroke="#A4A4A4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </div>
                            <div>
                                <p class="text-[14px] font-bold">آخرین جستجوهای شما</p>
                            </div>
                        </div>
                        <div class="text-[14px] font-normal bg-[#f9f9f9] w-[168px] h-[32px] flex justify-between items-center rounded-[8px] px-1 cursor-pointer">
                            <p>گوشی سامسونگ A16</p> 
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div class="flex gap-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M11.9993 20.0001L4.49932 12.5721C4.00463 12.0907 3.61497 11.5121 3.35487 10.8727C3.09478 10.2333 2.96989 9.54701 2.98806 8.85699C3.00624 8.16697 3.16709 7.48819 3.46048 6.86339C3.75388 6.23859 4.17346 5.68131 4.69281 5.22663C5.21216 4.77196 5.82003 4.42974 6.47814 4.22154C7.13624 4.01333 7.83033 3.94364 8.51669 4.01686C9.20306 4.09007 9.86682 4.30461 10.4662 4.64696C11.0656 4.98931 11.5876 5.45205 11.9993 6.00605C12.7602 4.99403 13.8766 4.30835 15.1233 4.0874C16.37 3.86644 17.6541 4.12669 18.7164 4.81559C19.7787 5.5045 20.5401 6.57076 20.8469 7.79916C21.1536 9.02755 20.983 10.3266 20.3693 11.4341M20.1992 20.2L21.9992 22M15 18C15 18.7956 15.3161 19.5587 15.8787 20.1213C16.4413 20.6839 17.2044 21 18 21C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 17.2044 20.6839 16.4413 20.1213 15.8787C19.5587 15.3161 18.7956 15 18 15C17.2044 15 16.4413 15.3161 15.8787 15.8787C15.3161 16.4413 15 17.2044 15 18Z" stroke="#A4A4A4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </div>
                            <div>
                                <p class="text-[14px] font-bold">جستجو های پرطرفدار</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 overflow-hidden overflow-x-auto overflow-y-hidden hide-scrollbar hideScrollbar">
                            <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1 cursor-pointer">
                                <button class="text-[14px] font-normal text-[#505050]">پاوربانک</button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                            <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1 cursor-pointer">
                                <button class="text-[14px] font-normal text-[#505050]">آیفون 16</button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                            <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1 cursor-pointer">
                                <button class="text-[14px] font-normal text-[#505050]">ساعت</button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                            <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1 cursor-pointer">
                                <button class="text-[14px] font-normal text-[#505050]">هارد اکسترنال</button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                            <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1 cursor-pointer">
                                <button class="text-[14px] font-normal text-[#505050]">هارد اکسترنال</button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                            <span class="min-w-[124px] h-[35px] rounded-[8px] bg-[#f9f9f9] flex items-center justify-between px-1 cursor-pointer">
                                <button class="text-[14px] font-normal text-[#505050]">هارد اکسترنال</button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <button data-dialog-target="modal-login" class="w-[135px] h-[41px] border border-surface-normal rounded-[10px] flex justify-center items-center gap-1 text-[#e31e1e] cursor-pointer">
                        <svg class="rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.71505 4C7.85847 4 7.27617 4.00078 6.82608 4.03755C6.38767 4.07337 6.16347 4.1383 6.00707 4.21799C5.63074 4.40973 5.32478 4.7157 5.13303 5.09202C5.05334 5.24842 4.98842 5.47262 4.9526 5.91104C4.91582 6.36113 4.91505 6.94342 4.91505 7.8V15.2843C4.91505 16.1408 4.91582 16.7231 4.9526 17.1732C4.98842 17.6116 5.05334 17.8358 5.13303 17.9922C5.32478 18.3686 5.63074 18.6745 6.00707 18.8663C6.16347 18.946 6.38767 19.0109 6.82609 19.0467C7.27617 19.0835 7.85847 19.0843 8.71504 19.0843H11.1759C11.9835 19.0843 12.5325 19.0836 12.9576 19.0508C13.3721 19.0188 13.5853 18.9607 13.7342 18.8898C14.1484 18.6925 14.4823 18.3587 14.6796 17.9444C14.7505 17.7956 14.8086 17.5823 14.8405 17.1679C14.8733 16.7427 14.874 16.1937 14.874 15.3861L14.874 14.959C14.874 14.4067 15.3217 13.959 15.874 13.959C16.4263 13.959 16.874 14.4067 16.874 14.959L16.874 15.3861L16.874 15.425V15.425C16.874 16.184 16.874 16.8105 16.8346 17.3217C16.7937 17.8523 16.7059 18.3412 16.4852 18.8045C16.0905 19.6331 15.4229 20.3007 14.5943 20.6954C14.131 20.9161 13.6421 21.0039 13.1115 21.0448C12.6002 21.0843 11.9738 21.0843 11.2148 21.0843H11.1759H8.71504H8.67382C7.86882 21.0843 7.20443 21.0843 6.66322 21.0401C6.10112 20.9941 5.58442 20.8956 5.09909 20.6483C4.34644 20.2648 3.73452 19.6529 3.35102 18.9002C3.10373 18.4149 3.00517 17.8982 2.95924 17.3361C2.91503 16.7949 2.91504 16.1306 2.91505 15.3256V15.3255V15.2843V7.8V7.75873C2.91503 6.95374 2.91502 6.28938 2.95924 5.74818C3.00517 5.18608 3.10373 4.66937 3.35102 4.18404C3.73451 3.43139 4.34644 2.81947 5.09908 2.43597C5.58442 2.18868 6.10112 2.09012 6.66322 2.04419C7.20442 1.99998 7.86878 1.99999 8.67375 2H8.71505H11.1758H11.2147C11.9738 1.99999 12.6002 1.99998 13.1115 2.03942C13.6421 2.08035 14.131 2.16812 14.5944 2.38885C15.4229 2.78355 16.0905 3.45115 16.4852 4.27966C16.7059 4.74298 16.7937 5.2319 16.8346 5.76255C16.874 6.27379 16.874 6.90027 16.874 7.65929V7.6593L16.874 7.6982L16.874 8.12528C16.874 8.67756 16.4263 9.12528 15.874 9.12528C15.3217 9.12528 14.874 8.67756 14.874 8.12528L14.874 7.6982C14.874 6.89056 14.8733 6.34156 14.8405 5.91638C14.8086 5.5019 14.7505 5.28868 14.6796 5.13983C14.4822 4.72557 14.1485 4.39177 13.7342 4.19442C13.5853 4.12351 13.3721 4.06547 12.9576 4.03349C12.5325 4.00069 11.9835 4 11.1758 4H8.71505ZM10.8966 7.41399C11.2871 7.02346 11.9202 7.02346 12.3108 7.41399C12.7013 7.80451 12.7013 8.43768 12.3108 8.8282L10.601 10.5379H21C21.5523 10.5379 22 10.9857 22 11.5379C22 12.0902 21.5523 12.5379 21 12.5379H10.601L12.3108 14.2477C12.7013 14.6382 12.7013 15.2714 12.3108 15.6619C11.9202 16.0524 11.2871 16.0524 10.8966 15.6619L7.4797 12.2451C7.08918 11.8545 7.08918 11.2214 7.4797 10.8308L10.8966 7.41399Z" fill="currentColor"></path></svg>
                        <p class="text-[14px] font-normal">ورود | ثبت‌نام</p>
                    </button>
                    <div
                        data-dialog-backdrop="modal-login"
                        data-dialog-backdrop-close="true"
                        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center opacity-0 transition-opacity duration-300"
                    >
                        <!-- پس‌زمینه تار و نیمه‌شفاف -->
                        <div class="absolute inset-0 bg-black/30 backdrop-blur-sm z-0"></div>
                    
                        <!-- Modal محتوا -->
                        <section
                        data-dialog="modal-login"
                        class="relative m-4 w-full max-w-md rounded-xl bg-white px-6 py-6 shadow-lg z-10 transition-all duration-300 scale-95 opacity-0"
                        >
                        <!-- دکمه بستن -->
                        <div class="flex w-full cursor-pointer justify-end" data-dialog-close="true">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="6.16218" y1="6.56535" x2="18.8901" y2="19.2933" stroke="currentColor" stroke-width="2" />
                            <line x1="18.8902" y1="6.1617" x2="6.16229" y2="18.8896" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                    
                        <!-- عنوان -->
                        <div class="flex w-full flex-col items-center justify-center">
                            <div class="flex w-full items-center justify-center font-mainFa text-[20px] font-bold">ورود یا ثبت نام</div>
                            <div class="mt-[34px] font-mainFa font-medium text-dark_grey">
                            لطفا برای ادامه شماره همراه خود را وارد نمایید
                            </div>
                    
                            <!-- فیلد شماره همراه -->
                            <div class="mt-[25px] flex w-full justify-center">
                            <div class="w-full">
                                <div dir="rtl" class="relative flex h-[50px] w-full justify-start font-mainFa">
                                <div class="absolute z-20 flex justify-start px-[5px] -mt-[13px] h-[20px] w-full duration-150">
                                    <div class="z-20 flex justify-start duration-150 bg-white scale-75 text-red-primary">
                                    <span class="px-[10px]"> شماره همراه</span>
                                    </div>
                                </div>
                                <div class="relative h-[50px] w-full">
                                    <div
                                    class="flex h-full w-full flex-row items-center justify-between rounded-[8px] px-[5px] text-[16px] border-[1px] border-red-primary focus-within:border-[2px]"
                                    >
                                    <input
                                        inputmode="text"
                                        type="tel"
                                        class="text-base-text-light-1 h-full w-full bg-transparent px-4 font-mainFa caret-primary-40 outline-none"
                                        value=""
                                    />
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                    
                            <!-- پیام خطا -->
                            <div class="flex w-full justify-start px-[10px] text-[12px] text-red-primary invisible">
                            شماره همراه وارد شده اشتباه است
                            </div>
                    
                            <!-- دکمه ادامه -->
                            <button
                            class="mt-[18px] flex h-[56px] w-full select-none items-center justify-center rounded-[10px] font-mainFa text-[18px] font-bold text-white cursor-default bg-red-600"
                            >
                            ادامه
                            </button>
                    
                            <!-- متن شرایط -->
                            <div class="mt-[40px] flex w-full flex-row items-start font-mainFa text-[12px] text-center">
                            <div class="flex h-[60px] w-full flex-row items-start justify-center gap-[3px] break-words">
                                <span>ورود شما به معنای پذیرش </span>
                                <p class="underline text-red-500 cursor-pointer">شرایط و قوانین وی‌جی‌نا</p>
                                <span> است.</span>
                            </div>
                            </div>
                        </div>
                        </section>
                    </div>
  
                    <div class="w-[42px] h-[42px] flex justify-center items-center border border-surface-normal rounded-[10px] group relative cursor-pointer">
                        <img src="<?php echo THEME_DIR; ?>/src/img/header_cart.svg" alt="">
                        <div class="absolute top-[24px] z-10 ml-[40px] border-surface-normal hidden w-[420px] flex-col items-end justify-center gap-1 rounded-lg p-4  pr-[20px] text-[14px] font-light  text-black duration-500  lg:group-hover:flex">
                            <div class="z-10 ml-[160px] h-[32px] w-[32px] rotate-45 border-surface-normal border-l border-t  bg-white"></div>
                            <div class=" -mt-[20px] ml-[130px] h-full w-full rounded-[14px] border-surface-normal border bg-white  py-[13px] shadow-2xl ">
                                <div class=" flex h-full w-full flex-col items-center gap-[10px] text-[16px] font-semibold text-[#CDCDCD]">
                                    <div class="mt-[8px] flex w-full justify-end border-b px-[16px]">
                                        <a href="#">
                                            <div class="mb-[5px] flex flex-row items-center gap-[18px] text-[#0085ff]">
                                                <p class="text-[12px] font-medium  ">مشاهده سبد خرید</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div><img alt="logo basket empty" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" style="color: transparent;" src="./src/img/basket-empty.gif"></div>
                                    <div>سبد خرید شما خالی است</div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="max-w-screen-xl mx-auto h-[72px] flex items-center gap-6">
                <div id="category-kala" class="flex gap-1 items-center text-[#6b6b6b] hover:text-[#e31d1d] cursor-pointer relative"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4.16176 15.9368C4 16.3273 4 16.8223 4 17.8125C4 18.8026 4 19.2977 4.16176 19.6882C4.37743 20.2089 4.79136 20.6226 5.31205 20.8382C5.70257 21 6.19764 21 7.18777 21C8.1779 21 8.67272 21 9.06323 20.8382C9.58392 20.6226 9.9975 20.2089 10.2132 19.6882C10.3749 19.2977 10.3749 18.8026 10.3749 17.8125C10.3749 16.8224 10.3749 16.3273 10.2132 15.9368C9.9975 15.4161 9.58392 15.0024 9.06323 14.7867C8.67272 14.625 8.1779 14.625 7.18777 14.625C6.19763 14.625 5.70257 14.625 5.31205 14.7867C4.79136 15.0024 4.37743 15.4161 4.16176 15.9368Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.7868 5.31178C14.6251 5.70229 14.6251 6.19736 14.6251 7.18748C14.6251 8.17761 14.6251 8.67268 14.7868 9.0632C15.0025 9.58388 15.4164 9.99758 15.9371 10.2133C16.3276 10.375 16.8227 10.375 17.8128 10.375C18.803 10.375 19.2978 10.375 19.6883 10.2133C20.209 9.99758 20.6226 9.58388 20.8382 9.0632C21 8.67268 21 8.17762 21 7.1875C21 6.19737 21 5.70229 20.8382 5.31178C20.6226 4.7911 20.209 4.37743 19.6883 4.16176C19.2978 4 18.803 4 17.8128 4C16.8227 4 16.3276 4 15.9371 4.16176C15.4164 4.37743 15.0025 4.7911 14.7868 5.31178Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.16176 5.31178C4 5.70229 4 6.19736 4 7.18748C4 8.17761 4 8.67268 4.16176 9.0632C4.37743 9.58388 4.79136 9.99758 5.31205 10.2133C5.70257 10.375 6.19764 10.375 7.18777 10.375C8.1779 10.375 8.67272 10.375 9.06323 10.2133C9.58392 9.99758 9.9975 9.58388 10.2132 9.0632C10.3749 8.67268 10.3749 8.17762 10.3749 7.1875C10.3749 6.19737 10.3749 5.70229 10.2132 5.31178C9.9975 4.7911 9.58392 4.37743 9.06323 4.16176C8.67272 4 8.1779 4 7.18777 4C6.19763 4 5.70257 4 5.31205 4.16176C4.79136 4.37743 4.37743 4.7911 4.16176 5.31178Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.7868 15.9368C14.6251 16.3273 14.6251 16.8223 14.6251 17.8125C14.6251 18.8026 14.6251 19.2977 14.7868 19.6882C15.0025 20.2089 15.4164 20.6226 15.9371 20.8382C16.3276 21 16.8227 21 17.8128 21C18.803 21 19.2978 21 19.6883 20.8382C20.209 20.6226 20.6226 20.2089 20.8382 19.6882C21 19.2977 21 18.8026 21 17.8125C21 16.8224 21 16.3273 20.8382 15.9368C20.6226 15.4161 20.209 15.0024 19.6883 14.7867C19.2978 14.625 18.803 14.625 17.8128 14.625C16.8227 14.625 16.3276 14.625 15.9371 14.7867C15.4164 15.0024 15.0025 15.4161 14.7868 15.9368Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span class="text-[16px] font-bold">دسته بندی کالاها</span>
                    <div id="sub-menu" class="max-h-[560px] h-[480px] hidden overflow-hidden absolute z-50 top-[39px]">
                        <div class="max-h-[560px] h-[480px] w-[1143px] bg-[#fff] flex justify-start">
                            <div class="w-[232px] max-h-[542px] flex flex-col items-start">
                            <div data-content="mobile" class="category-model flex w-full text-red-500 bg-[#FFFAFA] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">         
                                <span>موبایل</span>
                            </div>
                            <div data-content="mobile1" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>لوازم جانبی موبایل</span>
                            </div>
                            <div data-content="headphone" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>هدفون هندزفری</span>
                            </div>
                            <div data-content="laptop" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>لپ تاپ و تبلت</span>
                            </div>
                            <div data-content="computer" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>کامپیوتر</span>
                            </div>
                            <div data-content="clock" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>ساعت هوشمند</span>
                            </div>
                            <div data-content="gaming" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>گیمینگ</span>
                            </div>
                            <div data-content="audio" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>صوتی و تصویری</span>
                            </div>
                            <div data-content="save" class="category-model flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <span>تجهیزات ذخیره سازی</span>
                            </div>
                            </div>
                            <div class="w-full px-[24px] flex flex-col">
                                <div class="h-[60px] text-[12px] font-bold text-[#0085ff] pt-[10px] pb-[26px] flex">
                                    <a class="flex items-center" href="#">
                                        <span> همه محصولات <span>موبایل</span></span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15.41 16.59L10.83 12L15.41 7.41L14 6L8 12L14 18L15.41 16.59Z" fill="#0085FF"></path></svg>
                                    </a>
                                    
                                </div>
                                <div class="flex flex-col h-[615px]">
                                    <div id="menu-item" class="flex w-full flex-row flex-wrap ">
                                        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
                                            <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">موبایل بر اساس برند</p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                        </div>
                                        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
                                            <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">موبایل بر اساس کاربرد</p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                        </div>
                                        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
                                            <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">موبایل بر اساس قیمت</p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                            <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
                                                موبایل سامسونگ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div id="shadow" class="fixed left-0 right-0 top-[203px] min-h-screen w-screen bg-black opacity-30 hidden z-[49]">

                    </div>
                </div>
                <?php
                $menu_name = "primary";
                $locations = get_nav_menu_locations();

                if(isset($locations[$menu_name])){
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                }
                if(isset($menu_items)){
                    foreach($menu_items as $item){ ?>
                        <a href="<?php echo $item->url; ?>" class="flex items-center group gap-1">
                            <p class="text-[#757575] lg:group-hover:text-[#e11010]"><?php echo $item->title; ?></p>
                        </a>
                    <?php }
                } ?>
            </div>
        </div>
    </section>
    <div id="side-bar" class="fixed top-0 z-[99] flex h-full w-full select-none items-start justify-start overflow-auto duration-300 translate-x-full">
        <div id="side-bar2" class="fixed left-0 top-0 z-[97] h-screen w-0 bg-transparent opacity-10"></div>
        <div class=" z-[97] flex min-h-screen w-[300px] overflow-scroll bg-white px-[16px] pb-[80px] pt-[30px]">
            <div class=" relative flex h-full w-full flex-col items-start ">
                <div class="w-full">
                    <a href="#">
                        <img alt="vgna main logo" loading="lazy" width="148" height="35" decoding="async" data-nimg="1" style="color:transparent" src="<?php echo THEME_DIR; ?>/src/img/dgland_main_logo.png">
                    </a>
                </div>
                <?php
                $menu_name = "primary";
                $locations = get_nav_menu_locations();

                if(isset($locations[$menu_name])){
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                }
                if(isset($menu_items)){
                    foreach($menu_items as $item){ ?>
                        <a href="<?php echo $item->url; ?>">
                            <div class="flex mt-5 h-[40px] w-full flex-row items-center gap-[10px] border-light_grey text-[16px] font-bold text-dark_grey">
                                <span><?php echo $item->title; ?></span>
                            </div>
                        </a>
                    <?php }
                } ?>
            </div>
        </div>
    </div>