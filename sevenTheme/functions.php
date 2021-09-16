<?php

function seventheme_after_setup_theme() {
    
    load_theme_textdomain('seventheme');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    register_nav_menus( array(
        'topmenu'    => __( 'Top Menu', 'seventheme' ),
        'footermenu' => __( 'Footer Menu', 'seventheme' ),
    ));

}

add_action( 'after_setup_theme', 'seventheme_after_setup_theme' );

function seventheme_wp_enqueue_script() {
    
    wp_enqueue_style('seventheme', get_stylesheet_uri());
    wp_enqueue_style( 'bootstarp', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    // wp_enqueue_script();
}

add_action( 'wp_enqueue_scripts', 'seventheme_wp_enqueue_script' );

function seventheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Single Post Sidebar', 'seventheme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Right Sidebar', 'seventheme' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Left', 'seventheme' ),
        'id'            => 'footer-left',
        'description'   => __( 'Widgetized Aria on the Left Site', 'seventheme' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Right', 'seventheme' ),
        'id'            => 'footer-right',
        'description'   => __( 'Widgetized Aria on the Right Site', 'seventheme' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'seventheme_widgets_init' );

// Editor change
add_filter( 'use_widgets_block_editor', '__return_false' );