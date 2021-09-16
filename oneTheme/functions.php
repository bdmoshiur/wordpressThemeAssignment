<?php

function onetheme_add_theme_suport() {
    load_theme_textdomain('onetheme', get_template_directory_uri() . '/languages' );
    add_theme_support('title-tag');
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'onetheme' ),
        'footer_menu'  => __( 'Footer Menu', 'onetheme' ),
    ) );
}

add_action('after_setup_theme', 'onetheme_add_theme_suport');

function onetheme_theme_css_js_enqueue() {
    // CSS Load
    wp_enqueue_style( 'poppins-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mainstyle-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );

    // JS Load

    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imageloaded-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'onetheme_theme_css_js_enqueue' );