  <!-- BEGIN sidebar -->
  <div id="sidebar">
      <?php
        if ( is_active_sidebar( 'rs') ) {
          dynamic_sidebar('rs');
        }
      ?>
    </div>
    <!-- END sidebar -->