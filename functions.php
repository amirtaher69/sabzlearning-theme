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

    // homepage settings
    register_setting("theme_setting" , "home_slider");
    add_settings_section("home_section" , "تنظیمات صفحه اصلی" , "__return_false" , "theme-setting-home");

    // footer settings
    register_setting("theme_setting" , "footer_text");
    add_settings_section("footer_section" , "تنظیمات فوتر" , "__return_false" , "theme-setting-footer");
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

