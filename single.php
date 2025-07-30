<?php
get_header();

$post_id = get_the_ID();
$post_thumbnail = get_the_post_thumbnail_url($post_id);
$post_title = get_the_title();
$post_date = get_the_date('Y M d' , $post_id);
$author_id = get_post_field('post_author' , $post_id );
$author_name = get_the_author_meta('display_name' , $author_id);

?>
    <section class="max-w-[1250px] mx-auto mt-[124px] lg:mt-[200px] flex flex-col lg:flex-row gap-20">
        <div class="w-full lg:max-w-[66.666667%] flex flex-col gap-7 px-[15px]">
            <h1 class="w-full lg:w-[800px] text-[24px] font-semibold"><?php echo $post_title; ?></h1>
            <div class="flex lg:hidden justify-center flex-row items-center mx-[20px] text-[11px] font-bold gap-2 text-white">
                    <div class="flex items-center justify-center px-[10px] h-[19px] rounded-[4px] bg-[#007bff]">   
                        تکنولوژی        
                    </div>
                    <div class="flex items-center justify-center px-[10px] h-[19px] rounded-[4px] bg-[#fc4a00]">
                        منتخب
                    </div>
                </div>
            <div class="flex items-center justify-between gap-2 lg:gap-0">
                <div class="hidden lg:flex flex-col lg:flex-row items-center mx-[20px] text-[11px] font-bold gap-2 text-white">
                    <div class="flex items-center justify-center px-[10px] h-[19px] rounded-[4px] bg-[#007bff]">   
                        تکنولوژی        
                    </div>
                    <div class="flex items-center justify-center px-[10px] h-[19px] rounded-[4px] bg-[#fc4a00]">
                        منتخب
                    </div>
                </div>
                <div class="flex flex-wrap justify-center lg:justify-start items-center gap-1">   
                    <div><img class="rounded-full" width="45" height="45" src="<?php echo THEME_DIR; ?>/src/img/Default_Profile_Picture1.jpg" alt=""></div>
                    <a class="text-[14px] font-semibold" href="#"><?php echo $author_name; ?></a>
                </div>
                <div class="flex flex-wrap gap-2 lg:gap-4 text-[14px] font-normal text-[#6f6f6f]">
                    <p><?php echo $post_date; ?> </p>
                    <p>زمان مورد نیاز برای مطالعه: 2 دقیقه</p>
                </div>
            </div>
            <?php if($post_thumbnail){ ?>
                <img class="w-full h-auto lg:h-[450px] rounded-[4px]" src="<?php echo $post_thumbnail; ?>" alt="<?php echo $post_title; ?> ">
            <?php } ?>
            
            <div class="text-[14px] font-normal leading-[28px]">
                <?php the_content(); ?>
            </div>


 
            <div class="flex gap-2 items-center py-[20px] border-t border-b border-[#c5c5c5] mb-[15px]">
                <img class="w-[70px] h-[70px] rounded-full" src="<?php echo THEME_DIR; ?>/src/img/profile.jpg" alt="">
                <p class="text-[#6d6d6d] text-[14px] font-bold">محمود یزدان پناه</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex flex-col lg:flex-row items-start lg:items-center gap-4">
                    <img class="w-[95px] h-[75px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/iphone-16-registery.jpg" alt="">
                    <div class="flex flex-col">
                        <a href="#"><h5 class="text-[16px] font-semibold text-black hover:text-red-600">مطلب قبل</h5></a>
                        <a href="#"><p>رجیستری آیفون ۱۶ در ایران | هزینه، روش‌ها…</p></a>
                    </div>
                </div> 
                <div class="flex flex-col-reverse lg:flex-row items-end lg:items-center gap-2">
                    <div class="flex flex-col items-end">
                        <a href="#"><h5 class="text-[16px] font-semibold text-black hover:text-red-600">مطلب بعد</h5></a>
                        <a href="#"><p class="text-[14px] font-normal line-clamp-2 text-left lg:text-right"> راهنمای گام‌به‌گام فعال‌ سازی <br> Apple Intelligence؛ از صفر…</p></a>
                    </div>
                    <img class="w-[110px] h-[75px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/apple-intelligence-2.jpg" alt="">
                </div>
            </div>
            <div class="mt-[20px]">
                <div class="text-[14px] font-bold text-[#6a6a6a]">
                    مطالب مرتبط
                </div>
                <div class="swiper swiper-product-mag">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide !flex flex-col gap-4">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/buing-installment.jpg" alt="">
                                    <a href="#" class="h-[19px] text-[11px] font-bold absolute bottom-[10px] right-[10px] px-[10px] bg-[#fc4a00] text-white rounded-[4px]">راهنمای خرید</a>
                                </a>
                            </div>
                            <a href="#" class="text-[18px] font-bold text-black hover:text-red-600">راهنمای کامل خرید قسطی لپ تاپ +...</a>
                            <div class="flex items-center gap-2">
                                <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#000" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                <p class="text-[14px] font-normal">28 اردیبهشت 1403</p>
                            </div>
                        </div>
                        <div class="swiper-slide !flex flex-col gap-4">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/buing-installment.jpg" alt="">
                                    <a href="#" class="h-[19px] text-[11px] font-bold absolute bottom-[10px] right-[10px] px-[10px] bg-[#fc4a00] text-white rounded-[4px]">راهنمای خرید</a>
                                </a>
                            </div>
                            <a href="#" class="text-[18px] font-bold text-black hover:text-red-600">راهنمای کامل خرید قسطی لپ تاپ +...</a>
                            <div class="flex items-center gap-2">
                                <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#000" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                <p class="text-[14px] font-normal">28 اردیبهشت 1403</p>
                            </div>
                        
                        </div>
                        <div class="swiper-slide !flex flex-col gap-4">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/buing-installment.jpg" alt="">
                                    <a href="#" class="h-[19px] text-[11px] font-bold absolute bottom-[10px] right-[10px] px-[10px] bg-[#fc4a00] text-white rounded-[4px]">راهنمای خرید</a>
                                </a>
                            </div>
                            <a href="#" class="text-[18px] font-bold text-black hover:text-red-600">راهنمای کامل خرید قسطی لپ تاپ +...</a>
                            <div class="flex items-center gap-2">
                                <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#000" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                <p class="text-[14px] font-normal">28 اردیبهشت 1403</p>
                            </div>
                        
                        </div>
                        <div class="swiper-slide !flex flex-col gap-4">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/buing-installment.jpg" alt="">
                                    <a href="#" class="h-[19px] text-[11px] font-bold absolute bottom-[10px] right-[10px] px-[10px] bg-[#fc4a00] text-white rounded-[4px]">راهنمای خرید</a>
                                </a>
                            </div>
                            <a href="#" class="text-[18px] font-bold text-black hover:text-red-600">راهنمای کامل خرید قسطی لپ تاپ +...</a>
                            <div class="flex items-center gap-2">
                                <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#000" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                <p class="text-[14px] font-normal">28 اردیبهشت 1403</p>
                            </div>
                        
                        </div>
                        <div class="swiper-slide !flex flex-col gap-4">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/buing-installment.jpg" alt="">
                                    <a href="#" class="h-[19px] text-[11px] font-bold absolute bottom-[10px] right-[10px] px-[10px] bg-[#fc4a00] text-white rounded-[4px]">راهنمای خرید</a>
                                </a>
                            </div>
                            <a href="#" class="text-[18px] font-bold text-black hover:text-red-600">راهنمای کامل خرید قسطی لپ تاپ +...</a>
                            <div class="flex items-center gap-2">
                                <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#000" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                <p class="text-[14px] font-normal">28 اردیبهشت 1403</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="w-full flex flex-col py-8 gap-6">
                <div class="grid grid-cols-2 gap-6">
                    <div class="border border-[#d4d4d4] px-[12px] py-[10px] rounded-[5px]">
                        <input class="outline-none w-full" type="text" placeholder="نام">
                    </div>
                    <div class="border border-[#d4d4d4] px-[12px] py-[10px] rounded-[5px]">
                        <input class="outline-none w-full" type="text" placeholder="ایمیل">
                    </div>
                </div>
                    <div class="border border-[#d4d4d4] px-[12px] py-[10px] rounded-[5px]">
                        <input class="outline-none w-full" type="text" placeholder="وبسایت">
                    </div>
                <textarea class="textArea-root peer border border-[#d4d4d4] px-[12px] py-[10px] rounded-[5px] outline-none" rows="6" dir="rtl" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" placeholder="دیدگاه"></textarea>
                <div class="col-span-2 flex w-full justify-start">
                    <button data-variant="filled" class="px-[35px] bg-red-600 text-white h-[45px] font-bold">
                        <div class="flex items-center gap-6">ارسال دیدگاه</div>
                    </button>
                </div>
        </form>
        </div>
        <div class="w-full lg:max-w-[25%] flex flex-col gap-12 px-[15px]">
            <a href="#" class="w-full lg:w-[290px] h-[311px] border border-[#ede9e9] flex items-center flex-col justify-between rounded-[10px]">
                <img class="w-[180px] h-[180px]" src="<?php echo THEME_DIR; ?>/src/img/PrdImages-power.jpg" alt="">
                <p class="text-[14px] font-normal px-[10px]">پاوربانک ریمکس مگ سیف مدلRPP-527 ظرفیت 10000 میلی آمپر ساعت</p>
                <div class="flex justify-between items-center w-full px-[10px] pb-[5px]">
                    <div class="w-[35px] h-[35px] flex justify-center items-center text-white bg-red-500 rounded-full">
                    51%
                    </div>
                    <div class="text-[14px] font-normal text-red-500">
                        1379000 تومان
                    </div>
                    <div class="text-[14px] font-normal text-[#969696] line-through">
                        2800000 تومان
                    </div>
                </div>
            </a>
            <a class="w-full lg:w-[290px]" href="#">
                <img src="<?php echo THEME_DIR; ?>/src/img/Franchise_Mobile.webp" alt="">
            </a>
            <a class="w-full lg:w-[290px]" href="#">
                <img src="<?php echo THEME_DIR; ?>/src/img/1424-gif-banner.gif" alt="">
            </a>
            <div class="flex flex-col gap-10">
                <div class="pr-[15px] text-[16px] font-bold text-red-600">
                آخرین مطالب
                </div>
                <div class="flex flex-col gap-15">
                    <div>
                        <a class="flex items-center gap-6 w-full lg:w-[290px] h-[120px]" href="#">
                            <img class="w-[45%] h-[89px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/BEST-KEYBOARD.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-[#fc530d] text-[11px] font-bold">راهنمای خرید کیبورد</p>
                                <p>بهترین کیبوردهای گیمینگ برای نابودی حریفان آنلاین [آپدیت ۲۰۲۵]</p>
                                <div class="flex items-center gap-2">
                                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                    <p class="text-[13px] font-normal text-[#999999]">6 فروردین 1404</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="flex items-center gap-6 w-full lg:w-[290px] h-[120px]" href="#">
                            <img class="w-[45%] h-[89px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/BEST-KEYBOARD.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-[#fc530d] text-[11px] font-bold">راهنمای خرید کیبورد</p>
                                <p>بهترین کیبوردهای گیمینگ برای نابودی حریفان آنلاین [آپدیت ۲۰۲۵]</p>
                                <div class="flex items-center gap-2">
                                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                    <p class="text-[13px] font-normal text-[#999999]">6 فروردین 1404</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="flex items-center gap-6 w-full lg:w-[290px] h-[120px]" href="#">
                            <img class="w-[45%] h-[89px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/BEST-KEYBOARD.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-[#fc530d] text-[11px] font-bold">راهنمای خرید کیبورد</p>
                                <p>بهترین کیبوردهای گیمینگ برای نابودی حریفان آنلاین [آپدیت ۲۰۲۵]</p>
                                <div class="flex items-center gap-2">
                                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                    <p class="text-[13px] font-normal text-[#999999]">6 فروردین 1404</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="flex items-center gap-6 w-full lg:w-[290px] h-[120px]" href="#">
                            <img class="w-[45%] h-[89px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/BEST-KEYBOARD.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-[#fc530d] text-[11px] font-bold">راهنمای خرید کیبورد</p>
                                <p>بهترین کیبوردهای گیمینگ برای نابودی حریفان آنلاین [آپدیت ۲۰۲۵]</p>
                                <div class="flex items-center gap-2">
                                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                    <p class="text-[13px] font-normal text-[#999999]">6 فروردین 1404</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="flex items-center gap-6 w-full lg:w-[290px] h-[120px]" href="#">
                            <img class="w-[45%] h-[89px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/BEST-KEYBOARD.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-[#fc530d] text-[11px] font-bold">راهنمای خرید کیبورد</p>
                                <p>بهترین کیبوردهای گیمینگ برای نابودی حریفان آنلاین [آپدیت ۲۰۲۵]</p>
                                <div class="flex items-center gap-2">
                                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                    <p class="text-[13px] font-normal text-[#999999]">6 فروردین 1404</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="flex items-center gap-6 w-full lg:w-[290px] h-[120px]" href="#">
                            <img class="w-[45%] h-[89px] rounded-[4px]" src="<?php echo THEME_DIR; ?>/src/img/BEST-KEYBOARD.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-[#fc530d] text-[11px] font-bold">راهنمای خرید کیبورد</p>
                                <p>بهترین کیبوردهای گیمینگ برای نابودی حریفان آنلاین [آپدیت ۲۰۲۵]</p>
                                <div class="flex items-center gap-2">
                                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"/></svg>
                                    <p class="text-[13px] font-normal text-[#999999]">6 فروردین 1404</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="pr-[15px] text-[16px] font-bold text-red-600">
                دسته بندی ها
                </div>
                <div class="flex flex-col gap-3 mt-[30px]">
                    <div class="relative w-full h-[90px]">
                        <img class="w-full h-full rounded-[5px]" src="<?php echo THEME_DIR; ?>/src/img/blog-1.jpg" alt="">
                    </div>
                    <div class="relative w-full h-[90px]">
                        <img class="w-full h-full rounded-[5px]" src="<?php echo THEME_DIR; ?>/src/img/blog-2.jpg" alt="">
                    </div>
                    <div class="relative w-full h-[90px]">
                        <img class="w-full h-full rounded-[5px]" src="<?php echo THEME_DIR; ?>/src/img/blog-3.jpg" alt="">
                    </div>
                    <div class="relative w-full h-[90px]">
                        <img class="w-full h-full rounded-[5px]" src="<?php echo THEME_DIR; ?>/src/img/blog-4.jpg" alt="">
                    </div>
                    <div class="relative w-full h-[90px]">
                        <img class="w-full h-full rounded-[5px]" src="<?php echo THEME_DIR; ?>/src/img/blog-5.jpg" alt="">
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
<?php
get_footer();
?>