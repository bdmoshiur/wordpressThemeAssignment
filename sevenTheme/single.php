<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part('hero'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="posts">
            <?php while ( have_posts() ) { the_post(); ?>
                <div class="post" <?php post_class(); ?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="post-title"><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <strong><?php the_author(); ?></strong><br/>
                                    <?php echo get_the_date('jS F Y'); ?>
                                </p>
                                <ul class="list-unstyled">
                                    <li><?php echo get_the_tag_list(' ','<br>'); ?></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <p><?php
                                         if ( has_post_thumbnail()) {
                                            echo '<a class="popup" href="#" data-featherlight="image">';
                                            the_post_thumbnail( 'large', array('class' => "img-fluid") );
                                            echo "</a>";
                                        }

                                    ?></p>
                                <p>
                                    <?php 
                                        the_content(); 
                                        next_post_link();
                                        echo "<br>";
                                        previous_post_link();
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="container post-pagination">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <?php
                            the_posts_pagination( array( 
                                'screen_reader_text' => '',
                                'prev_text' => "Old Posts",
                                'next_text' => "New Posts"
                            ) );
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php
                if ( is_active_sidebar('sidebar-1') ) {
                    dynamic_sidebar('sidebar-1');
                }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>