
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset'); ?>" />
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<?php
				if ( has_custom_logo()) {
					the_custom_logo();
				} else {
					echo "<h2>" . get_bloginfo('name') . "</h2>";
				}
				?>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
				 
				 <?php 
					$twotheme_menu = wp_nav_menu( array(
							'theme_location' => 'hm',
							'menu_class'     => 'navig',
							'fallback_cb'     => false,
							'echo'     => false,
						) );
						$twotheme_menu = str_replace( 'aria-content="page"', 'class="active"', $twotheme_menu );
						echo $twotheme_menu;
				?>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<?php if ( get_theme_mod('social_fb_icon') ) { ?>
						<li><a href="<?php echo esc_url(get_theme_mod('social_fb_icon')); ?>"><span class="fb"> </span></a></li>
					<?php } ?>

					<?php if ( get_theme_mod('social_tw_icon') ) { ?>
						<li><a href="<?php echo esc_url(get_theme_mod('social_tw_icon')); ?>"><span class="twit"> </span></a></li>
					<?php } ?>
					
					<?php if ( get_theme_mod('social_pr_icon') ) { ?>
						<li><a href="<?php echo esc_url(get_theme_mod('social_pr_icon')); ?>"><span class="pin"> </span></a></li>
					<?php } ?>
					
					<?php if ( get_theme_mod('social_ln_icon') ) { ?>
						<li><a href="<?php echo esc_url(get_theme_mod('social_ln_icon')); ?>"><span class="rss"> </span></a></li>
					<?php } ?>

					<?php if ( get_theme_mod('social_gt_icon') ) { ?>
						<li><a href="<?php echo esc_url(get_theme_mod('social_gt_icon')); ?>"><span class="drbl"> </span></a></li>
					<?php } ?>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top" style="background-image: url(<?php header_image(); ?>);">
				<div class="banner-text" style="background-color:<?php echo get_theme_mod('header_bg_color'); ?>">
					<h1 style="color:<?php echo get_theme_mod('header_text_color'); ?>"><?php echo esc_html( get_theme_mod('header_text') ); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->