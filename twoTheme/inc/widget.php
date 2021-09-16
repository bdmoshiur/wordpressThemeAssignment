<?php

function coffee_theme_widget() {
    register_sidebar( array(
        'name' => 'Right Sidebar',
        'id' => 'rs',
        'description' => 'This is a Right Sidebar',
        'before_widget' => '<div class="abt-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}

add_action( 'widgets_init', 'coffee_theme_widget' );