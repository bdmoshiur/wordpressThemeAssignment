<?php
function custom_slider_init() {
    $labels = array(
        'name'                  => _x( 'Slider', 'Post type general name', 'slider' ),
        'singular_name'         => _x( 'slider', 'Post type singular name', 'slider' ),
        'menu_name'             => _x( 'Slider', 'Admin Menu text', 'slider' ),
        'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'slider' ),
        'add_new'               => __( 'Add New', 'slider' ),
        'add_new_item'          => __( 'Add New Slider', 'slider' ),
        'new_item'              => __( 'New slider', 'slider' ),
        'edit_item'             => __( 'Edit slider', 'slider' ),
        'view_item'             => __( 'View slider', 'slider' ),
        'all_items'             => __( 'All slider', 'slider' ),
        'search_items'          => __( 'Search slider', 'slider' ),
        'parent_item_colon'     => __( 'Parent slider:', 'slider' ),
        'not_found'             => __( 'No slider found.', 'slider' ),
        'not_found_in_trash'    => __( 'No slider found in Trash.', 'slider' ),
        'featured_image'        => _x( 'slider Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'slider' ),
        'set_featured_image'    => _x( 'Set slider image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'slider' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'slider' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'slider' ),
        'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'slider' ),
        'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'slider' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'slider' ),
        'filter_items_list'     => _x( 'Filter slider list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'slider' ),
        'items_list_navigation' => _x( 'slider list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'slider' ),
        'items_list'            => _x( 'slider list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'slider' ),
    );
    $args = array (
        'labels'             => $labels,
        'description'        => 'slider custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'myslider', $args );
}


add_action( 'init', 'custom_slider_init' );