<?php get_header(); ?>

    <div class="container">
        <main class="row">
            <div class="col-xs">
                <div class="content-card">
                    <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'partials/movie/loop', 'movie' ); ?>
                        <?php endwhile; else : ?>
                            <div class="row">
                                <div class="col-xs">
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>


                    </div>
                    
                </div>
            </div>
            
        </main> 
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs">
                <div class="content-card slider-card">
                    <h2 class="content-card-extras-title no-margin">Lignende film</h2>
                    <div class="slider-items row">
                        <?php
                            $args = array( 'post_type' => 'movie', 'posts_per_page' => 3 );
                            $selectedMoviesLoop = new WP_Query( $args );
                            while ( $selectedMoviesLoop->have_posts() ) : $selectedMoviesLoop->the_post();
                                get_template_part( 'partials/frontpage/loop', 'movie' );
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>