<?php
define('THEME_DIR', get_template_directory_uri());

add_action('after_setup_theme' , 'add_theme_support_function');
function add_theme_support_function(){
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');

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
    register_setting("theme_setting_home" , "home_slider");
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
});