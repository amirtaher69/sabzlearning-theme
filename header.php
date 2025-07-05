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
                                    <div><img alt="logo basket empty" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" style="color: transparent;" src="<?php echo THEME_DIR; ?>/src/img/basket-empty.gif"></div>
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
                            <div id="category-model" data-content="mobile" class="flex w-full text-red-500 bg-[#FFFAFA] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-mobile.png" alt=""></div>              
                                <span>موبایل</span>
                            </div>
                            <div id="category-model" data-content="mobile1" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-mobile1.png" alt=""></div>
                                <span>لوازم جانبی موبایل</span>
                            </div>
                            <div id="category-model" data-content="headphone" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/headphone-category.png" alt=""></div>
                                <span>هدفون هندزفری</span>
                            </div>
                            <div id="category-model" data-content="laptop" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-laptop.png" alt=""></div>
                                <span>لپ تاپ و تبلت</span>
                            </div>
                            <div id="category-model" data-content="computer" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-computer.png" alt=""></div>
                                <span>کامپیوتر</span>
                            </div>
                            <div id="category-model" data-content="clock" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-clock.png" alt=""></div>
                                <span>ساعت هوشمند</span>
                            </div>
                            <div id="category-model" data-content="gaming" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-gaming.png" alt=""></div>
                                <span>گیمینگ</span>
                            </div>
                            <div id="category-model" data-content="audio" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-audio.png" alt=""></div>
                                <span>صوتی و تصویری</span>
                            </div>
                            <div id="category-model" data-content="save" class="flex w-full text-[#505050] cursor-pointer items-center py-3 pr-6 text-[14px] font-bold  text-text-normal">
                                <div class="w-[24px] h-[24px]"><img src="<?php echo THEME_DIR; ?>/src/img/category-save.png" alt=""></div>
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
                <a href="./installment.html" class="flex items-center group gap-1">
                    <svg class="text-[#757575] lg:group-hover:text-[#e11010]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10152_59209)"><path d="M20.9941 5.46872C20.973 4.04259 19.8813 3.00147 18.4576 3.00098C14.1532 3.00049 9.84826 3.00098 5.54335 3C5.35281 3 5.16423 3.01277 4.97859 3.055C3.82698 3.31675 3.00244 4.34903 3.00146 5.53895C2.999 8.45358 2.99998 11.3682 3.00195 14.2828C3.00244 14.4351 3.01766 14.5883 3.03878 14.7396C3.20084 15.9211 4.21887 16.8842 5.39111 16.9013C7.04413 16.9259 8.69764 16.9107 10.3511 16.9063C10.7116 16.9053 11.0539 16.6273 11.1521 16.2836C11.243 15.9678 11.0878 15.6088 10.771 15.4035C10.6227 15.3073 10.4611 15.2704 10.2839 15.2709C8.69813 15.2734 7.1119 15.2709 5.52616 15.2734C5.14507 15.2739 4.89462 15.0833 4.72617 14.7602C4.64121 14.5971 4.63679 14.4199 4.63679 14.2416C4.63728 12.4658 4.63925 10.69 4.63336 8.91471C4.63286 8.76297 4.66675 8.72466 4.82095 8.72515C7.20913 8.73055 9.59732 8.72908 11.9855 8.72908C14.3737 8.72908 16.7741 8.73105 19.1682 8.72466C19.3357 8.72417 19.3666 8.77033 19.3632 8.92552C19.3524 9.39058 19.3563 9.85614 19.3602 10.3212C19.3637 10.7681 19.7531 11.1782 20.1725 11.1845C20.5875 11.1914 20.998 10.7823 20.999 10.3364C21.0034 8.71386 21.0177 7.09129 20.9941 5.46872ZM19.1883 7.09571C16.7874 7.09178 14.3864 7.09276 11.9855 7.09276C9.58455 7.09276 7.22043 7.09129 4.83814 7.0962C4.68345 7.09669 4.62746 7.07017 4.63286 6.89976C4.64711 6.46564 4.64956 6.03004 4.63434 5.59542C4.61813 5.12201 4.99284 4.63092 5.60179 4.63337C9.86447 4.65007 14.1272 4.64221 18.3903 4.64221C19.0022 4.64221 19.3568 4.99482 19.3588 5.60672C19.3602 6.04772 19.3519 6.48872 19.3632 6.92972C19.3671 7.07557 19.3185 7.09571 19.1883 7.09571ZM21.6993 16.9102C21.44 18.2784 20.7422 19.3656 19.5851 20.1357C18.6383 20.7657 17.5884 21.0378 16.4451 20.9219C15.3524 20.8114 14.3928 20.395 13.6022 19.6402C12.426 18.5175 11.902 17.1341 12.0886 15.5091C12.2369 14.2205 12.8341 13.1587 13.833 12.3406C14.9198 11.4507 16.1775 11.0917 17.5727 11.2813C18.822 11.4512 19.8459 12.0459 20.6557 13.0085C21.246 13.7112 21.5844 14.5274 21.7273 15.4295C21.7376 15.4934 21.7111 15.5837 21.8162 15.6019C21.7455 15.5027 21.7646 15.3824 21.7474 15.2729C21.3285 12.5856 18.5981 10.7082 15.9334 11.2788C13.3114 11.8401 11.6412 14.2868 12.0749 16.9318C12.4427 19.1736 14.439 20.9214 16.7191 20.9971C19.0017 21.0727 21.0245 19.5896 21.6355 17.387C21.7076 17.1263 21.7563 16.8586 21.8162 16.5939C21.6718 16.6592 21.7194 16.8026 21.6993 16.9102Z" fill="currentColor"></path><path d="M19.357 16.0382C19.3732 16.5411 19.0992 16.8716 18.6145 16.9021C18.3159 16.9212 18.0148 16.906 17.7148 16.906V16.9094C17.4579 16.9094 17.2011 16.9119 16.9438 16.9089C16.3972 16.9026 16.0903 16.5976 16.0873 16.0544C16.0849 15.528 16.0834 15.0015 16.0878 14.4756C16.0932 13.8494 16.6196 13.4831 17.2119 13.6879C17.5341 13.7993 17.7172 14.0665 17.7271 14.454C17.733 14.6868 17.733 14.9195 17.7266 15.1518C17.7236 15.2466 17.7492 15.278 17.8474 15.2756C18.0861 15.2682 18.3252 15.2697 18.5634 15.2741C19.0255 15.2824 19.3428 15.5904 19.357 16.0382Z" fill="currentColor"></path><path d="M21.7477 15.2733C21.3288 12.5861 18.5984 10.7086 15.9337 11.2793C13.3118 11.8406 11.6416 14.2872 12.0752 16.9322C12.443 19.1741 14.4393 20.9219 16.7194 20.9975C19.002 21.0731 21.0249 19.59 21.6358 17.3875C21.708 17.1267 21.7566 16.8591 21.8165 16.5944V15.6024C21.7458 15.5032 21.7649 15.3828 21.7477 15.2733ZM16.9046 19.3592C15.1052 19.3573 13.6349 17.8884 13.6344 16.092C13.6344 14.2921 15.1229 12.8076 16.9198 12.8164C18.7172 12.8252 20.1831 14.302 20.1777 16.0984C20.1718 17.9012 18.7069 19.3612 16.9046 19.3592Z" fill="currentColor"></path><path d="M20.9941 5.46872C20.973 4.04259 19.8813 3.00147 18.4576 3.00098C14.1532 3.00049 9.84826 3.00098 5.54335 3C5.35281 3 5.16423 3.01277 4.97859 3.055C3.82698 3.31675 3.00244 4.34903 3.00146 5.53895C2.999 8.45358 2.99998 11.3682 3.00195 14.2828C3.00244 14.4351 3.01766 14.5883 3.03878 14.7396C3.20084 15.9211 4.21887 16.8842 5.39111 16.9013C7.04413 16.9259 8.69764 16.9107 10.3511 16.9063C10.7116 16.9053 11.0539 16.6273 11.1521 16.2836C11.243 15.9678 11.0878 15.6088 10.771 15.4035C10.6227 15.3073 10.4611 15.2704 10.2839 15.2709C8.69813 15.2734 7.1119 15.2709 5.52616 15.2734C5.14507 15.2739 4.89462 15.0833 4.72617 14.7602C4.64121 14.5971 4.63679 14.4199 4.63679 14.2416C4.63728 12.4658 4.63925 10.69 4.63336 8.91471C4.63286 8.76297 4.66675 8.72466 4.82095 8.72515C7.20913 8.73055 9.59732 8.72908 11.9855 8.72908C14.3737 8.72908 16.7741 8.73105 19.1682 8.72466C19.3357 8.72417 19.3666 8.77033 19.3632 8.92552C19.3524 9.39058 19.3563 9.85614 19.3602 10.3212C19.3637 10.7681 19.7531 11.1782 20.1725 11.1845C20.5875 11.1914 20.998 10.7823 20.999 10.3364C21.0034 8.71386 21.0177 7.09129 20.9941 5.46872ZM19.1883 7.09571C16.7874 7.09178 14.3864 7.09276 11.9855 7.09276C9.58455 7.09276 7.22043 7.09129 4.83814 7.0962C4.68345 7.09669 4.62746 7.07017 4.63286 6.89976C4.64711 6.46564 4.64956 6.03004 4.63434 5.59542C4.61813 5.12201 4.99284 4.63092 5.60179 4.63337C9.86447 4.65007 14.1272 4.64221 18.3903 4.64221C19.0022 4.64221 19.3568 4.99482 19.3588 5.60672C19.3602 6.04772 19.3519 6.48872 19.3632 6.92972C19.3671 7.07557 19.3185 7.09571 19.1883 7.09571Z" fill="currentColor"></path><path d="M19.357 16.0382C19.3732 16.5411 19.0992 16.8716 18.6145 16.9021C18.3159 16.9212 18.0148 16.906 17.7148 16.906V16.9094C17.4579 16.9094 17.2011 16.9119 16.9438 16.9089C16.3972 16.9026 16.0903 16.5976 16.0873 16.0544C16.0849 15.528 16.0834 15.0015 16.0878 14.4756C16.0932 13.8494 16.6196 13.4831 17.2119 13.6879C17.5341 13.7993 17.7172 14.0665 17.7271 14.454C17.733 14.6868 17.733 14.9195 17.7266 15.1518C17.7236 15.2466 17.7492 15.278 17.8474 15.2756C18.0861 15.2682 18.3252 15.2697 18.5634 15.2741C19.0255 15.2824 19.3428 15.5904 19.357 16.0382Z" fill="currentColor"></path><path d="M19.357 16.0382C19.3732 16.5411 19.0992 16.8716 18.6145 16.9021C18.3159 16.9212 18.0148 16.906 17.7148 16.906V16.9094C17.4579 16.9094 17.2011 16.9119 16.9438 16.9089C16.3972 16.9026 16.0903 16.5976 16.0873 16.0544C16.0849 15.528 16.0834 15.0015 16.0878 14.4756C16.0932 13.8494 16.6196 13.4831 17.2119 13.6879C17.5341 13.7993 17.7172 14.0665 17.7271 14.454C17.733 14.6868 17.733 14.9195 17.7266 15.1518C17.7236 15.2466 17.7492 15.278 17.8474 15.2756C18.0861 15.2682 18.3252 15.2697 18.5634 15.2741C19.0255 15.2824 19.3428 15.5904 19.357 16.0382Z" fill="currentColor"></path></g><defs><clipPath id="clip0_10152_59209"><rect width="18.8162" height="18" fill="currentColor" transform="translate(3 3)"></rect></clipPath></defs></svg>
                    <p class="text-[#757575] lg:group-hover:text-[#e11010]">خرید اقساطی</p>
                </a>
                <a href="./mag.html" class="flex items-center group gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#757575]" width="24" height="24" viewBox="0 0 24 24" fill="none"><g clip-path="url(#clip0_12643_82371)"><path d="M15.8594 12.05V9.78998L17.5694 10.92L15.8594 12.05Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.85938 8.71997H8.99937" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.85938 12.66H7.71937" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 6.89C12 6.12352 12.3045 5.38844 12.8465 4.84646C13.3884 4.30448 14.1235 4 14.89 4H21.42" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.0001 6.89C12.0001 6.12352 11.6956 5.38844 11.1536 4.84646C10.6116 4.30448 9.87655 4 9.11008 4H2.58008" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.0001 6.89C12.0001 6.12352 11.6956 5.38844 11.1536 4.84646C10.6116 4.30448 9.87655 4 9.11008 4H2.58008V17.28H9.11008C9.87655 17.28 10.6116 17.5845 11.1536 18.1265C11.6956 18.6684 12.0001 19.4035 12.0001 20.17C12.0001 19.4035 12.3046 18.6684 12.8465 18.1265C13.3885 17.5845 14.1236 17.28 14.8901 17.28H21.4201V4H14.8901C14.1236 4 13.3885 4.30448 12.8465 4.84646C12.3046 5.38844 12.0001 6.12352 12.0001 6.89Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_12643_82371"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
                    <p class="text-[#757575] lg:group-hover:text-[#e11010]">مجله وی جی لند</p>
                </a>
                <a href="./goldenoffer.html" class="flex items-center group gap-1">
                    <svg class="text-[#757575] lg:group-hover:text-[#e11010]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7543 3.45879C11.4721 2.84707 12.5279 2.84707 13.2457 3.45879L14.4667 4.49929C14.7743 4.76143 15.1567 4.91985 15.5596 4.952L17.1587 5.07961C18.0988 5.15463 18.8454 5.90117 18.9204 6.8413L19.048 8.4404C19.0802 8.84327 19.2386 9.22573 19.5007 9.53333L20.5412 10.7543C21.1529 11.4721 21.1529 12.5279 20.5412 13.2457L19.5007 14.4667C19.2386 14.7743 19.0802 15.1567 19.048 15.5596L18.9204 17.1587C18.8454 18.0988 18.0988 18.8454 17.1587 18.9204L15.5596 19.048C15.1567 19.0802 14.7743 19.2386 14.4667 19.5007L13.2457 20.5412C12.5279 21.1529 11.4721 21.1529 10.7543 20.5412L9.53333 19.5007C9.22573 19.2386 8.84327 19.0802 8.4404 19.048L6.8413 18.9204C5.90117 18.8454 5.15463 18.0988 5.07961 17.1587L4.952 15.5596C4.91985 15.1567 4.76143 14.7743 4.49929 14.4667L3.45879 13.2457C2.84707 12.5279 2.84707 11.4721 3.45879 10.7543L4.49929 9.53333C4.76143 9.22573 4.91985 8.84327 4.952 8.4404L5.07961 6.8413C5.15463 5.90117 5.90117 5.15463 6.8413 5.07961L8.4404 4.952C8.84327 4.91985 9.22573 4.76143 9.53333 4.49929L10.7543 3.45879Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 10L10 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10 10H10.1V10.1H10V10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 14H14.1V14.1H14V14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <p class="text-[#757575] lg:group-hover:text-[#e11010]">پیشنهاد طلایی</p>
                </a>
                <a href="#" class="flex items-center group gap-1">
                    <svg class="text-[#757575] lg:group-hover:text-[#e11010]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.1072 17.4495C12.5591 18.1831 11.4499 18.1836 10.9008 17.4505C9.5983 15.7106 7.90407 13.4101 7.01424 12.1773C6.32476 11.2223 6 9.96081 6 8.93611C6 5.65788 8.68648 3 12 3C15.3135 3 18 5.65788 18 8.93611C18 9.96081 17.6747 11.2223 16.9858 12.1773C16.0964 13.4096 14.4077 15.7096 13.1072 17.4495Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"></path><path d="M12 10.5C12.8284 10.5 13.5 9.82843 13.5 9C13.5 8.17157 12.8284 7.5 12 7.5C11.1716 7.5 10.5 8.17157 10.5 9C10.5 9.82843 11.1716 10.5 12 10.5Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"></path><path d="M9 21H14.7283" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <p class="text-[#757575] lg:group-hover:text-[#e11010]">شعب وی جی لند</p>
                </a>
                <a href="./insurance.html" class="flex items-center group gap-1 relative">
                    <svg class="text-[#757575] lg:group-hover:text-[#e11010]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_28725_13753)"><path d="M12 1V2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 19.4916V20.6611V20.6728C8 21.958 8.895 23 10 23C11.105 23 12 21.958 12 20.6728V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.33333 13C10.3586 11.0392 13.6414 11.0392 15.6667 13C17.6919 11.0392 20.9748 11.0392 23 13C22.9841 6.92279 18.0659 2 12 2C5.93411 2 1.01589 6.92279 1 13C3.02522 11.0392 6.30811 11.0392 8.33333 13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_28725_13753"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
                    <p class="text-[#757575] lg:group-hover:text-[#e11010]">خرید بیمه موبایل</p>
                    <div class="w-[54px] h-[28px] bg-[#e10a0a] absolute left-[-34%] top-[-90%] rounded-2xl flex justify-center items-center">
                        <p class="text-white text-[14px] font-normal">کارکرده</p>
                    </div>
                </a>
            </div>
        </div>
    </section>