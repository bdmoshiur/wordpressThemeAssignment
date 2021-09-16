<!DOCTYPE >
<html>
<head>
<title><?php bloginfo('title')?></title>
<meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <div class="buffer">
      <div class="buffer">
        <ul>
            <li>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'tm',
                    'fallback_cb' => false,
                ) );
            ?>
            </li>
        </ul>
        <?php the_custom_logo(); ?>
        <ol>
            <li>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'hm',
                    'fallback_cb' => false,
                ) );
            ?>
            </li>
        </ol>
        <?php echo get_search_form(); ?>
      </div>
    </div>
  </div>
  <!-- END header -->