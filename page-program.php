<?php 
/* Template Name: Program */
?>
<?php get_header(); ?>

    <div class="container">
        <main class="row">
            <div class="col-xs">
                <div class="content-card program">

                    <?php get_template_part( 'partials/program/form', 'filters'); ?>

                    <div class="row program-list">
                        <?php
                            $args = array( 'post_type' => 'movie', 'posts_per_page' => -1, 'paged' => 'off' );
                            $selectedMoviesLoop = new WP_Query( $args );
                            while ( $selectedMoviesLoop->have_posts() ) : $selectedMoviesLoop->the_post();
                                get_template_part( 'partials/program/loop', 'movie' );
                            endwhile;
                        ?>
                    </div> 

                </div>
            </div>
            
        </main> 
    </div>

<?php get_footer(); ?>