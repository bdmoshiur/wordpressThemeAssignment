<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/style.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
		<div id="header">
        	<h1><?php bloginfo('title'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </div>   
        
        <div id="menu">
        	<?php 
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'fallback_cb' => false,
                ));
            ?>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Links</h3>
                        
                <?php 
                wp_nav_menu( array(
                    'theme_location' => 'sidebar_menu',
                    'fallback_cb' => false,
                ));
            ?>
        </div>
                
        <div id="leftmenu_bottom"></div>
        </div>
        
		<div id="content">
    
        <div id="content_top"></div>
        <div id="content_main">
                <?php while ( have_posts() ) {  the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <br>
                    <br>
                    <br>
                    <p><?php the_content(); ?></p>
              <?php } ?>
        </div>
        <div id="content_bottom"></div>
            
            <div id="footer"><h3><a href="http://www.bryantsmith.com">florida web design</a></h3></div>
      </div>
   </div>
   <?php wp_footer(); ?>
</body>
</html>
