<?php

function fivetheme_after_setup_theme() {
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus( array(
        'tm' => 'Top Menu',
        'hm' => 'Header Menu',
    ));
}

add_action( 'after_setup_theme', 'fivetheme_after_setup_theme');

function thelatest_theme_widgets()
{
    register_sidebar(array(
        'name'          => __( 'Right Sidebar', 'thelatest' ),
        'id'            => 'rs',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'thelatest' ),
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
        'before_title'  => '<h2',
        'after_title'   => '</h2>',
    ));
}

add_action( 'widgets_init', 'thelatest_theme_widgets' );

function the_latest_cs( $wp_customize ) {
    $wp_customize->add_section( 'footer_section', array(
        'title'      => __( 'Footer Area', 'thelatest' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'copyright_section', array(
        'default'     => 'copyright 2021',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( 'copyright_section', array(
        'label'      => __( 'Enter your Copyright Text', 'thelatest' ),
        'section'    => 'footer_section',
        'settings'   => 'copyright_section',
        'type'       => 'text',
    ) );
}

add_action( 'customize_register', 'the_latest_cs');
// Editor change
add_filter( 'use_widgets_block_editor', '__return_false' );