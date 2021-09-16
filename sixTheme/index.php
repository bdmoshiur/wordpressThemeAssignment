<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset');  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="container">
	<div id="header">
		<h1><?php bloginfo('title'); ?></h1>
        <div id="links">
        <?php  wp_nav_menu( array(
               'theme_location' => 'headermenu',
               'fallback_cb'    => false,
           ))?>
        </div>
    </div>
	<div id="content">
        <?php 
            while ( have_posts()) { the_post(); ?>
        <?php the_post_thumbnail(); ?>
            <div class="contenttext">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
    	<?php } ?>
    </div>
    
    <div id="footer"><a href="http://www.bryantsmith.com">web design florida</a></div>
</div>

<?php  wp_footer(); ?>
</body>
</html>
