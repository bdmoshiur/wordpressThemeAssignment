<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
    <div class="header">
        <?php  
            wp_nav_menu( array(
                'theme_location' => 'header_menu',
                'fallback_cb' => false,
            ));
        ?>
    </div>
    <div class="post">
        <?php while ( have_posts()) { the_post(); ?>
                <h2><?php  the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <p><?php the_content(); ?></p>
                <?php the_post_thumbnail_url('600px'); ?>
        <?php } ?>
    </div>
    <div class="sidebar">
        <?php  
            wp_nav_menu( array(
                'theme_location' => 'sidebar_menu',
                'fallback_cb' => false,
            ));
        ?>
    </div>
    <div class="footer">
        <?php  
            wp_nav_menu( array(
                'theme_location' => 'footer_menu',
                'fallback_cb' => false,
            ));
        ?>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>