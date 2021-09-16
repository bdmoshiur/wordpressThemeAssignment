hi<?php get_header(); ?>
  <!-- BEGIN body -->
  <div id="body">
  <div class="single-post">
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">
        <?php 
         while ( have_posts()) {
           the_post();
        ?>
        <!-- begin post -->
        <div class="post">
            <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        <!-- end post -->
        <?php } ?>
      </div>
    </div>
    </div>
    <!-- END content -->
    <?php get_sidebar(); ?>
    <div class="break"></div>
  </div>
  <!-- END body -->
 <?php get_footer(); ?>
</div>
<!-- END wrapper -->
<?php wp_footer(); ?>
</body>
</html>
