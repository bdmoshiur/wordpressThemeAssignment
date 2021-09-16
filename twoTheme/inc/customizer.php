<?php

function coffee_social_links( $wp_customize ) {
    $wp_customize->add_section( 'social_form_link', array(
        'title' => 'Social Media Icon',
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'social_fb_icon', array(
        'default' => 'https://www.facebook.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'social_fb_icon', array(
        'label' => 'Add Facebook Link',
        'section' => 'social_form_link',
        'type'   => 'text',
    ) );

    $wp_customize->add_setting( 'social_tw_icon', array(
        'default' => 'https://www.twitter.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'social_tw_icon', array(
        'label' => 'Add Twitter Link',
        'section' => 'social_form_link',
        'type'   => 'text',
    ) );

    $wp_customize->add_setting( 'social_ln_icon', array(
        'default' => 'https://www.linkedin.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'social_ln_icon', array(
        'label' => 'Add Linkedin Link',
        'section' => 'social_form_link',
        'type'   => 'text',
    ) );

    $wp_customize->add_setting( 'social_pr_icon', array(
        'default' => 'https://www.pinterest.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'social_pr_icon', array(
        'label' => 'Add pinterest Link',
        'section' => 'social_form_link',
        'type'   => 'text',
    ) );
    
    $wp_customize->add_setting( 'social_gt_icon', array(
        'default' => 'https://www.github.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'social_gt_icon', array(
        'label' => 'Add Github Link',
        'section' => 'social_form_link',
        'type'   => 'text',
    ) );

    $wp_customize->add_setting( 'header_text', array(
        'default' => 'Header Text',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_text', array(
        'label' => 'Add Header Text',
        'section' => 'header_image',
        'type'   => 'text',
    ) );

    $wp_customize->add_setting( 'header_text_color', array(
        'default' => '#333',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Color_Control(
            $wp_customize, 'header_text_color', array(
                'label' => 'Add Header Text BgColor',
                'section' => 'header_image',
            )
    ) );

    $wp_customize->add_setting( 'header_bg_color', array(
        'default' => '#fff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Color_Control(
            $wp_customize, 'header_bg_color', array(
                'label' => 'Add Header Text BgColor',
                'section' => 'header_image',
            )
    ) );
    
    $wp_customize->add_setting( 'header_text_color', array(
        'default' => '#333',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Color_Control(
            $wp_customize, 'header_text_color', array(
                'label' => 'Add Header Text Color',
                'section' => 'header_image',
            )
    ) );
    
}

add_action( 'customize_register', 'coffee_social_links' );