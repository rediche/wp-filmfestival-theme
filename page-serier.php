<?php
/* Template Name: Serier */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="content-card">
                <h1 class="content-card-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>

            <div class="content-card slider-card">
                <h2 class="content-card-extras-title no-margin">Udvalgte film</h2>
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