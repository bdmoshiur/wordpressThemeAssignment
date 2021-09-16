<?php

function threetheme_after_setup_theme() {
    add_theme_support('mwnus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    
    register_nav_menus( array(
        'header_menu' => __('Header Menu', 'learn_skill'),
        'footer_menu' => __('Footer Menu', 'learn_skill'),
        'sidebar_menu' => __('sidebar Menu', 'learn_skill'),
    ));
}

add_action( 'after_setup_theme', 'threetheme_after_setup_theme' );