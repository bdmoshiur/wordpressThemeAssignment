<?php

function fourtheme_after_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    
    register_nav_menus( array(
        'header_menu' => __( 'Header Menu', 'slickgreen' ),
        'sidebar_menu' => __( 'Sidebar Menu', 'slickgreen' ),
    ));
}

add_action( 'after_setup_theme', 'fourtheme_after_setup_theme' );