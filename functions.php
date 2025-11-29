<?php
define('THEME_DIR', get_template_directory_uri());

add_action('after_setup_theme' , 'add_theme_support_function');
function add_theme_support_function(){
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('woocommerce');
}

add_action('after_setup_theme' , 'register_my_menu');
function register_my_menu(){
    register_nav_menus(array('primary' => 'منوی اصلی' , 'megamenu' => 'منوی محصولات'));
}

add_action("admin_init" , "register_my_settings");
function register_my_settings(){
    
    // header settings
    register_setting("theme_setting_header" , "header_logo");
    add_settings_section("header_section" , "تنظیمات هدر" , "__return_false" , "theme-setting-header");

    add_settings_field(
        "header_logo_field" ,
        "لوگوی هدر" ,
        "header_logo_field_callback" ,
        "theme-setting-header" ,
        "header_section"
    );

    // homepage settings
    register_setting("theme_setting_home" , "home_slider" , array(
        'type' => 'array' ,
        'sanitize_callback' => 'sanitize_home_slider',
        'default' => []
    ));
    register_setting("theme_setting_home" , "home_content");
    register_setting("theme_setting_home" , "home_sale_section");
    

    add_settings_section("home_section" , "تنظیمات صفحه اصلی" , "__return_false" , "theme-setting-home");

    add_settings_field(
        "home_slider_field",
        "اسلایدر صفحه اصلی",
        "home_slider_field_callback",
        "theme-setting-home",
        "home_section"
    );

    add_settings_field(
        "home_content_field",
        "متن صفحه اصلی",
        "home_content_field_callback",
        "theme-setting-home",
        "home_section"
    );

    add_settings_field(
        "home_sale_section_field",
        "نمایش بخش فروش ویژه",
        "home_sale_section_field_callback",
        "theme-setting-home",
        "home_section"
    );

    // footer settings
    register_setting("theme_setting_footer" , "footer_text");
    add_settings_section("footer_section" , "تنظیمات فوتر" , "__return_false" , "theme-setting-footer");
}

// header logo field
function header_logo_field_callback(){
    $logo = get_option("header_logo");
    ?>
    <div>
        <input type="text" name="header_logo" id="header_logo" value="<?php echo $logo; ?>" style="width:60%">
        <button type="button" class="button upload_logo_button">انتخاب لوگو</button>

        <br>
        <?php if($logo): ?>
            <img src="<?php echo $logo; ?>" alt="" style="max-width: 150px; display:block; margin-top:10px;">
        <?php endif; ?>
    </div>
    <script>
        jQuery(document).ready(function($){
            $('.upload_logo_button').click(function(e){
                e.preventDefault();
                var image = wp.media({
                    title : "انتخاب لوگو" ,
                    multiple : false
                }).open()
                .on('select' , function(){
                    var uploaded_image = image.state().get('selection').first().toJSON();
                    $('#header_logo').val(uploaded_image.url);
                });
            });
        });
    </script>
    <?php
}

// home slider field
function home_slider_field_callback(){
    $slides = get_option("home_slider" , []);
    if(!is_array($slides)){
        $slides = [];
    }
    ?>
    <div id="slider-wrapper">
        <?php foreach($slides as $index => $slide) : ?>
            <div class="slider-item" style="border: 1px solid; margin-bottom: 20px; padding:10px;">
                <label>تصویر دسکتاپ</label>
                <input type="text" name="home_slider[<?php echo $index; ?>][desktop]" value="<?php echo $slide["desktop"]; ?>" style="width: 60%;">
                <button type="button" class="button upload-image">انتخاب</button>

                <br>

                <label>تصویر موبایل</label>
                <input type="text" name="home_slider[<?php echo $index; ?>][mobile]" value="<?php echo $slide["mobile"]; ?>" style="width: 60%;">
                <button type="button" class="button upload-image">انتخاب</button>

                <br>
                <label>لینک اسلاید</label>
                <input type="text" name="home_slider[<?php echo $index; ?>][link]" value="<?php echo $slide["link"]; ?>" style="width: 60%;">

                <br>

                <button type="button" class="button remove-slide">حذف اسلاید</button>
            </div>
        <?php endforeach; ?>
    </div>
    <button type="button" class="button add-slide">افزودن اسلاید +</button>

    <script>
        jQuery(document).ready(function($){
            var slideIndex = $('#slider-wrapper .slider-item').length;
            
            // add a new item to slider wrapper

            $('.add-slide').on('click' , function(e){
                e.preventDefault();
                var html ='<div class="slider-item" style="border: 1px solid; margin-bottom: 20px; padding:10px;"><label>تصویر دسکتاپ</label><input type="text" name="home_slider['+slideIndex+'][desktop]" style="width: 60%;"><button type="button" class="button upload-image">انتخاب</button><br><label>تصویر موبایل</label><input type="text" name="home_slider['+slideIndex+'][mobile]" style="width: 60%;"><button type="button" class="button upload-image">انتخاب</button><br><label>لینک اسلاید</label><input type="text" name="home_slider['+slideIndex+'][link]" style="width: 60%;"><br><button type="button" class="button remove-slide">حذف اسلاید</button></div>';

                $('#slider-wrapper').append(html);
                slideIndex++;
            });

            // remove an item from slider wrapper

            $(document).on('click' , '.remove-slide' , function(e){
                e.preventDefault();
                $(this).closest('.slider-item').remove();
            });

            // handle upload files for slider

            $(document).on('click' , '.upload-image' , function(e){
                e.preventDefault();
                var button = $(this);

                var input = button.prev('input');

                var image = wp.media({
                    title : "انتخاب لوگو" ,
                    multiple : false
                }).open()
                .on('select' , function(){
                    var uploaded_image = image.state().get('selection').first().toJSON();
                    input.val(uploaded_image.url);
                });
            });
        });
    </script>
    <?php
}

// home content field
function home_content_field_callback(){
    $content = get_option("home_content");
    wp_editor(
        $content,
        "home_content",
        array(
        "textarea_name" => "home_content" ,
        "media_buttons" => true ,
        "textarea_rows" => 10
        )
    );
}

// home sale section field
function home_sale_section_field_callback(){
    $value = get_option("home_sale_section");
    ?>
    <label>
        <input type="checkbox" name="home_sale_section" value="1" <?php checked(1 , $value); ?> >
        فعال باشد
    </label>
    
    <?php
}

// sanitize home slider
function sanitize_home_slider($input){
    if(!is_array($input)) return [];

    $output = [];
    foreach($input as $row){
        $desktop = isset($row['desktop']) ? $row['desktop'] : '';
        $mobile = isset($row['mobile']) ? $row['mobile'] : '';
        $link = isset($row['link']) ? $row['link'] : '';

        if($desktop == '' && $mobile == '' && $link == ''){
            continue;
        }
        
        $output[] = [
            'desktop' => $desktop ,
            'mobile' => $mobile ,
            'link' => $link
        ];
    }

    return array_values($output);
}

// add setting menu page
add_action("admin_menu" , "add_custom_menu");

function add_custom_menu(){
    add_menu_page(
        "صفحه تنظیمات قالب",
        "تنظیمات قالب" ,
        "manage_options" ,
        "theme-setting" ,
        "theme_setting_output",
        "dashicons-admin-generic",
        50
    );
}

function theme_setting_output(){
    $active_tab = isset($_GET["tab"])?$_GET["tab"]:'header';
    ?>
    <div class="wrap">
        <h1>تنظیمات قالب</h1>
    </div>
    <div class="wrap">
        <h2 class="nav-tab-wrapper">
            <a 
            href="?page=theme-setting&tab=header" 
            class="nav-tab <?php echo $active_tab=='header' ? 'nav-tab-active' :''; ?>">
                هدر
            </a>
            <a 
            href="?page=theme-setting&tab=home" 
            class="nav-tab <?php echo $active_tab=='home' ? 'nav-tab-active' :''; ?>">
                صفحه اصلی
            </a>
            <a 
            href="?page=theme-setting&tab=footer" 
            class="nav-tab <?php echo $active_tab=='footer' ? 'nav-tab-active' :''; ?>">
                فوتر
            </a>
        </h2>
        <form action="options.php" method="post">
            <?php
            
            if($active_tab=="header"){
                settings_fields("theme_setting_header");
                do_settings_sections("theme-setting-header");
            }
            if($active_tab=="home"){
                settings_fields("theme_setting_home");
                do_settings_sections("theme-setting-home");
            }
            if($active_tab=="footer"){
                settings_fields("theme_setting_footer");
                do_settings_sections("theme-setting-footer");
            }
            submit_button();
            ?>
        </form>
    </div>
    
    <?php
}

add_action("admin_enqueue_scripts" , function($hook){
    if($hook != 'toplevel_page_theme-setting'){
        return;
    }
    wp_enqueue_media();
    wp_enqueue_style("theme-setting-styles" , THEME_DIR.'/src/admin/theme-setting.css');
});

add_action('init' , function(){
    $cart_page_id = wc_get_page_id('cart');
    if ($cart_page_id && get_post($cart_page_id)){
        $cart_content = get_post_field('post_content' , $cart_page_id);
        if(strpos($cart_content , '[woocommerce_cart]') === false){
            wp_update_post([
                'ID' => $cart_page_id,
                'post_content' => '[woocommerce_cart]'
            ]);
        }
    }

    $checkout_page_id = wc_get_page_id('checkout');
    if ($checkout_page_id && get_post($checkout_page_id)){
        $checkout_content = get_post_field('post_content' , $checkout_page_id);
        if(strpos($checkout_content , '[woocommerce_checkout]') === false){
            wp_update_post([
                'ID' => $checkout_page_id,
                'post_content' => '[woocommerce_checkout]'
            ]);
        }
    }
});

add_filter('woocommerce_enable_order_notes_field' , '__return_false');
add_filter('woocommerce_checkout_fields' , 'custom_checkout_field');

function custom_checkout_field($fields) {
    unset( $fields['billing']['billing_first_name']);
    unset( $fields['billing']['billing_last_name']);

    $fields['billing']['billing_full_name'] = array(
        'type' => 'text',
        'label' => 'نام و نام خانوادگی',
        'placeholder' => 'مثلا امیر طاهرخانی',
        'required'=> true,
        'class' => array('form-row-wide'),
        'priority' => 10
    );

    unset( $fields['billing']['billing_address_1']);
    unset( $fields['billing']['billing_address_2']);

    $fields['billing']['billing_address'] = array(
        'type' => 'text',
        'label' => 'آدرس',
        'placeholder' => 'مثلا تهران خیابان آزادی، پلاک 12',
        'required'=> true,
        'class' => array('form-row-wide'),
        'priority' => 90
    );


    $fields['billing']['billing_postcode']['required'] = false;

    return $fields;
}

add_filter('woocommerce_default_address_fields' , function($fields){
    $fields['postcode']['required'] = false;

    return $fields;
});

add_filter('woocommerce_checkout_proccess' , function(){
    if(isset($_POST['billing_postcode']) && empty($_POST['billing_postcode'])){
        unset($_POST['billing_postcode']);
    }
});

// create new post type
add_action('init' , function(){
    register_post_type('agahi' , array(
        'labels' => array(
            'name' => 'آگهی‌ها' ,
            'singular_name' => 'آگهی',
            'menu_name' => 'آگهی‌ها',
            'add_new' => 'افزودن آگهی',
            'add_new_item' => 'افزودن آگهی جدید',
            'edit_item' => 'ویرایش آگهی',
            'new_item' => 'آگهی جدید',
            'view_item' => 'نمایش آگهی',
            'search_items' => 'جستجوی آگهی',
            'not_found' => 'آگهی یافت نشد',
        ) ,
        'public' => true ,
        'has_archive' => true ,
        'supports' => array('title' , 'editor' , 'thumbnail' , 'comments' , 'author' , 'excerpt' , 'custom-fields'),
        'rewrite' => array('slug' => 'agahi'),
        'menu_icon' => 'dashicons-admin-post',
        'menu_position' => 5,
        'publicly_queryable' => true,
    ));
});


add_action('init' , function(){
    // create new hierarchical taxonomy for agahi
    register_taxonomy('agahi_category' , 'agahi' , array(
        'labels' => array(
            'name' => 'دسته بندی آگهی',
            'singular_name' => 'دسته بندی آگهی',
            'menu_name' => 'دسته بندی آگهی',
            'all_items' => 'همه دسته بندی ها',
            'parent_item' => 'دسته بندی والد',
            'parent_item_colon' => 'دسته بندی والد:',
            'edit_item' => 'ویرایش دسته بندی',
            'update_item' => 'بروزرسانی دسته بندی',
            'add_new_item' => 'افزودن دسته بندی جدید',
            'new_item_name' => 'نام دسته بندی جدید',
            'search_items' => 'جستجوی دسته بندی',
            'not_found' => 'دسته بندی یافت نشد',
        ) ,
        'public' => true ,
        'hierarchical' => true ,
        'show_ui' => true ,
        'show_admin_column' => true ,
        'rewrite' => array('slug' => 'agahi-category'),
        'capabilities' => array(
            'manage_terms' => 'manage_categories',
        ),
    ));

    // register non hierarchical taxonomy for agahi
    register_taxonomy('agahi_location' , 'za' , array(
        'labels' => array(
            'name' => 'مکان آگهی',
            'singular_name' => 'مکان آگهی',
            'menu_name' => 'مکان آگهی',
            'all_items' => 'همه مکان ها',
            'parent_item' => 'مکان والد',
            'parent_item_colon' => 'مکان والد:',
            'edit_item' => 'ویرایش مکان',
            'update_item' => 'بروزرسانی مکان',
            'add_new_item' => 'افزودن مکان جدید',
            'new_item_name' => 'نام مکان جدید',
            'search_items' => 'جستجوی مکان',
        ) ,
        'public' => true ,
        'hierarchical' => false ,
        'show_ui' => true ,
        'show_admin_column' => true ,
        'rewrite' => array('slug' => 'agahi-location'),
        'capabilities' => array(
            'manage_terms' => 'manage_categories',
        ),
    ));
});

// add meta box for posts
add_action('add_meta_boxes' , function(){
    add_meta_box(
        'post_meta_box' ,
        'اطلاعات اضافی پست' ,
        'post_meta_box_callback' ,
        'post' ,
        'normal' ,
        'high'
    );
});

// post meta box callback
function post_meta_box_callback($post){
    // nonce for security
    wp_nonce_field('post_meta_box_nonce', 'post_meta_box_nonce');

    $read_time = get_post_meta($post->ID, 'read_time', true);
    ?>
    <div>
        <label for="read_time">زمان مطالعه</label>
        <input type="text" name="read_time" id="read_time" value="<?php echo $read_time; ?>">
    </div>
    <?php
}

// save post meta box
add_action('save_post' , function($post_id){
    // check if the nonce is set
    if(!isset($_POST['post_meta_box_nonce']) || !wp_verify_nonce($_POST['post_meta_box_nonce'], 'post_meta_box_nonce')) 
        return;
    // check if the post is autosave
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    // check if the user has permission to edit the post
    if(!current_user_can('edit_post', $post_id))
        return;
    // check if the read time is set
    if(!isset($_POST['read_time']))
        return;
    // update the read time
    update_post_meta($post_id, 'read_time', $_POST['read_time']);
});

// add ajax action for favorite post
add_action('wp_ajax_favorite_post' , 'favorite_post_callback');
add_action('wp_ajax_nopriv_favorite_post' , 'favorite_post_callback');

function favorite_post_callback(){
    $data = [];
    $data["errors"] = [];
    $data["ok"] = true;

    // check user is logged in
    $current_user_id = get_current_user_id();

    if(!$current_user_id){
        $data["errors"][] = "لطفا برای افزودن علاقه مندی وارد حساب کاربری خود شوید";
        $data["ok"] = false;
    }

    // get post id
    $post_id = isset($_POST['post_id']) ? sanitize_text_field($_POST['post_id']) : '';

    // get post object
    $post = get_post($post_id);

    if(!$post){
        $data["errors"][] = "پست مورد نظر یافت نشد";
        $data["ok"] = false;
    }

    if($data["ok"]){
        $favorite_posts = get_user_meta($current_user_id, 'favorite_posts', true);
        if($favorite_posts){
            if(in_array($post_id, $favorite_posts)){
                // remove post id from favorite posts
                $favorite_posts = array_diff($favorite_posts, [$post_id]);
                $data["add_to_list"] = false;
            }else{
                // add post id to favorite posts
                $favorite_posts[] = $post_id;
                $data["add_to_list"] = true;
            }
        }else{
            $favorite_posts = [$post_id];
            $data["add_to_list"] = true;
        }
        update_user_meta($current_user_id, 'favorite_posts', $favorite_posts);
        
    }
    echo json_encode($data);
    die();
}

// woocommerce cart fragment
add_filter('woocommerce_add_to_cart_fragments' , function($fragments){

    $cart_count = WC()->cart->get_cart_contents_count();
    $cart_items = WC()->cart->get_cart();
    
    ob_start();
    ?>
    <div class="cart-header-content w-[42px] h-[42px] flex justify-center items-center border border-surface-normal rounded-[10px] group relative cursor-pointer">
        <img src="<?php echo THEME_DIR; ?>/src/img/header_cart.svg" alt="">
        <?php if($cart_count > 0){ ?>
            <div class="absolute -mt-[18px] ml-[30px] flex h-[18px] w-[18px] items-center justify-center rounded-full bg-red-primary text-white">
                <span class="mt-[2px] text-[12px] font-medium"><?php echo $cart_count; ?></span>
            </div>
        <?php } ?>
        <div class="absolute top-[24px] z-10 ml-[40px] border-surface-normal hidden w-[420px] flex-col items-end justify-center gap-1 rounded-lg p-4  pr-[20px] text-[14px] font-light  text-black duration-500  lg:group-hover:flex">
            <div class="z-10 ml-[160px] h-[32px] w-[32px] rotate-45 border-surface-normal border-l border-t  bg-white"></div>
            <div class=" -mt-[20px] ml-[130px] h-full w-full rounded-[14px] border-surface-normal border bg-white  py-[13px] shadow-2xl ">
                <div class=" flex h-full w-full flex-col items-center gap-[10px] text-[16px] font-semibold">
                    <div class="mt-[8px] flex w-full justify-end border-b px-[16px]">
                        <a href="<?php echo wc_get_cart_url(); ?>">
                            <div class="mb-[5px] flex flex-row items-center gap-[18px] text-[#0085ff]">
                                <p class="text-[12px] font-medium  ">مشاهده سبد خرید</p>
                            </div>
                        </a>
                    </div>
                    <?php if($cart_count > 0){ ?>
                        <div class="w-full ">
                            <div class="flex w-full flex-col items-center px-[16px]">
                                <div class="section flex h-[410px] w-full flex-col items-center  overflow-y-auto overflow-x-hidden">
                                    <?php foreach($cart_items as $item){
                                        
                                        $product = wc_get_product($item['product_id']);
                                        $product_name = $product->get_name();
                                        $product_price = $product->get_price();
                                        $product_image = $product->get_image();
                                        $product_link = $product->get_permalink();
                                        $product_quantity = $item['quantity'];
                                        $product_total = $product_price * $product_quantity;
                                        ?>
                                        <a href="<?php echo $product_link; ?>" class="w-full flex h-[138px] flex-row items-center gap-[10px] py-[10px]">
                                            <div>
                                                <div class="relative flex h-[103px] w-[88px] items-center justify-center rounded-[10px] bg-light_grey">
                                                    <?php echo $product_image; ?>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-start">
                                                <div class="text-[12px] font-medium false"><?php echo $product_name; ?></div>
                                                <span class="flex flex-row items-center gap-[5px]">
                                                    <span class="text-[14px] font-medium"><?php echo number_format($product_price); ?></span>
                                                    <span class="text-[14px] font-medium">تومان</span>
                                                </span>
                                                <div class="text-[12px] font-medium false"><?php echo $product_quantity; ?> عدد</div>
                                            </div>
                                        </a>
                                        <hr class="my-2 w-full text-[#e8eaed]">
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex h-[38px] w-full flex-row items-center justify-between bg-red-50 px-[16px]
                        ">
                        <span class="text-[12px] font-medium">مبلغ قابل پرداخت</span>
                        <span class="flex flex-row items-center gap-[5px]">
                            <span class="text-[22px] font-bold"><?php echo WC()->cart->get_cart_total(); ?></span>
                        </span></div>
                        <div class="mt-[12px] flex w-full items-center justify-center px-[16px]">
                            <a href="<?php echo wc_get_checkout_url(); ?>" class="flex h-[44px] w-full items-center justify-center rounded-[10px] bg-red-primary text-[18px] font-medium text-white">ثبت سفارش</a>
                        </div>
                    <?php }else{ ?>
                        <div><img alt="logo basket empty" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" style="color: transparent;" src="<?php echo THEME_DIR; ?>/src/img/basket-empty.gif"></div>
                        <div>سبد خرید شما خالی است</div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>  
    <?php
    $fragments['.cart-header-content'] = ob_get_clean();
    return $fragments;
});


add_action('wp_enqueue_scripts', function() {
    // add wc-cart-fragments script
    wp_enqueue_script('wc-cart-fragments');
});

// add ajax action for add to cart
add_action('wp_ajax_product_add_to_cart' , 'add_to_cart_callback');
add_action('wp_ajax_nopriv_product_add_to_cart' , 'add_to_cart_callback');

function add_to_cart_callback(){
    $data = [];
    $data["errors"] = [];
    $data["ok"] = true;

    // get product id
    $product_id = isset($_POST['product_id']) ? sanitize_text_field($_POST['product_id']) : '';

    // check product id is set
    if(!$product_id){
        $data["errors"][] = "محصول مورد نظر یافت نشد";
        $data["ok"] = false;
    }

    // check product is exists
    $product = wc_get_product($product_id);

    if(!$product){
        $data["errors"][] = "محصول مورد نظر یافت نشد";
        $data["ok"] = false;
    }

    if($data["ok"]){
        // add product to cart
        WC()->cart->add_to_cart($product_id);
    }

    echo json_encode($data);
    die();

}