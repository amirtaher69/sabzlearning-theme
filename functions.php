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
    register_setting("theme_setting" , "header_logo");
    add_settings_section("header_section" , "تنظیمات هدر" , "__return_false" , "theme-setting-header");

    add_settings_field(
        "header_logo_field" ,
        "لوگوی هدر" ,
        "header_logo_field_callback" ,
        "theme-setting-header" ,
        "header_section"
    );

    // homepage settings
    register_setting("theme_setting" , "home_slider");
    register_setting("theme_setting" , "home_content");

    add_settings_section("home_section" , "تنظیمات صفحه اصلی" , "__return_false" , "theme-setting-home");

    add_settings_field(
        "home_content_field",
        "متن صفحه اصلی",
        "home_content_field_callback",
        "theme-setting-home",
        "home_section"
    );

    // footer settings
    register_setting("theme_setting" , "footer_text");
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
            settings_fields("theme_setting");
            if($active_tab=="header"){
                do_settings_sections("theme-setting-header");
            }
            if($active_tab=="home"){
                do_settings_sections("theme-setting-home");
            }
            if($active_tab=="footer"){
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