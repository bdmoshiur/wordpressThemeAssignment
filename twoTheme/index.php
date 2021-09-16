<?php get_header(); ?>
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">
						<?php 
							if ( have_posts() ) { ?>
								<?php while ( have_posts() ) {
									the_post();
								?>
										<div class="col-md-6 abt-left">
											<a class="coffee-post-thum" href="single.html">
												<?php the_post_thumbnail(); ?>
											</a>
											<h6><?php the_category(' '); ?></h6>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<p><?php echo wp_trim_words( get_the_content(), 24, '.......')?></p>
											<label><?php the_date('d F Y')?></label>
										</div>
							
								<?php 	} ?>	
							<?php } ?>
					</div>	
				</div>
				<?php get_sidebar(); ?>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php get_footer(); ?>