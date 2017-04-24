<?php 
/* Template Name: Program */
?>
<?php get_header(); ?>

    <div class="container">
        <main class="row">
            <div class="col-xs">
                <div class="content-card program">

                    <?php // Hent templaten i filen: partials/program/form-filters.php ?>
                    <?php get_template_part( 'partials/program/form', 'filters'); ?>

                    <div class="row program-list">
                        <?php
                            $args = array( 
                                'post_type' => 'movie', // Post type: Film
                                'posts_per_page' => -1, // Hent alle
                                'paged' => 'off' // Ingen sideopdeling
                            );
                            $selectedMoviesLoop = new WP_Query( $args );
                            while ( $selectedMoviesLoop->have_posts() ) : $selectedMoviesLoop->the_post();
                                // Brug templaten i filen: partials/program/loop-movie.php 
                                get_template_part( 'partials/program/loop', 'movie' );
                            endwhile;
                        ?>
                    </div> 

                </div>
            </div>
            
        </main> 
    </div>

<?php get_footer(); ?>