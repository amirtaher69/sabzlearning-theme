<?php
define('THEME_DIR', get_template_directory_uri());

add_action('after_setup_theme' , 'add_theme_support_function');
function add_theme_support_function(){
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');

}

add_action('after_setup_theme' , 'register_my_menu');
function register_my_menu(){
    register_nav_menus(array('primary' => 'منوی اصلی' , 'secondary' => 'منوی ثانویه'));
}