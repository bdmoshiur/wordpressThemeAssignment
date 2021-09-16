<!--slide-starts-->
<div class="slide">
		<div class="container">
			<div class="fle-xsel">
				<ul id="flexiselDemo3">

					<?php
						$slider = new WP_Query( array(
							'post_type' => 'myslider',
						));
						while ( $slider->have_posts()) {
							$slider->the_post();
					?>
					<li>
						<a href="#">
							<div class="banner-1">
								<?php the_post_thumbnail(); ?>
							</div>
						</a>
					</li>
					<?php } ?>			
				</ul>					
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2015 Coffee Break. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->

	<?php wp_footer(); ?>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>