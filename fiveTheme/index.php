<?php
   get_header(); 
?>
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">
        <?php 
          if ( ! have_posts()) {
            echo "<h1>Post Not Found</h1>";
          }
        ?>
        <?php 
         while ( have_posts()) {
           the_post();
        ?>
        <!-- begin post -->
        <div class="post">
          <h2><a href="#"><?php the_category(' '); ?></a></h2>
          <p class="date"><a href="#"><?php the_author(); ?></a> <?php the_time( 'd F Y' ) ?> | <a href="#"><?php comments_number(); ?></a></p>
          <div class="thumb">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->id) ); ?>" alt="" />
            </a>
          </div>
          <p><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_content(), 30, '.....'); ?></a></p>
          <a class="readmore" href="<?php the_permalink(); ?>">Read More</a> </div>
        <!-- end post -->
        <?php } ?>
      </div>
    </div>
    <!-- END content -->
    <?php get_sidebar(); ?>
    <div class="break"></div>
  </div>
  <!-- END body -->
  <?php 
    get_footer(); 
  ?>
