<?php

function twotheme_theme_setup() {
    load_theme_textdomain('twotheme');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array( 'link', 'audio', 'video', 'gallery') );
    add_theme_support('html5', array( 'comment-form', 'comment-list', 'search-form', 'gallery') );
    add_theme_support('custom-logo', array(
    'height' => '100',  
    'width' => '100',  
    'flex-height' => true,  
    'flex-width' => true,  
    ) );

    register_nav_menus( array(
        'hm' => __( 'Header Menu', 'twotheme'),
        'fm' => __( 'Footer Menu', 'twotheme'),
        'sm' => __( 'Sidebar Menu', 'twotheme'),
    ) );
}

add_action( 'after_setup_theme', 'twotheme_theme_setup' );

function twotheme_link_file() {
    wp_enqueue_style( 'bootstarp', get_template_directory_uri() . '/css/bootstrap.css', null, true, 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', null, true, 'all' );
    wp_enqueue_style( 'chocolat', get_template_directory_uri() . '/css/chocolat.css', null, true, 'all' );
    wp_enqueue_style( 'main', get_stylesheet_uri() );

    wp_enqueue_script( 'move-top', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), true, true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array('jquery'), true, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.97074.js', array('jquery'), true, true );
    wp_enqueue_script( 'chocolat', get_template_directory_uri() . '/js/jquery.chocolat.js', array('jquery'), true, true );
    wp_enqueue_script( 'hoverdir', get_template_directory_uri() . '/js/jquery.hoverdir.js', array('jquery'), true, true );
    wp_enqueue_script( 'flexisel', get_template_directory_uri() . '/js/jquery.flexisel.js', array('jquery'), true, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), true, true );

}

add_action( 'wp_enqueue_scripts', 'twotheme_link_file' );

// include file
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/widget.php';
require get_template_directory() . '/inc/slider.php';

// Editor change
add_filter( 'use_widgets_block_editor', '__return_false' );