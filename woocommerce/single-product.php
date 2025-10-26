<?php

get_header();

$product_id = get_the_ID();
$product = wc_get_product( $product_id );
$product_name = $product->get_name();
$product_terms = get_the_terms( $product_id, 'product_cat' );
$is_in_stock = $product->is_in_stock();
$sale_price = $product->get_sale_price();
$regular_price = $product->get_regular_price();
if($sale_price){
    $discount_percentage = round(($regular_price - $sale_price) / $regular_price * 100);
}
// product images
$product_image = $product->get_image_id();
$product_image_url = wp_get_attachment_url($product_image);
$product_gallery = $product->get_gallery_image_ids();
$product_gallery_urls = array();
if($product_image_url){
    $product_gallery_urls[] = $product_image_url;
}

foreach($product_gallery as $gallery_id){
    $product_gallery_urls[] = wp_get_attachment_url($gallery_id);
}

// product attributes
$product_attributes = $product->get_attributes();

// related products
$related_ids = wc_get_related_products( $product_id , 4);
$related_products = wc_get_products(array(
    'include' => $related_ids,
    'status' => 'publish',
));

$upsell_ids = $product->get_upsell_ids();
$upsell_products = wc_get_products(array(
    'include' => $upsell_ids,
    'status' => 'publish',
));

// product revirew
$product_review = get_comments(array(
    'post_id' => $product_id,
    'status' => 'approve',
));
$product_review_count = count($product_review);
$product_review_average = $product->get_average_rating();

?>
<style>
    .rating-box{
        width : <?php echo ($product_review_average/5)*100; ?>%;
    }
</style>
    <div class="w-full">
        <div class="lg:w-[1024px] xl:w-[1280px] mx-auto flex flex-col gap-2 lg:flex-row">
            <article class="mt-[90px] lg:mt-[200px] relative">
                <div>
                    <div class="flex flex-col-reverse lg:w-[350px] xl:w-[400px]  gap-4 container mx-auto">
                        <div class="slider-box flex flex-col gap-4">
                            <div class="box w-[350px] xl:w-[400px] gallery">
                              <div class="swiper main-slide-carousel swiper-container relative w-full">
                                <div class="swiper-wrapper">
                                    <?php
                                    if($product_gallery_urls){
                                    foreach($product_gallery_urls as $gallery_url){ ?>
                                        <div class="swiper-slide">
                                            <div class="block w-full mx-auto h-[450px] rounded-3xl">
                                            <img src="<?php echo $gallery_url; ?>" alt="Gallery image" class="gallery-image w-full h-full mx-auto rounded-3xl object-contain"/>
                                            </div>
                                        </div>
                                    <?php }
                                    }else {
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="block w-full mx-auto h-[450px] rounded-3xl">
                                            <img src="<?php echo THEME_DIR; ?>/src/img/image-placeholder.webp" alt="Gallery image" class="gallery-image w-full h-full mx-auto rounded-3xl object-contain"/>
                                            </div>
                                        </div>
                                        <?php
                                    } ?>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-pagination flex justify-center">
                                </div>
                              </div>
                            </div>
                            <div class="lg:w-[300px] xl:w-[390px] overflow-hidden">
                              <div class="nav-for-slider">
                                <div class="swiper-wrapper flex justify-center md:gap-7 gap-4">
                                    <?php 
                                    if($product_gallery_urls){
                                    foreach($product_gallery_urls as $gallery_url){ ?>    
                                        <div class="swiper-slide thumbs-slide !w-[64px] !h-[64px] p-[5px]">
                                            <img src="<?php echo $gallery_url; ?>" alt="Gallery image" class="gallery-image w-full cursor-pointer h-full rounded-2xl border-2 border-gray-200 transition-all duration-500 hover:border-indigo-600 object-cover"/>
                                        </div>
                                    <?php }
                                    }else {
                                        ?>
                                        <div class="swiper-slide thumbs-slide !w-[64px] !h-[64px] p-[5px]">
                                            <img src="<?php echo THEME_DIR; ?>/src/img/image-placeholder.webp" alt="Gallery image" class="gallery-image w-full cursor-pointer h-full rounded-2xl border-2 border-gray-200 transition-all duration-500 hover:border-indigo-600 object-cover"/>
                                        </div>
                                        <?php
                                    } ?>                 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lightbox" id="lightbox">
                        <span class="close" id="close">&times;</span>
                        <img src="" alt="" class="lightbox-image" id="lightbox-image">
                      </div>
                    
            </article>
            <article class="w-[80%] lg:w-[336px] xl:w-[488px] mt-[50px] lg:mt-[220px] flex flex-col gap-6 mx-auto">
                <div class="flex w-full items-center gap-2">
                    <?php if($product_terms){
                        foreach($product_terms as $term){ ?>
                            <a href="<?php echo get_term_link( $term->term_id ); ?>" class="text-[#a4a4a4] text-[18px] font-normal"><?php echo $term->name; ?></a>
                            <?php if($term != end($product_terms)){ ?>
                                <span class="text-[#a4a4a4] text-[18px] font-normal">|</span>
                            <?php } ?>
                        <?php }
                    } ?>
                    <!-- <div class="flex items-center gap-2">
                        <svg class="cursor-pointer text-gray-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.97559 16.3191H18.2593C18.6409 16.3191 18.9506 16.0116 18.9506 15.6318V4.36832C18.9506 3.98897 18.6414 3.68103 18.2593 3.68103H9.97559V16.3191Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.97506 16.3191H1.69139C1.30978 16.3191 1 16.0116 1 15.6318V4.36832C1 3.98897 1.30928 3.68103 1.69139 3.68103H9.97506V16.3191V16.3191Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="4 4"></path><path d="M9.97559 1V19" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <svg class="cursor-pointer text-transparent" width="23" height="20" viewBox="0 0 23 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M11.3861 19C18.1228 15.7916 21.7722 10.8191 21.7722 7.10662C21.7722 3.39418 19.189 1 16.1696 1C13.1502 1 11.3861 3.32633 11.3861 3.32633C11.3861 3.32633 9.62197 1 6.60258 1C3.5832 1 1 3.38934 1 7.10662C1 10.8239 4.64943 15.7916 11.3861 19Z" stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"></path></svg>
                        <svg class="cursor-pointer text-gray-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8743 7.25247C17.6009 7.25247 19.0005 5.85281 19.0005 4.12623C19.0005 2.39966 17.6009 1 15.8743 1C14.1477 1 12.748 2.39966 12.748 4.12623C12.748 5.85281 14.1477 7.25247 15.8743 7.25247Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"></path><path d="M15.8743 18.878C17.6009 18.878 19.0005 17.4783 19.0005 15.7517C19.0005 14.0252 17.6009 12.6255 15.8743 12.6255C14.1477 12.6255 12.748 14.0252 12.748 15.7517C12.748 17.4783 14.1477 18.878 15.8743 18.878Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"></path><path d="M4.12623 13.0647C5.85281 13.0647 7.25247 11.6651 7.25247 9.93849C7.25247 8.21192 5.85281 6.81226 4.12623 6.81226C2.39966 6.81226 1 8.21192 1 9.93849C1 11.6651 2.39966 13.0647 4.12623 13.0647Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"></path><path d="M6.91699 8.53236L13.0388 5.44531" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"></path><path d="M6.91699 11.5236L13.0388 14.6106" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"></path></svg>
                    </div> -->
                </div>
                <div>
                    <h1 class="text-[14px] xl:text-[16px] font-normal text-[#2b2b2b]"><?php echo $product_name; ?></h1>
                </div>
                <div class="flex items-center gap-4">
                    <?php if($product_review_count) : ?>
                    <div class="relative">
                        <span class="flex items-center">
                            <svg class="text-[#707070]" width="16" height="16" fill="#707070" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#707070]" width="16" height="16" fill="#707070" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#707070]" width="16" height="16" fill="#707070" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#707070]" width="16" height="16" fill="#707070" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#707070]" width="16" height="16" fill="#707070" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                        </span>
                        <span class="flex items-center absolute top-0 right-0 overflow-hidden rating-box">
                            <svg class="text-[#e10a0a] shrink-0" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#e10a0a] shrink-0" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#e10a0a] shrink-0" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#e10a0a] shrink-0" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="text-[#e10a0a] shrink-0" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#star"></use>
                            </svg>
                        </span>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($is_in_stock){ ?>
                    <div class="flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#1CB65D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 10L11 14L9 12" stroke="#1CB65D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <p class="text-[14px] font-bold text-[#27b965]">موجود</p>
                    </div>
                    <?php } ?>
                </div>
                <div class="flex flex-col">
                    <?php if($sale_price){ ?>
                    <div class="flex items-center gap-2">
                        <p class="text-[#a4a4a4]"><span class="line-through ml-2 text-[16px] xl:text-[20px] font-bold"><?php echo number_format($regular_price); ?></span>تومان</p>
                        <span class="px-[5px] h-[26px] rounded-full bg-[#e10a0a] text-white flex items-center justify-center"><?php echo $discount_percentage; ?>%</span>
                    </div>
                    <?php } ?>
                    <div class="text-[18px] font-bold text-[#e10a0a]"><span class="text-[20px] xl:text-[28px] ml-2"><?php echo $sale_price?number_format($sale_price):number_format($regular_price) ; ?></span>تومان</div>
                </div>
                <?php if($product_attributes){ ?>
                <div class="flex flex-col gap-2">
                    <?php
                    $product_top_attributes = array_slice($product_attributes, 0, 3);
                    foreach($product_top_attributes as $attribute){
                        if($attribute->is_taxonomy()){
                            $terms = wc_get_product_terms($product_id, $attribute->get_name() , array('fields' => 'names'));
                            $attributeValue = implode(', ', $terms);
                        }else {
                            $attributeValue = $attribute['value'];
                        }
                        ?>
                        <p class="text-[14px] font-normal text-[#adadad]"><?php echo wc_attribute_label($attribute->get_name()); ?> : <span class="text-black mr-1"><?php echo $attributeValue; ?></span></p>
                    <?php } ?>
                </div>
                <?php } ?>
                <!-- <div class="text-[#656565]">رنگ : سفید</div>
                <div class="w-full flex items-center gap-3">
                    <div class="color-product flex h-[30px] w-[30px] cursor-pointer items-center justify-center rounded-full border-[3px] border-semi_dark p-[2px]">
                        <div class="h-full w-full rounded-full bg-[#f0f0f0]"></div>
                    </div>
                    <div class="color-product flex h-[30px] w-[30px] cursor-pointer items-center justify-center rounded-full border-[3px] border-semi_dark p-[2px] color-unActive">
                        <div class="h-full w-full rounded-full bg-[#000000]"></div>
                    </div>
                    <div class="color-product flex h-[30px] w-[30px] cursor-pointer items-center justify-center rounded-full border-[3px] border-semi_dark p-[2px] color-unActive">
                        <div class="h-full w-full rounded-full bg-blue-800"></div>
                    </div>
                </div>
                <div class="text-[16px] font-normal text-[#5d5d5d]">گارانتی :</div>
                <div class="grid w-full grid-cols-1 gap-[10px] xl:grid-cols-2">
                    <div class="Warranty flex min-h-[56px] w-full cursor-pointer gap-2 items-start rounded-[8px] border px-[8px] py-[8px] text-[14px] border-red-500 hover:border-red-700 transition-colors duration-300">
                        <div class="mt-[3px] flex h-[16px] w-[16px] items-center justify-center rounded-full  bg-red-500">
                            <div class="h-[10px] w-[10px] rounded-full bg-white"></div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="text-[14px] font-normal">دی جی سرویس</p>
                            <p class="text-[12px] font-normal text-[#969696]">گارانتی 18 ماهه</p>
                        </div>
                    </div>
                    <div class="Warranty flex min-h-[56px] w-full cursor-pointer gap-2 items-start rounded-[8px] border px-[12px] py-[8px] text-[14px] border-gray-300 hover:border-red-500 transition-colors duration-300">
                        <div class="mt-[3px] flex h-[16px] w-[16px] items-center justify-center rounded-full  bg-white">
                            <div class="h-[10px] w-[10px] rounded-full bg-white"></div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="text-[14px] font-normal">شرکتی معتبر</p>
                            <p class="text-[12px] font-normal text-[#969696]">گارانتی 18 ماهه</p>
                        </div>
                    </div>
                  </div>  
                  <div class="w-full">
                    <div class="flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="icons"><path id="Vector" d="M12 3C9.71429 5 4 5.5 4 5.5V14.07C4 14.07 7.42857 19 12 21C16.5714 19 20 14.07 20 14.07V5.5C19.9886 5.5 14.2857 5 12 3Z" stroke="#DD3730" stroke-width="2" stroke-linejoin="round"></path><g id="Group 7610"><path id="Vector_2" d="M9 11.78L11.1648 14L15.0387 10.0273" stroke="#DD3730" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g></g></svg>
                        <p class="text-[16px] font-normal text-[#595959]">بیمه سامان</p>
                    </div>
                    <div>
                        <div class="border-[#e5e7eb] mt-4  flex h-[75px] w-full justify-between gap-2 rounded-[8px] border p-2 lg:h-[90px]">
                            <div class="flex items-center gap-3">
                                <div class="flex h-[90%] items-center justify-center rounded-full bg-[#F2F9FF]  lg:h-[47px] lg:w-[47px]">
                                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="g1"><path id="path41-1" d="M13.2619 18.8966C15.9533 18.8966 18.1352 16.7133 18.1352 14.0201C18.1352 11.3268 15.9533 9.14355 13.2619 9.14355C10.5705 9.14355 8.38867 11.3268 8.38867 14.0201C8.38867 16.7133 10.5705 18.8966 13.2619 18.8966Z" fill="#FF0000"></path><path id="rect1-4-7" d="M4.40137 0.75V5.15687H13.2616V5.15996H15.4712C19.1914 5.15996 22.1166 8.08782 22.1166 11.8106V14.0208V22.884H26.5205V14.0208V11.8106C26.5205 5.72176 21.556 0.750045 15.4712 0.750045H13.2616L4.40137 0.75Z" fill="#14317A"></path><path id="rect22-6-2" d="M0 5.15625V27.2902H4.40394H22.1192V22.8833H4.40394V5.15625H0Z" fill="#14317A"></path></g></svg>
                                </div>
                                <div>
                                    <p class="text-[#404040] text-[16px] font-bold">بیمه جبران خسارت</p>
                                    <p class="text-[12px] font-normal text-[#939393]">سرقت - شکستگی - آبدیدگی</p>
                                    <div class="flex items-center gap-2">
                                        <div class="bg-[#e10a0a] text-white rounded-[20px] w-[32px] text-[12px] font-bold flex justify-center items-center h-[20px]">
                                            50%
                                        </div>
                                        <div class="text-[#a6a6a6] line-through text-[12px] font-bold">
                                            ۴۸۷٬۰۰۰
                                        </div>
                                        <div class="text-[11px] xl:text-[12px] font-bold text-[#585858]">
                                            ۲۴۴٬۰۰۰
                                            تومان
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-col justify-between">
                                <div class="text-[12px] font-semibold text-[#0a8aff] flex items-center">
                                    <p>شرایط بیمه</p>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.25 8.25L3.75 5.75L6.25 3.25" stroke="#0085FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                                <div class=" flex h-[30px] shrink-0 items-center justify-center gap-2 text-nowrap rounded border border-solid border-[color:var(--Primary-Normal,#E10A0A)] px-2 text-[10px] text-primary-normal text-[#e42929]">
                                    خرید بیمه +
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="relative  flex w-full flex-col items-start">
                    <a class="flex min-h-[56px] w-full cursor-pointer flex-col items-start gap-[12px] rounded-[8px] border px-[7px] py-[8px] text-[14px]  hover:border-red-primary border-[#e5e7eb]" href="">
                        <div class="flex flex-row items-start gap-[4px]">
                            <div class="flex flex-col items-start gap-[4px]">
                                <span class="text-[16px] font-bold text-dark_grey">خرید قسطی</span>
                                <div class="mb-1 w-full text-[14px] text-semi_dark">به اعتبار دی‌جی لند بدون ضامن قسطی خرید کن !</div>
                                <div class="flex w-full text-[12px] text-semi_dark">
                                    <img src="<?php echo THEME_DIR; ?>/src/img/azki-filled.webp" alt="installment-partner" class="mx-1" width="30" height="30">
                                    <img src="<?php echo THEME_DIR; ?>/src/img/snapp.svg" alt="installment-partner" class="mx-1" width="30" height="30">
                                </div>
                                <div class="absolute left-3 top-[48%] text-[12px] text-semi_dark">
                                    <div class="arrow left"><svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.57574 7.42426C3.81005 7.65858 4.18995 7.65858 4.42426 7.42426C4.65858 7.18995 4.65858 6.81005 4.42426 6.57574L3.57574 7.42426ZM1 4L0.575736 3.57574C0.341421 3.81005 0.341421 4.18995 0.575736 4.42426L1 4ZM4.42426 1.42426C4.65858 1.18995 4.65858 0.810051 4.42426 0.575736C4.18995 0.341421 3.81005 0.341421 3.57574 0.575736L4.42426 1.42426ZM4.42426 6.57574L1.42426 3.57574L0.575736 4.42426L3.57574 7.42426L4.42426 6.57574ZM1.42426 4.42426L4.42426 1.42426L3.57574 0.575736L0.575736 3.57574L1.42426 4.42426Z" fill="currentColor"></path></svg></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>   -->
                <div class="hidden lg:flex w-full select-none flex-row items-center justify-start gap-[16px]">
                    <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=<?php echo $product_id; ?>" class="flex justify-center items-center mt-[26px] h-[44px] w-2/3 min-w-[150px] rounded-[10px] bg-red-primary px-[5px] text-white hover:bg-red-700  lg:text-[18px]">
                        افزودن به سبد خرید
                    </a>
                </div>          
            </article>
            <article class="mt-[50px] lg:mt-[220px] mr-0 lg:mr-[30px] flex flex-col gap-2">
                <!--<div class="flex items-center mx-auto gap-2  bg-[#f6f5f5] w-[80%] lg:w-[300px] xl:w-[340px] h-[56px] rounded-[8px] p-[16px]">
                    <svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="Isolation_Mode" clip-path="url(#clip0_10077_41937)"><path id="Vector" d="M8.19875 0.75H17.6988C18.0988 0.75 18.4188 1.07 18.4188 1.47V8.65C18.4188 9.05 18.0988 9.37 17.6988 9.37H16.0188C16.0188 8.38 15.2187 7.58 14.2287 7.58C13.2387 7.58 12.4387 8.38 12.4387 9.37H8.18875C7.78875 9.37 7.46875 9.05 7.46875 8.65V1.47C7.46875 1.07 7.79875 0.75 8.18875 0.75H8.19875Z" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path id="Vector_2" d="M1.36 5.17031L3.02 2.42031C3.15 2.20031 3.38 2.07031 3.64 2.07031H7.48V8.66031C7.48 9.06031 7.16 9.38031 6.76 9.38031H6.1C6.03 8.45031 5.26 7.72031 4.32 7.72031C3.38 7.72031 2.61 8.45031 2.54 9.38031H1.97C1.57 9.38031 1.25 9.06031 1.25 8.66031V5.55031C1.25 5.42031 1.29 5.29031 1.36 5.18031V5.17031Z" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path id="Vector_3" d="M19.7013 4.08984H14.0312" stroke="#E10A0A" stroke-linecap="round" stroke-linejoin="round"></path><path id="Vector_4" d="M21.6895 6.07812H16.0195" stroke="#E10A0A" stroke-linecap="round" stroke-linejoin="round"></path><path id="Vector_5" d="M4.77891 3.53906V5.52906H2.87891" stroke="#E10A0A" stroke-linecap="round" stroke-linejoin="round"></path><path id="Vector_6" d="M6.11125 9.37891C6.11125 10.3689 5.31125 11.1689 4.32125 11.1689C3.33125 11.1689 2.53125 10.3689 2.53125 9.37891" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path id="Vector_7" d="M16.0214 9.37891C16.0214 10.3689 15.2214 11.1689 14.2314 11.1689C13.2414 11.1689 12.4414 10.3689 12.4414 9.37891" stroke="#E10A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_10077_41937"><rect width="21.69" height="11.91" fill="white" transform="translate(0.5)"></rect></clipPath></defs></svg>
                    <p class="text-[12px] font-normal text-[#5d5d5d]">ارسال این کالا از 1 روز کاری آینده</p>
                </div>-->
                <?php if($upsell_ids): ?>
                <div class="w-[80%] mx-auto lg:w-full p-[16px] border-spacing-2 border border-dashed rounded-[8px] border-[#e8eaed]">
                    <div class="flex flex-col h-[240px] gap-3 overflow-hidden overflow-y-auto">
                        <div class="flex items-center gap-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19 15V18L12 21L5 18V15" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 13L3 11L5.5 8L12 10L9 13Z" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 13L21 11L18.5 8L12 10L15 13Z" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 17V15" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16 5C16.2222 4.44444 16.9333 3.26667 18 3" stroke="#E10A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 5C7.77778 4.44444 7.06667 3.26667 6 3" stroke="#E10A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 6V2" stroke="#E10A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <p class="text-[14px] font-bold text-[#505050]">محصولات مرتبط</p>
                        </div> 
                        <?php foreach($upsell_products as $upsell_product): 
                            $upsell_product_id = $upsell_product->get_id();

                            $upsell_product_image_id = $upsell_product->get_image_id();
                            $upsell_product_image = wp_get_attachment_image_url($upsell_product_image_id);
                            $upsell_product_name = $upsell_product->get_name();
                            $upsell_product_price = $upsell_product->get_price();
                            $upsell_product_link = get_permalink($upsell_product_id);
                            ?>
                        <a href="<?php echo $upsell_product_link; ?>">
                            <div class="w-full h-[72px] bg-none hover:bg-[#f6f5f5] flex gap-3 items-center rounded-[4px]">
                                <div class=" h-[56px] w-[56px] pr-2">
                                    <img alt="<?php echo $upsell_product_name; ?>" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" style="color: transparent;" src="<?php echo $upsell_product_image; ?>">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-[12px] font-normal"><?php echo $upsell_product_name; ?></p>
                                    <p class="text-[14px] font-bold text-[#e10a0a]"><?php echo number_format($upsell_product_price); ?> تومان </p>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="w-[80%] mx-auto lg:w-full h-[56px] bg-[#effcf5] rounded-[10px] mt-2 flex items-center gap-2 p-[16px]">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 3C9.71429 5 4 5.5 4 5.5V14.07C4 14.07 7.42857 19 12 21C16.5714 19 20 14.07 20 14.07V5.5C19.9886 5.5 14.2857 5 12 3Z" stroke="#1CB65D" stroke-width="2" stroke-linejoin="round"></path><path d="M9 11.78L11.1648 14L15.0387 10.0273" stroke="#1CB65D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <p class="text-[12px] font-normal text-[#555656]">ضمانت اصالت و سلامت فیزیکی کالا</p>
                </div>
            </article>
        </div>
    </div>
    <?php if($related_products): ?>
    <div class="w-full h-[60px] flex items-center justify-center mt-10 gap-2">
        <img alt="" loading="lazy" width="48" height="5" decoding="async" data-nimg="1" style="color: transparent; width: auto; height: auto;" src="<?php echo THEME_DIR; ?>/src/img/red_title_wing.svg">
        <p class="text-[18px] font-semibold text-[#505050]">محصولات مشابه</p>
        <img alt="" loading="lazy" width="48" height="5" decoding="async" data-nimg="1" style="color: transparent; width: auto; height: auto;" src="<?php echo THEME_DIR; ?>/src/img/red_title_wing.svg">
    </div>
    <div class="w-full h-[335px] lg:h-[470px] mx-auto bg-[#f6f5f5] pt-[10px] lg:pt-[40px] mt-[25px] px-[10px] lg:px-0">
        <div class="swiper swiper-card2 lg:w-[1024px] xl:w-[1280px] mx-auto h-full mt-[15px]">
            <div class="swiper-wrapper">
                <?php foreach($related_products as $related_product):
                    $related_product_id = $related_product->get_id();
                    $related_product_image_id = $related_product->get_image_id();
                    $related_product_image = wp_get_attachment_image_url($related_product_image_id);
                    $related_product_name = $related_product->get_name();
                    $related_product_sale_price = $related_product->get_sale_price();
                    $related_product_regular_price = $related_product->get_regular_price();
                    $related_product_discount_percentage = 0;
                    if($related_product_sale_price){
                        $related_product_discount_percentage = round(($related_product_regular_price - $related_product_sale_price) / $related_product_regular_price * 100);
                    }
                    $related_product_link = get_permalink($related_product_id);
                ?>
                <a href="<?php echo $related_product_link; ?>" class="swiper-slide bg-white rounded-[10px] lg:rounded-[28px] !w-[181px] lg:!w-[240px] !h-[288px] lg:!h-[388px] relative group !flex !flex-col items-center gap-2 lg:gap-2.5 ">
                    <img class="w-[136px] lg:w-[179px] h-[136px] lg:h-[179px] lg:group-hover:-mt-[15px] duration-500 z-10 mt-0 lg:mt-[35px] relative object-contain" src="<?php echo $related_product_image; ?>" alt="<?php echo $related_product_name; ?>">
                    <div class="shadow-product hidden lg:block h-[0px] w-[180px] duration-500 lg:group-hover:mt-[18px] lg:group-hover:h-[32px] lg:group-hover:rotate-1"></div>
                    <p class="text-[13px] font-medium text-center z-10 px-[10px] line-clamp-2 mt-[15px] lg:mt-0"><?php echo $related_product_name; ?></p>
                    <div class="flex w-full px-[10px] items-center justify-between z-10 mt-[20px]">
                        <?php if($related_product_discount_percentage): ?>
                        <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center bg-[#e10a0a] duration-300">
                            <p class="text-[12px] font-bold text-white duration-300">%<?php echo $related_product_discount_percentage; ?></p>
                        </span>
                        <?php endif; ?>
                        <span>
                            <?php if($related_product_sale_price): ?>
                            <div class="flex text-[#b9b9b9] text-[12px] lg:text-[13px] font-normal gap-1 ">
                                <p class="line-through"><?php echo number_format($related_product_regular_price); ?></p>
                                <span>تومان</span>
                            </div>
                            <?php endif; ?>
                            <div class="flex text-[#e10b0b] duration-300 gap-1 text-[16px] lg:text-[20px] font-bold">
                                <p><?php echo $related_product_sale_price?number_format($related_product_sale_price):number_format($related_product_regular_price); ?></p>
                                <span>تومان</span>
                            </div>
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="w-full px-[10px] lg:px-0">
        <div class="hidden lg:flex justify-center items-center gap-6 h-[64px] mt-3">
            <p class="text-[16px] font-normal  cursor-pointer text-red-primary">مشخصات‌فنی</p>
            <div class="block text-medium_grey">|</div>
            <a href="#comment" class="text-[16px] font-normal text-dark_grey">دیدگاه کاربران</a>
        </div>
        <div class="lg:w-[1024px] xl:w-[1280px] mx-auto ">
            <div id="product-content" class="w-full flex flex-col gap-5 overflow-hidden mt-6 lg:mt-0">
                <div class="text-root text-body1-fa border-r-2 border-primary-normal pr-2 text-text-normal text-[16px] font-normal">نقد‌و‌بررسی‌اجمالی</div>
                <?php the_content(); ?>
            </div>
            <div id="show-all-2" class="flex items-center gap-2 text-[14px] font-normal text-[#6d6d6d] mt-3">
                <p  class="cursor-pointer">مشاهده بیشتر</p>
                <svg id="svg-show-2" class="rotate-90" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <?php if($product_attributes) : ?>
            <div>
                <div class="text-root text-body1-fa border-r-2 border-primary-normal pr-2 text-text-normal text-[16px] font-normal mt-8">مشخصات فنی</div>
                <div id="product-attributes" class="w-full flex-col items-center overflow-hidden">
                    <?php foreach($product_attributes as $attribute) : 
                        if($attribute->is_taxonomy()){
                            $terms = wc_get_product_terms($product_id, $attribute->get_name() , array('fields' => 'names'));
                            $attributeValue = implode(', ', $terms);
                        }else {
                            $attributeValue = $attribute['value'];
                        }
                        ?>
                        <div class="flex w-full flex-row items-center divide-x-reverse border-b border-t bg-light_grey text-dark_grey border-[#efeff1]">
                            <div class="flex min-w-[300px] justify-center py-[10px] pr-[10px] text-[14px]">
                                <?php echo wc_attribute_label($attribute->get_name()); ?>
                            </div>
                            <div class="flex flex-1 flex-col items-start gap-[5px] bg-white px-[20px]  py-[10px] text-[14px]">
                                <div class="flex justify-center">
                                <?php echo $attributeValue; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex gap-1 items-center mt-[20px] cursor-pointer">
                <p id="show-all-1" class="text-[14px] font-normal">مشاهده بیشتر</p>
                <svg id="svg-show" class="text-[#e10a0a] rotate-90" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <?php endif; ?>
            
            <div id="comment" class="flex flex-col lg:flex-row justify-between w-full h-auto lg:w-[1024px] xl:w-[1280px] mt-[30px] mb-[30px]">
                <div class="top-[192px] flex h-fit w-full lg:w-1/4 flex-col justify-start gap-4 pl-6">
                    <div class="flex w-full flex-row gap-[10px] text-[16px] font-semibold text-dark_grey">
                        <span class="text-root text-body1-fa border-r-2 border-primary-normal pr-2 text-text-normal">دیدگاه‌کاربران</span>
                    </div>
                    <p class="text-sm text-medium_grey">هدفون بلوتوثی اپل مدل AirPods Pro (2nd generation 2023)</p>
                    <p class="text-base font-semibold text-dark_grey hidden lg:block">نظر خود را بادیگران به اشتراک بگذارید.</p>
                    <div class="flex w-full items-center justify-between">
                        <p class="text-sm text-dark_grey">امتیاز کاربران</p>
                        <div class="text-sm text-dark_grey">
                            <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                <svg class="text-[#e10a0a]" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </span>
                            <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                <svg class="text-[#e10a0a]" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="#star"></use>
                                </svg></span>
                            <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                <svg class="text-[#e10a0a]" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </span>
                            <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                <svg class="text-[#e10a0a]" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </span>
                            <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                <svg class="text-[#e10a0a]" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <button id="openCommentModal" class="btn-root btn-outline btn-large w-full hidden lg:inline-flex">
                        <div class="flex items-center justify-center gap-6">
                            افزودن دیدگاه
                        </div>
                    </button>
                </div>
                <?php if($product_review_count) : ?>
                <div class="flex w-3/4 flex-col justify-center">
                    <?php foreach($product_review as $review) : 
                        $rating = intval(get_comment_meta($review->comment_ID , 'rating' , true));
                        $verified = wc_customer_bought_product($review->comment_author_email , $review->user_id , $product_id);
                        ?>
                    <div class="flex flex-col items-start gap-4 border-b-[1px] border-b-gray-200 px-2 mt-8">
                        <div class="flex items-center gap-2 pt-1">
                            <svg width="20" height="20" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.0527 15V13.75C13.0527 11.5409 11.2619 9.75 9.05274 9.75H5.67773C3.4686 9.75 1.67773 11.5409 1.67773 13.75V15" stroke="#A4A4A4" stroke-width="1.5"></path><circle cx="7.47461" cy="4.0625" r="3.0625" stroke="#A4A4A4" stroke-width="1.5"></circle></svg>
                            <p class="text-sm text-dark_grey">
                                <?php echo $review->comment_author; ?>
                            </p>
                            <?php if($verified) : ?>
                            <span class="rounded-md bg-Success-20 px-2 py-1 text-sm text-Success-70">
                                خریدار
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="overflow:hidden;position:relative">
                                <?php for($i = 1 ; $i <= 5 ; $i++){ 
                                    if($i <= $rating ){ ?>
                                        <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                            <svg class="text-[#e10a0a]" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    <?php }else{ ?>
                                        <span class="" style="position: relative; overflow: hidden; cursor: default; display: block; float: left; color: rgb(225, 10, 10); font-size: 20px;" data-index="0" data-forhalf="[object Object]">
                                            <svg class="text-[#707070]" width="16" height="16" fill="#707070" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    <?php }
                                    } ?> 
                                
                            </div>
                            <div class="text-sm text-dark_grey">
                                <?php echo get_comment_date('d M Y' , $review->comment_ID); ?>
                            </div>
                        </div>
                        <div class="text-base font-semibold text-dark_grey">
                            <?php echo $review->comment_content; ?>
                        </div>
                        <!--<div class="flex gap-8 pb-1">
                            <div class="flex items-center gap-1">
                                <div class="flex items-start text-[14px] leading-none">1</div>
                                <div class="mb-1 cursor-pointer">
                                    <svg width="20" height="20" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.50004 17.4987H15C15.6917 17.4987 16.2834 17.082 16.5334 16.482L19.05 10.607C19.125 10.4154 19.1667 10.2154 19.1667 9.9987V8.33203C19.1667 7.41536 18.4167 6.66536 17.5 6.66536H12.2417L13.0334 2.85703L13.0584 2.59036C13.0584 2.2487 12.9167 1.93203 12.6917 1.70703L11.8084 0.832031L6.31671 6.3237C6.01671 6.6237 5.83337 7.04036 5.83337 7.4987V15.832C5.83337 16.7487 6.58337 17.4987 7.50004 17.4987ZM7.50004 7.4987L11.1167 3.88203L10 8.33203H17.5V9.9987L15 15.832H7.50004V7.4987ZM0.833374 7.4987H4.16671V17.4987H0.833374V7.4987Z" fill="#A4A4A4"></path></svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <div class="flex items-start text-[14px] leading-none">0</div>
                                <div class="mt-1 cursor-pointer">
                                    <svg width="18" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 0.5H4.99998C4.30831 0.5 3.71665 0.916666 3.46665 1.51667L0.94998 7.39167C0.87498 7.58333 0.833313 7.78333 0.833313 8V9.66667C0.833313 10.5833 1.58331 11.3333 2.49998 11.3333H7.75831L6.96665 15.1417L6.94165 15.4083C6.94165 15.75 7.08331 16.0667 7.30831 16.2917L8.19165 17.1667L13.6833 11.675C13.9833 11.375 14.1666 10.9583 14.1666 10.5V2.16667C14.1666 1.25 13.4166 0.5 12.5 0.5ZM12.5 10.5L8.88331 14.1167L9.99998 9.66667H2.49998V8L4.99998 2.16667H12.5V10.5ZM15.8333 0.5H19.1666V10.5H15.8333V0.5Z" fill="#A4A4A4"></path></svg>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <footer class="fixed bottom-0 left-0 z-20 flex lg:hidden h-[130px] w-full select-none flex-row items-center bg-white px-[20px] shadow-all_sides pb-18">
        <div class="flex w-full flex-row items-center gap-[10px]">
            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=<?php echo $product_id; ?>"  class="flex h-[44px] w-full items-center justify-center rounded-[10px] bg-red-primary text-white">
                افزودن به سبد خرید
            </a>
        </div>
    </footer>

    <div id="commentModal" class="hidden fixed inset-0  items-center justify-center z-500">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative z-499">
            <button id="closeCommentModal" class="cursor-pointer absolute top-5 left-5 text-gray-500 hover:text-red-500">
                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#close"></use>
                </svg>
            </button>
            <h2 class="text-lg font-bold mb-4">ثبت دیدگاه</h2>
            <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post">
                <div class="mb-4">
                    <label class="block mb-2 font-medium">امتیاز شما:</label>
                    <div id="starRating" class="flex space-x-1 text-2xl cursor-pointer">
                        <span data-value="1"><svg width="16" height="16"  fill="#707070" class="text-[#707070]" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#star"></use></svg></span>
                        <span data-value="2"><svg width="16" height="16"  fill="#707070" class="text-[#707070]" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#star"></use></svg></span>
                        <span data-value="3"><svg width="16" height="16"  fill="#707070" class="text-[#707070]" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#star"></use></svg></span>
                        <span data-value="4"><svg width="16" height="16"  fill="#707070" class="text-[#707070]" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#star"></use></svg></span>
                        <span data-value="5"><svg width="16" height="16"  fill="#707070" class="text-[#707070] xmlns="http://www.w3.org/2000/svg"><use xlink:href="#star"></use></svg></span>
                    </div>
                    <input type="hidden" name="rating" id="ratingInput" value="0">
                </div>
                <?php if ( !is_user_logged_in() ) : ?>
                    <div class="mb-4">
                        <label class="block mb-2 font-medium">نام شما:</label>
                        <input type="text" name="author" class="w-full border rounded-lg p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 font-medium">ایمیل شما:</label>
                        <input type="email" name="email" class="w-full border rounded-lg p-2" required>
                    </div>
                <?php endif; ?>
                <div class="mb-4">
                    <label class="block mb-2 font-medium">دیدگاه شما:</label>
                    <textarea name="comment" rows="4" class="w-full border rounded-lg p-2" required></textarea>
                </div>
                <input type="hidden" name="comment_post_ID" value="<?php echo $product_id; ?>">
                <input type="hidden" name="comment_parent" value="0">
                <?php
                do_action('comment_form', $product_id);
                ?>
                <button type="submit" class="bg-[#e10a0a] cursor-pointer text-white px-4 py-2 rounded-lg  block mr-auto">
                    ارسال دیدگاه
                </button>
            </form>
        </div>
        <div id="commentModalBack" class="fixed left-0 right-0 top-0 min-h-screen w-screen bg-black opacity-30 z-[498]"></div>
    </div>
<?php
get_footer();
?>