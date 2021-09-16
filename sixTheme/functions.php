<?php

function sixtheme_after_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'headermenu' => __('Header Menu', 'landscapetitles'),
    ));
}

add_action( "after_setup_theme", 'sixtheme_after_setup_theme' );